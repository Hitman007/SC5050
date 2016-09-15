<?php

namespace SC5050;

interface MetaboxInterface{

	//This checks the current state of the system and decides if the Listener should be loaded. Returns a boolean.
	public function listenCondition();
	public function activateListener();
	public function returnMetaBoxBodyText();
	public function returnMetaBoxTitle();

}