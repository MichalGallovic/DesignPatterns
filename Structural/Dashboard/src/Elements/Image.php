<?php

namespace MG\Elements;

use MG\Contracts\RenderableContract;

/**
* Image
*/
class Image implements RenderableContract
{
	protected $source;
	protected $alternative;

	public function __construct($source, $alternative = null)
	{
		$this->source = $source;
		$this->alternative = $alternative;
	}

	public function render()
	{
		return sprintf(
			"<img src=\"%s\" alt=\"%s\"",
			$this->source, $this->alternative
		);
	}
}