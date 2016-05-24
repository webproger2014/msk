<?php
 session_start();  

 require 'config/config.php'; 
 require 'config/connectDB.php';
 require 'library/mainFunctions.php';
 
// Определяем контроллер
 $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

 //Определяем вызов функции
 $actionName = isset($_GET['action']) ? ucfirst($_GET['action']).'Action': 'Index';
 
 loadPage($smarty, $controllerName, $actionName);