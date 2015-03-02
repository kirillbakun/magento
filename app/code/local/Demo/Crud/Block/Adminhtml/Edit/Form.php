<?php
class Demo_Crud_Block_Adminhtml_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $crud = Mage::registry('current_crud');
        $form = new Varien_Data_Form();
        $fieldset = $form->addFieldset('edit_crud', array(
            'legend' => Mage::helper('demo_crud')->__('Crud Details')
        ));

        if ($crud->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name'      => 'id',
                'required'  => true
            ));
        }

        $fieldset->addField('name', 'text', array(
            'name'      => 'name',
            'label'     => Mage::helper('demo_crud')->__('Title'),
            'maxlength' => '250',
            'required'  => true,
        ));

        $fieldset->addField('dscr', 'textarea', array(
            'name'      => 'dscr',
            'label'     => Mage::helper('demo_crud')->__('Contents'),
            'style'     => 'width: 98%; height: 200px;',
            'required'  => true,
        ));

        $form->setMethod('post');
        $form->setUseContainer(true);
        $form->setId('edit_form');
        $form->setAction($this->getUrl('*/*/save'));
        $form->setValues($crud->getData());

        $this->setForm($form);
    }
}