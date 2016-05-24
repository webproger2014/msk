<?php

  /**
  * 
  * @param type $smarty
  * @param string $controllerName Имя контроллера
  * @param string $actionName Имя функции которую будем вызывать
  */
  function loadPage($smarty, $controllerName = 'Index', $function = 'IndexAction'){
        //Инициализируем контролер
        $controller = PathPrefix.$controllerName.PathPostFix;
      
        if (!file_exists($controller)) {
            $controller = PathPrefix.'Index'.PathPostFix;
        }
        //Подключаем контроллер
        include $controller;
        
        //Проверка функции
        if (!function_exists($function)) {
            $function = 'indexAction';
        }
        
        //Проверка нуждается ли контроллер в авторизации пользователя
        if (function_exists('ckeckInputWhetherUserInAccount')){
            ckeckInputWhetherUserInAccount($smarty, $function);
        } else {
            $function($smarty);
        }

    }
    
  function loadTemplate($smarty, $templateName) {
        $smarty -> display($templateName.TemplatePostFix);
    }
    
  function createSmartyRsArray($rs) {
      if (!$rs) return false;
      
      $smartyRs = [];
      while ($row = mysqli_fetch_assoc($rs)) {
          $smartyRs = $row;
      }
      
      return $smartyRs;
  }
 
  function createSmartyRsString($rs) {
      if (!$rs) return false;
      
      $smartyRs = [];
      while ($row = mysqli_fetch_assoc($rs)) {
          $smartyRs = $row;
      }   
      return convertArrayInString($smartyRs);
  }
  
  function createSmartyRsAllArr($rs) {
     if (!$rs) return false; 
     
     $smartyRs = [];
     while ($row = mysqli_fetch_assoc($rs)) {
         $smartyRs[] = $row;
     }
     
     return $smartyRs;
  }
  
     function convertArrayInString($arr) {
	$str = '';
	foreach ($arr as $val) {
		if (is_array($val)) {
                    $str .= onvertArrayInString($val);
		} else {
                    $str .= $val;
		}
		
	}
	return $str;
    }
    
    function delEmptyElemOfArr($arr) {
        foreach ($arr as $key => $val) {
            if ($val === '') {
                unset($arr[$key]);
            }
        }
       
       $index = 0;
       foreach ($arr as $val) {
           $arrRs[$index] = $val;
           $index++;
       }
       return $arrRs;
    }
  /**
   * 
   * @param string $steam приходит steam_id
   */

  function filterEmail($email) {
    if (preg_match('/^[A-Z|a-z0-9]{2,20}@[a-z\d]{2,10}\.[a-z\d]{2,10}$/', $email)) {
	return true;
    } else {
	return false;               
    }
  }
   
  function generateHash($hash = 20) {
	$str = '1234567890qwertyuiopasdfghjklzxcvbnm';
	$result = '';
	for ($s = 0; $s < $hash; $s++) {
            $result .= $str[mt_rand(1, $hash)];		  
	}
		
	return $result;
    }