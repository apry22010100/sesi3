<?php
    $mhs = array(
        array("Ardika","2233445512","Denpasar"),
        array("wahyu","1212345621","magelang"),
        array("trisnantara","2201010014","manggis"),
        array("trisna","2201010016","kesiman"),
    );
    header("content-type:; applicatiion/json");
    echo json_encode($mhs);