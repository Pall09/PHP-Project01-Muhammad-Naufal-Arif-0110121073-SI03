<?php
    require_once "class_pasien.php";
    require_once "class_BMI.php";

    class BMIPasien extends BMI {
        public $id;
        public $BMI;
        public $tanggal;
        public $pasien;

        public function __construct($berat, $tinggi, $pasien) {
            parent::__construct($berat, $tinggi);
            $this->pasien = $pasien;
        }
    }   
?>