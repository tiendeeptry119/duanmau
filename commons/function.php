<?php

// Kết nối CSDL qua PDO
function connectDB() {
    // Kết nối CSDL
    $host = DB_HOST;
    $port = DB_PORT;
    $dbname = DB_NAME;

    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", DB_USERNAME, DB_PASSWORD);

        // cài đặt chế độ báo lỗi là xử lý ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // cài đặt chế độ trả dữ liệu
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        return $conn;
    } catch (PDOException $e) {
        echo ("Connection failed: " . $e->getMessage());
    }
}
function upLoad($file, $folder){
    $pathStorage = $folder . rand(10000000000, 100000000000) . $file['name'];
    $from = $file['tmp_name'];
    $to = PATH_ROOT . $pathStorage;
    if(move_uploaded_file($from, $to)){
        return $pathStorage;
    }else{
        return null;
    }
}
function deleteImg($file){
    $path = PATH_ROOT . $file;
 
    if(file_exists($path)){
        unlink($path);
    }
}
function debug($name){
    echo "<pre>";
    var_dump($name);die();
}
function deleteSessionError(){
    if(isset($_SESSION['flash'])){
        
        unset($_SESSION['flash']);
        unset($_SESSION['error']);
        
    

    }
}
function formatDate($date){
    return date("d-m-Y", strtotime($date));
}
