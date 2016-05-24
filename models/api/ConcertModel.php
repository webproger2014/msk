<?php

    function recordUserConcert($data) {
        $mysqli = createMysqli();
        
        $sql = "INSERT INTO `user`(email,fullname,phone,dob,concert,gender)
                VALUES('{$data['email']}', '{$data['fullName']}',
                '{$data['phone']}', '{$data['dob']}', '{$data['concert']}',
                '{$data['gender']}')";
        mysqli_query($mysqli, $sql);
        mysqli_close($mysqli);         
    }
    
  function getConcertByName($name) {
      $mysqli = createMysqli();
      $sql =  "SELECT * FROM `concert` WHERE `id`='{$name}'";
   
      $rs = mysqli_query($mysqli, $sql);
      mysqli_close($mysqli);
   
      return createSmartyRsArray($rs);        
  }

  function getUserByNameConcert($data) {
      $mysqli = createMysqli();
      $sql =  "SELECT * FROM `user` WHERE `email`='{$data['email']}' AND `concert`='{$data['concert']}'";
   
      $rs = mysqli_query($mysqli, $sql);
      mysqli_close($mysqli);
   
      return createSmartyRsArray($rs);        
  }
  
  function getConcertByLimit($limit) {
      $mysqli = createMysqli();
      $sql = "SELECT *
              FROM `concert`
              ORDER BY id DESC LIMIT {$limit}";
  

      $rs = mysqli_query($mysqli, $sql);
      
      return createSmartyRsAllArr($rs);      
  }
  
  function getListConcert() {
    $mysqli = createMysqli();
    $sql =  "SELECT * FROM `concert`";
   
    $rs = mysqli_query($mysqli, $sql);
    mysqli_close($mysqli);
   
    return createSmartyRsAllArr($rs);        
}