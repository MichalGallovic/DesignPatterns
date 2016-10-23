<?php

namespace MG\Elements;

use MG\Contracts\CompositeContract;
use MG\Contracts\RenderableContract;

/**
* Composite
*/
abstract class Composite implements CompositeContract, RenderableContract
{
	protected $elements = [];

	public function addElement(RenderableContract $element)
	{
		$this->elements []= $element;
	}
}