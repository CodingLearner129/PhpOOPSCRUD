<?php

    include "database.php";
     
    $obj = new Database();

    // $obj->insert("student", ["student_name"=>"rahul", "age"=>"23", "city"=>"paldi"]);
    // echo "Result of insert is : ";
    // print_r($obj->getResult());

    // $obj->update("student", ["student_name"=>"rahim", "age"=>"25", "city"=>"makarba"], "id='5'");
    // echo "Result of update is : ";
    // print_r($obj->getResult());

    // $obj->delete("student", "id='5'");
    // echo "Result of delete is : ";
    // print_r($obj->getResult());

    // $obj->sql("SELECT * FROM `student`");
    // echo "Result of sql is : ";
    // print_r($obj->getResult());

    // $obj->select("student", "id, student_name", null, "city='paldi'", "student_name", null);
    // echo "Result of select is : ";
    // print_r($obj->getResult());
    $obj->select("student", "id, student_name", null, null, null, 2);
    echo "Result of select is : ";
    print_r($obj->getResult());

    $obj->pagination("student", null, null, 2);

?>