<?php
return function($loader)
{
	$loader->add("Project.App",  __DIR__ . "/Project/App/php");
	$loader->add("Runtime",  __DIR__ . "/Runtime/php");
	$loader->add("Runtime.Web",  __DIR__ . "/Runtime.Web/php");
	$loader->add("Runtime.Widget",  __DIR__ . "/Runtime.Widget/php");
};