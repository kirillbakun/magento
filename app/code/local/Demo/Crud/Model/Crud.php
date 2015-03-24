<?php
class Demo_Crud_Model_Crud extends Mage_Core_Model_Abstract
{
    protected function _construct() {
        parent::_construct();
        $this->_init('crud/crud');
    }
}