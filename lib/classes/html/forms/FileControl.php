<?php
 
/** 
 *	(c) 2017 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **/
class FileControl extends InputControl {
	public $type='file';
	protected $value='';
	protected $match;
	protected $compulsory;
	
	public function render() {
		$additional='value="'.$this->value.'" ';
		return parent::render($additional);
	}

	public function setCompulsory() {
		$this->compulsory=true;
		$this->addClassName('compulsory');
	}
	
}
?>
