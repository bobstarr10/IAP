<?php
// Class Auto Load

function ClassAutoload($ClassName){
   $directories = ["layouts"];

   foreach($directories AS $dir){
        $FileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir .  DIRECTORY_SEPARATOR . $ClassName . '.php';
        
        if(file_exists($FileName) AND is_readable($FileName)){
         require $FileName;
        }else{
         print "File not found: $FileName";
        }
   }
}
spl_autoload_register('ClassAutoload');

// Creating instances of all classes
    $ObjLayouts = new layouts();
    $ObjMenus = new menus();
