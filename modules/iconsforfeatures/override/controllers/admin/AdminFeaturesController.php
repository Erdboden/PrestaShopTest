<?php
include_once _PS_MODULE_DIR_ . 'iconsforfeatures/classes/FeaturesIcons.php';

class AdminFeaturesController extends AdminFeaturesControllerCore
{
    /*
    * module: iconsforfeatures
    * date: 2018-03-14 11:33:22
    * version: 1.0.0
    */
    protected $_feature = null;

    public $image_error = false;

    public function renderForm()
    {
        $obj       = $this->loadObject(true);
        $icon      = '';
        $iconModel = $this->getModel($obj);
        if (!empty($iconModel)) {
            $icon = _PS_IMG_DIR_ . 'feature_icons/' . $iconModel[0]['image'];
        }

        $icon_url  = ImageManager::thumbnail($icon, $this->table . '_' . (int)$obj->id . '.' . $this->imageType, 350,
            $this->imageType, true, true);
        $icon_size = file_exists($icon) ? filesize($icon) / 1000 : false;

        $this->toolbar_title = $this->trans('Add a new feature', array(), 'Admin.Catalog.Feature');
        $this->fields_value  = array(
            'icon' => $icon ? $icon : false,
        );
        $this->fields_form   = array(
            'legend' => array(
                'title' => $this->trans('Feature', array(), 'Admin.Catalog.Feature'),
                'icon'  => 'icon-info-sign'
            ),
            'input'  => array(
                array(
                    'type'     => 'text',
                    'label'    => $this->trans('Name', array(), 'Admin.Global'),
                    'name'     => 'name',
                    'lang'     => true,
                    'size'     => 33,
                    'hint'     => $this->trans('Invalid characters:', array(), 'Admin.Notifications.Info') . ' <>;=#{}',
                    'required' => true
                ),
                array(
                    'type'          => 'file',
                    'label'         => $this->trans('Icon features', array(), 'Admin.Catalog.Feature'),
                    'name'          => 'icon',
                    'display_image' => true,
                    'size'          => $icon_size,
                    'image'         => $icon_url ? $icon_url : false,
                    'delete_url'    => self::$currentIndex . '&id_feature=' . $obj->id . '&token=' . $this->token . '&deleteImage=1',
                    'hint'          => $this->trans('Displays a small image in the parent category\'s page, if the theme allows it.',
                        array(), 'Admin.Catalog.Help'),
                ),
            )
        );
        if (Shop::isFeatureActive()) {
            $this->fields_form['input'][] = array(
                'type'  => 'shop',
                'label' => $this->trans('Shop association', array(), 'Admin.Global'),
                'name'  => 'checkBoxShopAsso',
            );
        }
        $this->fields_form['submit'] = array(
            'title' => $this->trans('Save', array(), 'Admin.Actions'),
        );

        return AdminController::renderForm();
    }

    public function postProcess()
    {
        if (Tools::getValue('deleteImage')) {
            $obj       = $this->loadObject(true);
            $iconModel = new FeaturesIcons($this->getModel($obj)[0]['id_feature_icon']);
            $iconModel->deleteImage(true);
            $iconModel->delete();
        }

        if (!Feature::isFeatureActive()) {
            return;
        }
        if ($this->table == 'feature_value' && ($this->action == 'save' || $this->action == 'delete' || $this->action == 'bulkDelete')) {
            Hook::exec('displayFeatureValuePostProcess',
                array('errors' => &$this->errors));
        } // send errors as reference to allow displayFeatureValuePostProcess to stop saving process
        else {
            Hook::exec('displayFeaturePostProcess',
                array('errors' => &$this->errors));
        } // send errors as reference to allow displayFeaturePostProcess to stop saving process
        parent::postProcess();
        if ($this->table == 'feature_value' && ($this->display == 'edit' || $this->display == 'add')) {
            $this->display = 'editFeatureValue';
        }
    }

    public function processAdd()
    {
        $object = parent::processAdd();
        if (Tools::isSubmit('submitAdd' . $this->table . 'AndStay') && !count($this->errors)) {
            if ($this->table == 'feature_value' && ($this->display == 'edit' || $this->display == 'add')) {
                $this->redirect_after = self::$currentIndex . '&addfeature_value&id_feature=' . (int)Tools::getValue('id_feature') . '&token=' . $this->token;
            } else {
                $this->redirect_after = self::$currentIndex . '&' . $this->identifier . '=&conf=3&update' . $this->table . '&token=' . $this->token;
            }
        } elseif (Tools::isSubmit('submitAdd' . $this->table . 'AndStay') && count($this->errors)) {
            $this->display = 'editFeatureValue';
        }

        return $object;
    }

