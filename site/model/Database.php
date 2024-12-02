<?php

class Database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "cake";
    private $conn;

    //Kiểm tra database đã tạo chưa, để tạo mới Database
    public static $instance;
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Database();
        }
        return self::$instance;
    }
    
    public function __construct(){
        try{
            // Tạo kết nối đến database theo phương thức PDO
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connect thành công";
        }catch(PDOException $e){
            echo "Connection failed: ".$e->getMessage();
        }
    }
    // Dùng cho câu lệnh SQL dạng INSERT, UPDATE hoặc DELETE
    public function execute($sql,$param = []){
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($param);
    }
    //Dùng cho câu lệnh SELECT
    public function getAll($sql){
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        //Lấy tất cả dữ liệu
        return $stmt->fetchAll();
    }
    public function getOne($sql, $params = []) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params); // Execute with parameters
        return $stmt->fetch(PDO::FETCH_ASSOC); // Fetch as associative array
    }
    // đếm số lượng dữ liệu
    // public function getPro_Quantity($sql){
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute();
    //     //Lấy tất cả dữ liệu
    //     return count($stmt->fetchAll());
    // }
} 

?>