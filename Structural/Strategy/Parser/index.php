<?php

use MG\Text;
use MG\Formats\Markdown;

require __DIR__ . "/vendor/autoload.php";

$input = [
	"# Nieco som chcel",
	"Tak celkom jasne",
	"## Povedat",
	"### Aj nejasne #cico"
];

$text = new Text(implode("\n",$input));
$parser = new Markdown();
$text->setParser($parser);

echo $text->parse();