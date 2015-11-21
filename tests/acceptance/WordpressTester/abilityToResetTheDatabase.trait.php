<?php

namespace CustomRayGuns;

trait abilityToResetTheDatabase{
    
    public function resetTheDatabase(){
        global $CRG_DBuserName; // <-- set in the global _bootstrap.php file
        global $CRG_DBname; // <-- set in the global _bootstrap.php file
        global $CRG_DBsetupPath; // <-- set in the global _bootstrap.php file
        //This command resets the database to the dump:
        $string = "mysql -u $CRG_DBuserName $CRG_DBname < $CRG_DBsetupPath";
        shell_exec($string);
    }
    
}