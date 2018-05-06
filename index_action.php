<?php


$jobType = $_POST['jobType'];
switch($jobType){
    //=========================/
    case "button_1_Clicked":
        // codes
        $argumentList='Empty!';
        if(isset($_POST['argumentList'])){
            $argumentList = $_POST['argumentList']?$_POST['argumentList']:'Empty!';
        }
        $result = [];
        // do something with argument lists arguments
        $result['argumentList']=$argumentList;

        exit(json_encode($result));


        break;
    //=========================/
    case "":
        // // codes
        break;
    //=========================/
    case "":
        // // codes
        break;
    //=========================/
    case "":
        // // codes
        break;
    //=========================/
    case "":
        // // codes
        break;
    //=========================/
    default;
}