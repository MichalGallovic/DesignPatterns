<?php

use MG\Elements\Form;
use MG\Elements\Span;
use MG\Elements\Image;
use MG\Widgets\Widget;

require __DIR__ . "/vendor/autoload.php";
$widget = new Widget();
$form = new Form();
$span = new Span("Leeel");
$form->addElement($span);
$image = new Image("http://24.media.tumblr.com/57e66be36c37ab1682dd30a1f025ff3a/tumblr_mpdtb1YhUz1qb5gkjo8_500.jpg");
$widget->addElement($form);
$widget->addElement($image);
echo $widget->render();