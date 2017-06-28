<?php
/**
 *
 * $HeadURL: https://www.onthegosystems.com/misc_svn/common/tags/Views-1.6.4-CRED-1.3.2-Types-1.6.4-Acces-1.2.3/toolset-forms/classes/class.textfield.php $
 * $LastChangedDate: 2014-07-09 08:26:51 +0000 (Wed, 09 Jul 2014) $
 * $LastChangedRevision: 24777 $
 * $LastChangedBy: juan $
 *
 */
require_once "class.field_factory.php";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class
 *
 * @author Franko
 */
class WPToolset_Field_Textfield extends FieldFactory
{
    public function metaform()
    {
        $attributes =  $this->getAttr();

        $metaform = array();
        $metaform[] = array(
            '#type' => 'textfield',
            '#title' => $this->getTitle(),
            '#description' => $this->getDescription(),
            '#name' => $this->getName(),
            '#value' => $this->getValue(),
            '#validate' => $this->getValidationData(),
            '#repetitive' => $this->isRepetitive(),
            '#attributes' => $attributes,
        );
        return $metaform;
    }

}
