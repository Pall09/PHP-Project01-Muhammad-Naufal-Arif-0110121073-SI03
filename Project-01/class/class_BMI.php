<?php
    class BMI {
        public $berat;
        public $tinggi;

        public function __construct($berat, $tinggi) {
            $this->berat = $berat;
            $this->tinggi = $tinggi;
        }

        public function nilaiBMI($berat, $tinggi) {
            return number_format($berat / (($tinggi / 100) ** 2), 1, '.', '');
        }

        public function statusBMI($BMI) {
            if ($BMI < 18.5) {
                return "Kekurangan Berat Badan";
            } else if ($BMI < 25) {
                return "Normal (Ideal)";
            } else if ($BMI < 30) {
                return "Kelebihan Berat Badan";
            } else {
                return "Kegemukan (Obesitas)";
            }
        }
    }
?>