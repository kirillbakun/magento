<?php
class Demo_Crud_Model_Mysql4_Crud extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct() {
        $this->_init('crud/crud', 'id');
    }
}