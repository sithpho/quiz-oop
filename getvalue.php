<form action="form.php"></form>
<?php

include_once("src/GetValueClass.php");

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $province = $_POST['province'];
    $email = $_POST['email'];

    $person = new Person($name,$gender, $province,$email);
    
    // $personName = $person->getName();
    // echo $personName;
    // $personGender = $person->getGender();
    // $personProvince = $person->getProvince();
    // $personEmail = $person->getEmail();
    ?>
     
