<?php

namespace MG\Formats;

use MG\Contracts\ParsingContract;

/**
* Markdown parser
*/
class Markdown implements ParsingContract
{
	protected $text;
	protected $blocks = [
		"Heading"
	];
	public function parse()
	{
		$lines = $this->toLines();
		$lines = array_map(function($line) {
			return $this->parseLine($line);
		}, $lines);
		return implode("",$lines);
	}

	protected function parseLine($line)
	{
		foreach($this->blocks as $block) {
			$identifyMethod = "identify" . $block;
			if($this->$identifyMethod($line)) {
				$parseMethod = "parse" . $block;
				return $this->$parseMethod($line);
			}
		}

		return $line;
	}

	protected function parseHeading($line)
	{
		$level = 0;
		$content = "";
		while($line[$level] == "#") {
			$level++;
		}
		return "<h$level>" . trim(substr($line, $level)) . "</h$level>";	
	}

	protected function identifyHeading($line)
	{
		return preg_match("/^#/", $line);
	}

	protected function toLines()
	{
		return explode("\n", $this->text);
	}

    /**
     * Sets the value of text.
     *
     * @param mixed $text the text
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }
}