<?php
    class Sinhvien{
        private $hoten;
        private $gioitinh;
        private $ngaysinh;
        private $quequan;
        function setHoten($value){
            $this->hoten = $value;
        }
         
        function setGioitinh($value){
            $this->gioitinh = $value;
        }
        function setNgaysinh($value){
            $this->ngaysinh = $value;
        }
         
        function setQuequan($value){
            $this->quequan = $value;
        }
         
        function getHoten(){
            return $this->hoten."<br>";
        }
         
        function getGioitinh(){
            return $this->gioitinh."<br>";
        }
        function getNgaysinh(){
            return $this->ngaysinh."<br>";
        }
         
        function getQuequan(){
            return $this->quequan."<br>";
        }
    }   
    $sv = new Sinhvien();
    $sv->setHoten('Nguyễn Xuân Khoa');
    $sv->setGioitinh('Nam');
    $sv->setNgaysinh('10/07/2001');
    $sv->setQuequan('Bắc Giang');
    echo $sv->getHoten();
    echo $sv->getGioitinh();
    echo $sv->getNgaysinh();
    echo $sv->getQuequan();
?>