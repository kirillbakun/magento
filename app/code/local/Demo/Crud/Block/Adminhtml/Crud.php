<?php
class Demo_Crud_Block_Adminhtml_Crud extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected function _construct() {
        $this->_addButtonLabel = Mage::helper('demo_crud')->__('Add new crud');

        $this->_blockGroup = 'demo_crud';
        $this->_controller = 'adminhtml_crud';
        $this->_headerText = Mage::helper('demo_crud')->__('Crud');
    }
}