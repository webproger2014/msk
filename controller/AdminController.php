<?php
    require 'models/AdminModel.php';
    function indexAction($smarty) {
        $user = getUserSub();
        foreach ($user as $key => $value) {
             $user[$key]['concert_name'] = getConcertById($user[$key]['concert']); 
        }
        
        $smarty -> assign('user', $user);
        $smarty -> assign('concert', getListConcert());
        loadTemplate($smarty, 'index/header');
        loadTemplate($smarty, 'index/index');
        loadTemplate($smarty, 'index/footer');
    }

    function delConcertAction() {
        $data = checkDataDelConcert([]);
        
        if (!isset($data['messages'])) {
            delConcertById($data['id']);
            delRecordUserByIdConcert($data['id']);
        }
        echo json_encode($data);
    }
    
    function checkDataDelConcert($data) {
        $data['id'] = isset($_GET['id']) ? $_GET['id'] : null;
        
        if (!$data['id']) {
            $data['messages'] = 'Не передан параметр id';
            $data['success']  = 0;
        } else {
            $data['success']  = 1;
        }
        
        return $data;  
    }
   
    function delUserRecordAction() {
        $data = checkDataDelConcert([]);
        
        if (!isset($data['messages'])) {
            delUserRecordById($data['id']);
        }
        
        echo json_encode($data);
    }
    
    function createConcertAction() {
        $data = checkDataConcert([]);
        
        if (!isset($data['messages'])) {
            createNewConcert($data['val']);
        }
        
        echo json_encode($data);
    }
    
    function checkDataConcert($data) {
        $data['val'] = isset($_GET['val']) ? $_GET['val'] : null;
        
        if (!$data['val']) {
            $data['messages'] = 'Поле не может бюыть пустым';
            $data['success']  = 0;
        } else {
            $data['success']  = 1;
        }
        
        return $data;          
    }