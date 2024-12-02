<?php

require_once('Database.php');

class UserModel {
    public function getUser($data) {
        if (isset($data['Email']) && isset($data['Mat_khau'])) {
            $email = $data['Email'];
            $matKhau = $data['Mat_khau'];

            $sql = "SELECT * FROM nguoidung WHERE Email = ? AND Mat_khau = ?";
            return Database::getInstance()->getOne($sql, [$email, $matKhau]);
        } else {
            return null; 
        }
    }

    public function addUser($data) {
        // Check if the email already exists
        if ($this->emailExists($data['Email'])) {
            return false;
        }

        $sql = "INSERT INTO nguoidung (Ten_nguoidung, So_dien_thoai, Email, Mat_khau, Dia_chi) VALUES (?, ?, ?, ?, ?)";
        $params = array_values($data);
        return Database::getInstance()->execute($sql, $params);
    }

    // Method to check if the email already exists
    private function emailExists($email) {
        $sql = "SELECT COUNT(*) as count FROM nguoidung WHERE Email = ?";
        $result = Database::getInstance()->getOne($sql, [$email]);

        // Ensure we access the count correctly
        return $result['count'] > 0; // Return true if the email exists
    }
}

?>