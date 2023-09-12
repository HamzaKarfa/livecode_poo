<?php



// Inclusion de la classe correspondante au paramètre passé.
function loadClass($classe)
{
  require_once __DIR__. '/../class/'.
		$classe . '.php'; 
}

spl_autoload_register('loadClass');