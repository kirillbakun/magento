<?php
class Demo_Crud_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
        $this->loadLayout()->renderLayout();
    }

    public function viewAction() {
        $crud_id = (int)$this->getRequest()->getParam('id');
        if(empty($crud_id)) {
            $this->_forward('noRoute');
        }

        $this->loadLayout();
        $this->getLayout()->getBlock('crud.item')->setCrudId($crud_id);
        $this->renderLayout();
    }
}