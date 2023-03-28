<?php
    //model 1
    //$age = array("peter"=>"35","ben"=>"37","joe"=>"43");

    $age["WAYAN"] = "18";
    $age["TRISNAN"] = "65";
    $age["TARA"]= "30";
    $age["PUTRA"]= "25";







    header("content-type:; applicatiion/json");
    echo json_encode($age);
                
