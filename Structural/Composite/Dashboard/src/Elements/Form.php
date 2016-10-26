<?php

namespace MG\Elements;

use MG\Elements\Composite;

class Form extends Composite
{
	protected $properties;

	public function __construct($properties = [])
	{
		$this->properties = $properties;
	}

	public function render()
	{
		$form = "<form>";
		foreach($this->elements as $element) {
			$form .= $element->render();
		}
		$form .= "</form>";

		return $form;
	}
}