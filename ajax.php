<?php
    if(isset($_GET['name'])) {
        $name = $_GET['name'];
        // echo "My name is :" . $name;

        if($name == "Gouranga Roy") {
            echo "Okay";
        } else {
            echo "Problem";
        }
    }
?>