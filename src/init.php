<?php
return function($loader)
{
	/* Add modules */
	$loader->modules[] = "Project.App";
	
	/* Enable constructor */
	if (isset($_SERVER["CONSTRUCTOR"]))
	{
		$loader->include("/srv/baylang.php");
	}
	
	/* Setup environments */
	$loader->setEnv("LOCALE", "en");
	$loader->setEnv("TZ", "Asia/Almaty");
	$loader->setEnv("TZ_OFFSET", 5);
	if (isset($_SERVER["HTTP_X_FORWARDED_PREFIX"]))
		$loader->setEnv("ROUTE_PREFIX", $_SERVER["HTTP_X_FORWARDED_PREFIX"]);

};