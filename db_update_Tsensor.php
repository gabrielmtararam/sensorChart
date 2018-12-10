
<?php
include 'db_connect.php';




if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != ".."&& strtolower(substr($entry, strrpos($entry, '.') + 1)) == 'txt') {

            $arr = explode("_", $entry, 2);
            $id = $arr[0];
            $id=(int)$id;
            echo " id $id \n";


            $fh = fopen(dirname(__FILE__)."/".$entry,'r');
            $txt = " ";
            $lastDate=Null;
            $hint2="";
            $contador=0;
            $maxSamples=1000000;
            $minTemp=100;
            while (($line = fgets($fh))&&($contador<=$maxSamples)) {
                $dateTemp = explode(";", $line);
                $date=strtotime($dateTemp[0]);
                $temperature=$dateTemp[1];
                
                if ($temperature<$minTemp)
                    $minTemp=$temperature;
                $DateMs=$date*1000;
                $txt.= $DateMs;
                $txt .= "  \n ";
                $aux='['.$DateMs.','.$temperature.']';
                //$hint2 .=$aux.",";
                $contador++;
                $lastDate=$DateMs;
                
                $mysqltime = date ("Y-m-d H:i:s", $date);

                $query = "SELECT * FROM `Tsensor` WHERE `ts_data` ='$mysqltime' AND ts_device=$id LIMIT 1";
                if ($result=mysqli_query($conn,$query))
                {
                if(mysqli_num_rows($result) > 0)
                {
                    echo "ja esta registrado:  " .$query." <br>";

                }
                else{
                    $sql = "INSERT INTO Tsensor ( ts_data, ts_temperature,ts_device)
                    VALUES ('$mysqltime', $temperature,$id)";
                    
                    if ($conn->query($sql) === TRUE) {
                        echo "";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
                }
            else{
                echo "Query  Failed: " . $query  . "<br>";
    
            }




                $hint2.=" <br>".$mysqltime.", ".$temperature;
            }
            $minTemp=$minTemp-5;
            fclose($fh);
        }
    }

    closedir($handle);
}


        
		


echo $hint2;


$conn->close();


?>