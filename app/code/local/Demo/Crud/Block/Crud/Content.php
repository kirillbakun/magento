<?php
class Demo_Crud_Block_Crud_Content extends Mage_Core_Block_Template
{
    protected function _construct() {
        $this->setTemplate('demo/crud/crud/view.phtml');
    }

    public function getCrud() {
        return Mage::getModel('demo_crud/crud')->load($this->getCrudId());
    }
}