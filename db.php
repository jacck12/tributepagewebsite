<?php


        $server = "sql110.epizy.com";
        $username = "epiz_26857577";
        $password = "jenish12";
        $dbname = "epiz_26857577_bhagatsingh";


        $conn = mysqli_connect($server, $username, $password, $dbname);

        if(!$conn){
            die("Connection Failed:".mysqli_connect_error());

        }

        ?>