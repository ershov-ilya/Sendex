<?php
/**
 * Remove an Item
 */
class sxNewsletterRemoveProcessor extends modObjectRemoveProcessor {
	public $checkRemovePermission = true;
	public $objectType = 'SendexItem';
	public $classKey = 'SendexItem';
	public $languageTopics = array('sendex');

}

return 'SendexItemRemoveProcessor';