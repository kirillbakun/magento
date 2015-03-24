<?php
class Demo_Blog_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
        $this->loadLayout();
        $this->getLayout()->getBlock("head")->setTitle($this->__("Blog"));

        /*$breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
        $breadcrumbs->addCrumb("home", array(
            "label" => $this->__("Home Page"),
            "title" => $this->__("Home Page"),
            "link"  => Mage::getBaseUrl()
        ));
        $breadcrumbs->addCrumb("blog", array(
            "label" => $this->__("Blog"),
            "title" => $this->__("Blog")
        ));*/

        $this->renderLayout();
    }
}