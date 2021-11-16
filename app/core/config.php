<?php
    //Settings
    const WEBSITENAME = "Document";

    //Functions
    function getPageName() {
    
    $newArr = explode("/", $_SERVER['REQUEST_URI']);
    $newArr[(count($newArr) - 1)] = str_replace(".php", "", $newArr[(count($newArr) - 1)]);

    if ($newArr[(count($newArr) - 1)] != null){
        if ($newArr[(count($newArr) - 1)] != "index"){
            return $newArr[(count($newArr) - 1)];
        } else {
            return "yes";
        }
    } else {
        return WEBSITENAME;
    }
}


?>