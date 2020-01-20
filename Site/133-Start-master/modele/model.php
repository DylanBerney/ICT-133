<?php
/**
 * ${PROJET_NAME} - model.php
 *
 * Auhor: Dylan.BERNEY
 * Vers:1.0
 * Date: 06.01.2020 15:46
 */


function checkLogin($element, $elementt){
    if ($element == "Dylan.BERNEY@cpnv.ch" && $elementt == "1234") {
        return true;
    } else {
        return false;
    }
function registerInfo($registerElement, $registerElementt)
    {
        $data = $registerElement;
        $data = $data + $registerElementt;

        file_put_contents('data/Json_Info.json', json_encode($data));
    }
}