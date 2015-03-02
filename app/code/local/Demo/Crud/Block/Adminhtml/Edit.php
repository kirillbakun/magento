<?php
class Demo_Crud_Block_Adminhtml_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    protected function _construct() {
        $this->_blockGroup = 'demo_crud';
        $this->_mode = 'edit';
        $this->_controller = 'adminhtml';

        $crud_id = (int)$this->getRequest()->getParam($this->_objectId);
        $crud = Mage::getModel('demo_crud/crud')->load($crud_id);
        Mage::register('current_crud', $crud);
    }

    public function getHeaderText() {
        $crud = Mage::registry('current_crud');
        if ($crud->getId()) {
            return Mage::helper('demo_crud')->__("Edit crud '%s'", $this->escapeHtml($crud->getName()));
        } else {
            return Mage::helper('demo_crud')->__("Add new crud");
        }
    }
}