<?php

class Person{
    public $name;
    public $gender;
    public $province;
    public $email;

    public function __construct($name, $gender, $province,$email){
        $this->name = $name;
        $this->gender = $gender;
        $this->province = $province;
        $this->email = $email;

    }
    public function getName(){
        return ($this->name);
    }
    public function getGender(){
        return ($this->gender);
    }
    public function getProvince(){
        return ($this->province);
    }
    public function getEmail(){
        return ($this->email);
    }
}