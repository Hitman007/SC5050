<?php

namespace SC5050;

class PluginActivator{
    
    public function __construct(){
        register_activation_hook($this, 'activatePlugin');
    }

    public function activatePlugin(){
        update_option('blogname', 'CCCCC');
    }
    
}
