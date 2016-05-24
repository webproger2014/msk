<?php

function getUserSub() {
    $mysqli = createMysqli();
    $sql =  "SELECT * FROM `user`";
   
    $rs = mysqli_query($mysqli, $sql);
    mysqli_close($mysqli);
   
    return createSmartyRsAllArr($rs);        
}

function getConcertById($id) {
    $mysqli = createMysqli();
    $sql =  "SELECT `name` FROM `concert` WHERE `id`='{$id}'";
   
    $rs = mysqli_query($mysqli, $sql);
    mysqli_close($mysqli);
   
    return createSmartyRsString($rs);      
}

function getListConcert() {
    $mysqli = createMysqli();
    $sql =  "SELECT * FROM `concert`";
   
    $rs = mysqli_query($mysqli, $sql);
    mysqli_close($mysqli);
   
    return createSmartyRsAllArr($rs);        
}

function delConcertById($id) {
    $mysqli = createMysqli();
    $sql =  "DELETE FROM `concert` WHERE `id`='{$id}'";
   
    mysqli_query($mysqli, $sql);
    mysqli_close($mysqli); 
}


function delRecordUserByIdConcert($id) {
    $mysqli = createMysqli();
    $sql =  "DELETE FROM `user` WHERE `concert`='{$id}'";
   
    mysqli_query($mysqli, $sql);
    mysqli_close($mysqli); 
}


function delUserRecordById($id) {
    $mysqli = createMysqli();
    $sql =  "DELETE FROM `user` WHERE `id`='{$id}'";
   
    mysqli_query($mysqli, $sql);
    mysqli_close($mysqli); 
}

function createNewConcert($val) {
    $mysqli = createMysqli();
        
    $sql = "INSERT INTO `concert`(name) VALUES('{$val}')";
    mysqli_query($mysqli, $sql);
    mysqli_close($mysqli);    
}