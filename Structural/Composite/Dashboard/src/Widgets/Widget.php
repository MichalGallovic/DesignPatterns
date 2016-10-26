<?php

namespace MG\Widgets;

use MG\Elements\Composite;
use MG\Widgets\WidgetItem;

/**
* Widget
*/
class Widget extends Composite
{
	public function render()
	{
		$widget = "<div class='widget'>";
		foreach ($this->elements as $element) {
			$widget .= (new WidgetItem($element))->render();
		}
		$widget .= "</div>";
		return $widget;
	}
}