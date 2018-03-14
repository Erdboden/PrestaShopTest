<?php
include_once _PS_MODULE_DIR_ . 'iconsforfeatures/classes/FeaturesIcons.php';
class AdminFeaturesController extends AdminFeaturesControllerCore
{






    /*
    * module: iconsforfeatures
    * date: 2018-03-14 11:33:22
    * version: 1.0.0
    */
    protected $position_identifier = 'id_feature';
    /*
    * module: iconsforfeatures
    * date: 2018-03-14 11:33:22
    * version: 1.0.0
    */
    protected $feature_name;

    /*
    * module: iconsforfeatures
    * date: 2018-03-14 11:33:22
    * version: 1.0.0
    */
    public function renderForm()
    {
        $image = '';
        $icon_url= false;
        $icon_size = file_exists($image) ? filesize($image) / 1000 : false;
        $icon_types = ImageType::getImagesTypes('categories');
        $this->toolbar_title = $this->trans('Add a new feature', array(), 'Admin.Catalog.Feature');
        $this->fields_form = array(
            'legend' => array(
                'title' => $this->trans('Feature', array(), 'Admin.Catalog.Feature'),
                'icon' => 'icon-info-sign'
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->trans('Name', array(), 'Admin.Global'),
                    'name' => 'name',
                    'lang' => true,
                    'size' => 33,
                    'hint' => $this->trans('Invalid characters:', array(), 'Admin.Notifications.Info').' <>;=#{}',
                    'required' => true
                ),
                array(
                    'type' => 'file',
                    'label' => $this->trans('Icon features', array(), 'Admin.Catalog.Feature'),
                    'name' => 'icon',
                    'display_image' => true,
                    'size' => $icon_size,
                    'image' => $icon_url ? $icon_url : false,
                    'hint' => $this->trans('Displays a small image in the parent category\'s page, if the theme allows it.', array(), 'Admin.Catalog.Help'),
                ),
            )
        );
        if (Shop::isFeatureActive()) {
            $this->fields_form['input'][] = array(
                'type' => 'shop',
                'label' => $this->trans('Shop association', array(), 'Admin.Global'),
                'name' => 'checkBoxShopAsso',
            );
        }
        $this->fields_form['submit'] = array(
            'title' => $this->trans('Save', array(), 'Admin.Actions'),
        );
        return AdminController::renderForm();
    }
    /*
    * module: iconsforfeatures
    * date: 2018-03-14 11:33:22
    * version: 1.0.0
    */
    public function postProcess()
    {
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

    /*
    * module: iconsforfeatures
    * date: 2018-03-14 11:33:22
    * version: 1.0.0
    */
    public function processAdd()
    {
        $object = parent::processAdd();
        if (Tools::isSubmit('submitAdd'.$this->table.'AndStay') && !count($this->errors)) {
            if ($this->table == 'feature_value' && ($this->display == 'edit' || $this->display == 'add')) {
                $this->redirect_after = self::$currentIndex.'&addfeature_value&id_feature='.(int)Tools::getValue('id_feature').'&token='.$this->token;
            } else {
                $this->redirect_after = self::$currentIndex.'&'.$this->identifier.'=&conf=3&update'.$this->table.'&token='.$this->token;
            }
        } elseif (Tools::isSubmit('submitAdd'.$this->table.'AndStay') && count($this->errors)) {
            $this->display = 'editFeatureValue';
        }
        return $object;
    }

    /*
    * module: iconsforfeatures
    * date: 2018-03-14 11:33:22
    * version: 1.0.0
    */
    public function processUpdate()
    {
        $object = parent::processUpdate();
        if (Tools::isSubmit('submitAdd'.$this->table.'AndStay') && !count($this->errors)) {
            $this->redirect_after = self::$currentIndex.'&'.$this->identifier.'=&conf=3&update'.$this->table.'&token='.$this->token;
        }
        $image_name = 'new-image.jpg';

        $iconModel = new FeaturesIcons($object->id);
        if (!Validate::isLoadedObject($iconModel)) {
//            $iconModel->id_feature_icon = $object->id;
            $iconModel->id_feature= $object->id;
            $iconModel->force_id = true;
        }

        $iconModel->image = $image_name;
        $iconModel->save();
        dump($iconModel);
        exit();
        return $object;
    }

    /*
    * module: iconsforfeatures
    * date: 2018-03-14 11:33:22
    * version: 1.0.0
    */
    public function processSave()
    {
        if ($this->table == 'feature') {
            $id_feature = (int)Tools::getValue('id_feature');
            if ($id_feature <= 0) {
                $sql = 'SELECT `position`+1
						FROM `'._DB_PREFIX_.'feature`
						ORDER BY position DESC';
                $_POST['position'] = DB::getInstance()->getValue($sql);
            }
            foreach ($_POST as $key => $value) {
                if (preg_match('/^name_/Ui', $key)) {
                    $_POST[$key] = str_replace('\n', '', str_replace('\r', '', $value));
                }
            }
        }
        return parent::processSave();
    }

    /*
    * module: iconsforfeatures
    * date: 2018-03-14 11:33:22
    * version: 1.0.0
    */
    public function getList($id_lang, $order_by = null, $order_way = null, $start = 0, $limit = null, $id_lang_shop = false)
    {
        if ($this->table == 'feature_value') {
            $this->_where .= ' AND (a.custom = 0 OR a.custom IS NULL)';
        }
        parent::getList($id_lang, $order_by, $order_way, $start, $limit, $id_lang_shop);
        if ($this->table == 'feature') {
            $nb_items = count($this->_list);
            for ($i = 0; $i < $nb_items; ++$i) {
                $item = &$this->_list[$i];
                $query = new DbQuery();
                $query->select('COUNT(fv.id_feature_value) as count_values');
                $query->from('feature_value', 'fv');
                $query->where('fv.id_feature ='.(int)$item['id_feature']);
                $query->where('(fv.custom=0 OR fv.custom IS NULL)');
                $res = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($query);
                $item['value'] = (int)$res;
                unset($query);
            }
        }
    }
    /*
    * module: iconsforfeatures
    * date: 2018-03-14 11:33:22
    * version: 1.0.0
    */
    public function ajaxProcessUpdatePositions()
    {
        if ($this->access('edit')) {
            $way = (int)Tools::getValue('way');
            $id_feature = (int)Tools::getValue('id');
            $positions = Tools::getValue('feature');
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
                            echo 'ok position '.(int)$position.' for feature '.(int)$pos[1].'\r\n';
                        } else {
                            echo '{"hasError" : true, "errors" : "Can not update feature '.(int)$id_feature.' to position '.(int)$position.' "}';
                        }
                    } else {
                        echo '{"hasError" : true, "errors" : "This feature ('.(int)$id_feature.') can t be loaded"}';
                    }
                    break;
                }
            }
        }
    }
}
