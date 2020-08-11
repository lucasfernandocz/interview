<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "senior";

   $conn = mysqli_connect($servername, $username, $password, $db);

    if(isset($_POST["Import"])){

        $filename=$_FILES["file"]["tmp_name"];

        if($_FILES["file"]["size"] > 0)
        {
            $file = fopen($filename, "r");
            $bug = 0;
            while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
            {
                $bug++ ;
                if($getData[0] !=''){
                    $sql = "INSERT into senior (codigo,descricao,preco) 
                            values ('".$getData[0]."','".$getData[1]."','".$getData[2]."')";
                    $result = mysqli_query($conn, $sql);
                }
            }
            if($bug > 0){
                echo "<h1>Arquivo importado com sucesso!</h1>";
            }

            fclose($file);
        }
    }


?>