<?php
class Demo_Crud_Model_Resource_Crud_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct() {
        $this->_init('demo_crud/crud');
    }
}