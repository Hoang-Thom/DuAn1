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
        public function renderCTDH($id) {
            $CTDHs=$this->CTDHModel ->getAllCTDH($id);
            $donhang=$this->CTDHModel ->getdonhang($id);
            require_once('view/CTDH.php');
        }

        
        

        
    }

?>