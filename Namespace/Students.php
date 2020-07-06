<?php
namespace App\classes;


class Students
{



    public $name ='Muntarin';
    protected $email ='muntarin@gmail.com';
    private $mobile ='01848374474';
    static $city ='Dhaka';

    public function  test(){
       // echo 'In test';
        //$this->world();
        Students::world();
        //echo Students::$city;


    }
    protected function  hello(){
        echo 'In hello';
    }
    private function  world(){
        echo 'In world';
    }
}