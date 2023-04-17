<?php
abstract class Core {
    protected $connect;//Соединение с БД
    public function __construct()
    {
        $this->connect = new mysqli(HOST,USER,PASSWORD,DB);
        if ( $this->connect -> connect_error){
            exit("Ошибка подключения к БД:" . $this->connect -> connect_error);
        }
    
        //установить кадировку
    
        $this->connect -> set_charset("utft8");
    }

    public function __destruct()
    {
        $this->connect -> close();
    }

    public function get_body(){
        include "template/index.php";
    }









}