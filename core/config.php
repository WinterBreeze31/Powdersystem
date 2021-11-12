<?php
    //Settings
    $websiteNaam = "Document";

    //Functions
    function getPageName() {
       $newArr = explode("/", $_SERVER['REQUEST_URI']);
       return $newArr[3];
    }


?>