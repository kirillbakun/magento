<?php
class Demo_Crud_Adminhtml_CrudController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction() {
        $this->_title($this->__('Crud'));

        $this->loadLayout();
        $this->_setActiveMenu('demo_crud');
        $this->_addBreadcrumb(Mage::helper('demo_crud')->__('Crud'), Mage::helper('demo_crud')->__('Crud'));
        $this->renderLayout();
    }

    public function newAction() {
        $this->_title($this->__('Add new crud'));
        $this->loadLayout();
        $this->_setActiveMenu('demo_crud');
        $this->_addBreadcrumb(Mage::helper('demo_crud')->__('Add new crud'), Mage::helper('demo_crud')->__('Add crud'));
        $this->renderLayout();
    }

    public function editAction() {
        $this->_title($this->__('Edit crud'));

        $this->loadLayout();
        $this->_setActiveMenu('demo_crud');
        $this->_addBreadcrumb(Mage::helper('demo_crud')->__('Edit crud'), Mage::helper('demo_crud')->__('Edit crud'));
        $this->renderLayout();
    }

    public function deleteAction() {
        $tipId = $this->getRequest()->getParam('id', false);

        try {
            Mage::getModel('demo_crud/crud')->setId($tipId)->delete();
            Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('demo_crud')->__('Quote successfully deleted'));

            return $this->_redirect('*/*/');
        } catch(Mage_Core_Exception $e) {
            Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
        } catch(Exception $e) {
            Mage::logException($e);
            Mage::getSingleton('adminhtml/session')->addError($this->__('Something went wrong'));
        }

        return $this->_redirect('*/*/');
    }

    public function saveAction() {
        $data = $this->getRequest()->getPost();

        if(!empty($data)) {
            try {
                Mage::getModel('demo_crud/crud')->setData($data)->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('demo_crud')->__('Crud successfully saved'));
            } catch(Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch(Exception $e) {
                Mage::logException($e);
                Mage::getSingleton('adminhtml/session')->addError($this->__('Somethings went wrong'));
            }
        }

        $this->_redirect('*/*/');
    }

    public function gridAction() {
        $this->loadLayout();
        $this->getResponse()->setBody($this->getLayout()->createBlock('demo_crud/adminhtml_crud_grid')->toHtml());
    }
}