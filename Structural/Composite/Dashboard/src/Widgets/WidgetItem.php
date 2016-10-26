<?php

namespace MG\Widgets;

use MG\Elements\Composite;
use MG\Contracts\RenderableContract;

/**
* Widget Item
*/
class WidgetItem extends Composite
{
	public function __construct(RenderableContract $item)
	{
		$this->elements []= $item;
	}

	public function render()
	{
		$item = "<div class='widget-item'>";
		foreach($this->elements as $element) {
			$item .= $element->render();
		}
		$item .= "</div>";
		return $item;
	}
}