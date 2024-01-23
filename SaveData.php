<?php
$action = $_POST["action"];
$data = "{$action}";
$myFile = "TestingData.txt";


    if($action == "") 
    {
        echo ("NO DATA RECIEVED");
        return;
    }
    else
        file_put_contents_PHP4($myFile, $data);


    function file_put_contents_PHP4($myFile, $data) {
        $f = @fopen($myFile, 'w');
        if (!$f) {
            echo ("failed to write file");
            return false;
        } else {
            $resultat= fwrite($f, $data);
            fclose($f);
            echo ("success");
            return $resultat;
        }
    }
?>
