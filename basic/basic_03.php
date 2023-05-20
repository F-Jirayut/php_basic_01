<?php
    // Data types
    // String ตัวอักษร
    // Integer ตัวเลข
    // Float (floating point numbers - also called double)
    // Boolean true , false
    // Array 
    // Object oop 
    // null
    // * collection for laravel


    // String ตัวอักษร
    $text = "Hello world!";

    // Integer ตัวเลข
    $x = 5;

    // Float
    $y = 10.5;

    // Boolean
    $is_admin = true;
    $is_user = false;

    // Array 
    $arr = [1, 2, 3, "1", "2", true];

    // Object oop 
    class user{
        public $data = [1,2,3];

        public function getId(){
            return 1;
        }
    }
    $oj = new user();

    // null
    $data = null;

    echo "<a href=\"https://www.w3schools.com/php/php_datatypes.asp\" target=\"_blank\">ดูเพิ่มเติม</a>";

?>