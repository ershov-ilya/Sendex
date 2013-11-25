<?php
/**
 * Update an Item
 */
class sxNewsletterUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'SendexItem';
	public $classKey = 'SendexItem';
	public $languageTopics = array('sendex');
	public $permission = 'update_document';
}

return 'SendexItemUpdateProcessor';