<?php
class Demo_Blog_Model_Mysql4_Blog extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct() {
        $this->_init('blog/blog', 'blog_id');
    }
}