    public function processUpdate()
    {
        $object = parent::processUpdate();
        if (!count($this->errors)) {
            if (Tools::isSubmit('submitAdd' . $this->table . 'AndStay') && !count($this->errors)) {
                $this->redirect_after = self::$currentIndex . '&' . $this->identifier . '=&conf=3&update' . $this->table . '&token=' . $this->token;
            }

            $iconModel = new FeaturesIcons($object->id);
            if (!Validate::isLoadedObject($iconModel)) {
                $iconModel->id_feature = $object->id;
                $iconModel->force_id   = true;
            }

            $icon = Tools::fileAttachment('icon');

            $iconModel->image = $icon['name'];
            $iconModel->save();
        }

        return $object;
    }

    protected function postImage($id)
    {
        $ret = parent::postImage($id);

        $icon = Tools::fileAttachment('icon');
        if ($icon['mime'] == 'image/svg+xml') {
            $targetDir  = _PS_IMG_DIR_ . 'feature_icons/';
            $targetFile = $targetDir . basename($icon['name']);
            file_put_contents($targetFile, $icon['content']);

        } elseif ($error = ImageManager::validateUpload($_FILES['icon'], Tools::getMaxUploadSize())) {
            $this->errors[] = $error . ', .svg';
        } elseif (!($tmpName = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($icon['tmp_name'], $tmpName)) {
            $ret = false;
        } else {
            $targetDir  = _PS_IMG_DIR_ . 'feature_icons/';
            $targetFile = $targetDir . basename($icon['name']);
            ImageManager::resize($icon['tmp_name'], $targetFile,
                Configuration::get('ICONSFORFEATURES_IMAGE_WIDTH', null),
                Configuration::get('ICONSFORFEATURES_IMAGE_HEIGHT', null));

            if (count($this->errors)) {
                $ret = false;
            }
        }

        return $ret;
    }


    public function getList(
        $id_lang,
        $order_by = null,
        $order_way = null,
        $start = 0,
        $limit = null,
        $id_lang_shop = false
    ) {
        if ($this->table == 'feature_value') {
            $this->_where .= ' AND (a.custom = 0 OR a.custom IS NULL)';
        }
        parent::getList($id_lang, $order_by, $order_way, $start, $limit, $id_lang_shop);
        if ($this->table == 'feature') {
            $nb_items = count($this->_list);
            for ($i = 0; $i < $nb_items; ++$i) {
                $item  = &$this->_list[$i];
                $query = new DbQuery();
                $query->select('COUNT(fv.id_feature_value) as count_values');
                $query->from('feature_value', 'fv');
                $query->where('fv.id_feature =' . (int)$item['id_feature']);
                $query->where('(fv.custom=0 OR fv.custom IS NULL)');
                $res           = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($query);
                $item['value'] = (int)$res;
                unset($query);
            }
        }
    }

    public function ajaxProcessUpdatePositions()
    {
        if ($this->access('edit')) {
            $way           = (int)Tools::getValue('way');
            $id_feature    = (int)Tools::getValue('id');
            $positions     = Tools::getValue('feature');
            $new_positions = array();
            foreach ($positions as $v) {
                if (!empty($v)) {
                    $new_positions[] = $v;
                }
            }
            foreach ($new_positions as $position => $value) {
                $pos = explode('_', $value);
                if (isset($pos[2]) && (int)$pos[2] === $id_feature) {
                    if ($feature = new Feature((int)$pos[2])) {
                        if (isset($position) && $feature->updatePosition($way, $position, $id_feature)) {
                            echo 'ok position ' . (int)$position . ' for feature ' . (int)$pos[1] . '\r\n';
                        } else {
                            echo '{"hasError" : true, "errors" : "Can not update feature ' . (int)$id_feature . ' to position ' . (int)$position . ' "}';
                        }
                    } else {
                        echo '{"hasError" : true, "errors" : "This feature (' . (int)$id_feature . ') can t be loaded"}';
                    }
                    break;
                }
            }
        }
    }

    public function getModel($obj)
    {
        $sql = new DbQuery();
        $sql->select('*');
        $sql->from('features_icons', 'fi');
        $sql->where('fi.id_feature = ' . $obj->id);

        return Db::getInstance()->executeS($sql);
    }
}
