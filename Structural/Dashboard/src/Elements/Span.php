<?php

namespace MG\Elements;

use MG\Elements\Composite;

/**
* Span element
*/
class Span extends Composite
{
	protected $text;

	public function __construct($text)
	{
		$this->text = $text;
	}

	public function render()
	{
		$span = "<span>";
		$span .= $this->text;
		foreach($this->elements as $element) {
			$span .= $element;
		}
		$span .= "</span>";

		return $span;

	}
}