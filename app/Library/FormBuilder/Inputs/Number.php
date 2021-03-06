<?php

namespace App\Library\FormBuilder\Inputs;
use App\Library\FormBuilder\FormInput;

/**
 * Champ de type number
 */
class Number extends FormInput {

	public function __construct($field_name, $field_label, $field_label_value, $field_attributs) {
		parent::__construct($field_name, $field_label, $field_label_value, $field_attributs);
		$this->attributs['type'] = 'number';
	}

}