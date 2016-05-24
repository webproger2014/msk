<?php
    //API
    require 'models/api/ConcertModel.php';
    
    //Подписывает пользователя на событие
    function recordUserConcertAction() {
        $data = checkDataRegisterUser([]);
        
        if (!isset($data['messages'])) {
            recordUserConcert($data);
            
        }
        
        echo json_encode($data);
    }
    
    //Проверка данных
    function checkDataRegisterUser($data) {
        $infoRegister['email']    = isset($_GET['email']) ? strip_tags(trim($_GET['email'])) : null;
        $infoRegister['fullName'] = isset($_GET['fullName']) ? strip_tags(trim($_GET['fullName'])) : null;
        $infoRegister['concert']  = isset($_GET['concert']) ? strip_tags(trim($_GET['concert'])) : null;        
        $infoRegister['phone']    = isset($_GET['phone']) ? strip_tags(trim($_GET['phone'])) : '';
        $infoRegister['dob']      = isset($_GET['dob']) ? strip_tags(trim($_GET['dob'])) : '';
        $infoRegister['gender']   = isset($_GET['gender']) ? strip_tags(trim($_GET['gender'])) : '';
        
        $data = checkInputsData($data, $infoRegister);
        
        if ($data['messages'] === '') {
            $data = checkDataUserOnRecord($infoRegister);
        }
        
        if ($data['messages'] === '') {
            $data = $infoRegister;
            $data['success'] = 1;
        } else {
            $data['success'] = 0;
        }
        
        return $data;
    }
    
    //Проверка гет параметров
    function checkInputsData($data, $infoRegister) {
        $data['messages'] = '';
        if (!$infoRegister['email'] || !filterEmail($infoRegister['email'])) {
            $data['messages'] .= 'email, ';
        }
        
        if (!$infoRegister['fullName']) {
            $data['messages'] .= 'ФИО, ';
        }
        
        if (!$infoRegister['concert']) {
            $data['messages'] .= 'концерт, ';
        }
        
        return $data; 
    }
    
    //Проверка параметров в бд
    function checkDataUserOnRecord($infoRegister) {
        $data['messages'] = '';
        if (!getConcertByName($infoRegister['concert'])) {
            $data['messages'] = 'Данного события не существует';
        }
        
        if ($data['messages'] === '') {
            if (getUserByNameConcert($infoRegister)) {
                $data['messages'] = 'Пользовател уже подписан';
            }    
        }    
        return $data;
    }
    
    
    //Возвращаем событие по лимиту
    function getConcertByLimitAction() {
        $data = validationDataGetConcert([]);
        $data = getConcertByLimit($data['limit']);
        echo json_encode($data);
    }
    
    function validationDataGetConcert($data) {
        $data['limit'] = isset($_GET['limit']) ? (int)strip_tags(trim($_GET['limit'])) : null;
        
        if (!$data['limit']) {
            $data['limit'] = 10;
        }
        
       return $data;
    }
    
    
    function getListConcertAction() {
        echo json_encode(getListConcert());
    }