<?php

/**
 * 
 */
class Target {
	public $length;
	public $elements;

	function __construct($t = null) {
		if ($t == null) {
			$this->length = 0;
			$this->elements = array();
		} else {
			$this->length = $t->length;
			$this->elements = $t->elements;
		}
	}

	function addElement($val) {
		
		if ($this->length == 0) {
			$element = array($val);
			array_push($this->elements, $element);
		} else {
			for ($i = 0; $i < count($this->elements); $i ++) {
				$element = $this->elements[$i];
				array_push($element, $val);
				$this->elements[$i] = $element;
				sort($this->elements[$i]);
			}
			$this->elements = array_map("unserialize", array_unique(array_map("serialize", $this->elements)));
		}

		$this->length ++;
	}

	function merge(Target $target) {
		if ($this->length == 0) {
			$this->length = $target->length;
			$this->elements = $target->elements;
		} else {
			$this->elements = array_merge($this->elements, $target->elements);
			$this->elements = array_map("unserialize", array_unique(array_map("serialize", $this->elements)));
		}
	}

}

?>