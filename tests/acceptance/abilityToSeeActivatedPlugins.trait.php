<?php

namespace CustomRayGuns;

trait abilityToSeeThisPluginIsActivatedPluginName{

	public function thisPluginIsActivated($pluginName){
		$I = $this;
		$x = "sudo wp plugin status $pluginName --allow-root";
		$str = shell_exec($x);
		if (strpos($str, 'Active') !== FALSE){
		 }else{
		 	$x = "The plugin $pluginName is not activated";
    			throw new \Exception($x);
		 }
	}
}
