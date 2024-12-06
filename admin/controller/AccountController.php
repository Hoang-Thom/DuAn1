<?php

    class AccountController {
        // thuộc tính
        private $AccountModel;
        // khởi tạo
        public function __construct() {
            require_once('../model/AccountModel.php');
            $this->AccountModel = new AccountModel();
        }

        // tạo trang tai khoan
        public function renderAccount() {
            $Accounts=$this->AccountModel ->getAllAccount();
            require_once('view/Account.php');
        }

        public function renderaddAcc(){
            require_once ('view/addAcc.php');
        }

        public function addAccount($data){
            $this->AccountModel->addAccount($data);
            header('location: index.php?page=Account');
            //print_r($data);
        }

    }

?>