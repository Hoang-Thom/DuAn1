<?php

    class CTDHController {
        // thuộc tính
        private $CTDHModel;
        // khởi tạo
        public function __construct() {
            require_once('../model/CTDHModel.php');
            $this->CTDHModel = new CTDHModel();
        }

        // tạo trang danh muc
        public function renderCTDH() {
            $CTDHs=$this->CTDHModel ->getAllCTDH();
            require_once('view/CTDH.php');
        }

        
    }

?>