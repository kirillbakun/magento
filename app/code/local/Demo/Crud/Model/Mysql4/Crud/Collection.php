<?php
class Demo_Crud_Model_Mysql4_Crud_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    protected function _construct() {
        $this->_init('crud/crud');
    }
}