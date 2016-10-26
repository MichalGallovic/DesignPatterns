<?php

namespace MG\Contracts;

interface CompositeContract
{
	public function addElement(RenderableContract $element);
}