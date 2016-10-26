<?php

namespace MG;

use MG\Contracts\ParsingContract;

/**
* Text
*/
class Text
{
	protected $text;
	protected $parser;

	public function __construct($text)
	{
		$this->text = $text;
	}

	public function parse()
	{
		return $this->parser->setText($this->text)->parse();
	}

	public function setParser(ParsingContract $parser)
	{
		$this->parser = $parser;
	}
}