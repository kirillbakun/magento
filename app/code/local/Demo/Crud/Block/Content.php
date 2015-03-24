<?php
    class Demo_Crud_Block_Content extends Mage_Core_Block_Template
    {
        /*protected function _toHtml() {
            return 'Demo Crud';
        }*/

        protected function _construct() {
            $this->setTemplate('demo/crud/view.phtml');
        }

        public function getRowUrl(Demo_Crud_Model_Crud $crud) {
            return $this->getUrl('*/*/view/', array(
                'id' => $crud->getId()
            ));
        }

        public function getCollection() {
            return Mage::getModel('crud/crud')->getCollection();
        }
    }