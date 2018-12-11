
<?php
// Array with names


// get the q parameter from URL
$teste=$_POST['json_name'];

include 'db_connect.php';

  $json_str = file_get_contents('php://input');

# Get as an object
  $json_obj = json_decode($json_str,true);
 

  $minTemp=100;
  $query = "SELECT * FROM `Tsensor`
   WHERE HOUR(ts_data)>=". $json_obj["lower_hour"]." ".
   " AND". " HOUR(ts_data)<=". $json_obj["upper_hour"]."".

   " AND". " DAY(ts_data)>=". $json_obj["lower_day"]."".
   " AND". " DAY(ts_data)<=". $json_obj["upper_day"]."".

   " AND". " MONTH(ts_data)>=". $json_obj["lower_month"]."".
   " AND". " MONTH(ts_data)<=". $json_obj["upper_month"]."".

   
   " AND". " YEAR(ts_data)>=". $json_obj["lower_year"]."".
   " AND". " YEAR(ts_data)<=". $json_obj["upper_year"]."".

   " AND". " ts_temperature>=". $json_obj["lower_temperature"]."".
   " AND". " ts_temperature<=". $json_obj["upper_temperature"]."".
   "  ORDER BY ts_temperature ASC LIMIT 1"
   
   
   ;
  if ($result=mysqli_query($conn,$query))
  {
   if(mysqli_num_rows($result) > 0)
    {
      while($row = $result->fetch_assoc()) { 
             $minTemp=$row["ts_temperature"];
         }
    }

  }
else{
  echo "Query  Failed: " . $query  . "<br>";

}
    
  




 $hint .="





 
  <script src=\"https://cdn.zingchart.com/zingchart.min.js\"></script>
  
  <style> 
    html, 
    body { 
      height: 100%;
      width: 100%;
      margin-left: 10;
      padding: 0;
    }
    
    #myChart {
      height: 100%;
      width: 100%;
      min-height: 150px;
    }
    
    .zc-ref {
      display: none;
    }
  </style>
 
  <div id=\"myChart\"></div>
<script>
  function gerarGrafico(){
	  
	  zingchart.MODULESDIR = \"https://cdn.zingchart.com/modules/\"; 
    ZC.LICENSE = [\"569d52cefae586f634c54f86dc99e6a9\", \"ee6b7db5b51705a13dc2339db3edaf6d\"]; 
	
	
	 var myConfig = {
      type: \"line\",  
      
	  scaleX: {
		lineColor: '#E3E3E5',
        zooming: true,
        zoomTo: [0, 15],
        
       
        item: {
          fontColor: '#E3E3E5'
        },
        transform: {
          type: 'date',
          all: ' %M %d<br>%h:%i:%s'
        }
      }
	  ,      type: 'line',
      backgroundColor: '#2C2C39',
      title: {
        text: 'Time Series Data with null values',
        adjustLayout: true,
        fontColor: \"#E3E3E5\",
        marginTop: 7
      },
      legend: {
        align: 'center',
        verticalAlign: 'top',
        backgroundColor: 'none',
        borderWidth: 0,
        item: {
          fontColor: '#E3E3E5',
          cursor: 'hand'
        },
        marker: {
          type: 'circle',
          borderWidth: 0,
          cursor: 'hand'
        }
      },
      plotarea: {
        margin: 'dynamic 70'
      },
      plot: {
        aspect: 'segmented',
        lineWidth: 2,
        marker: {
          borderWidth: 0,
          size: 3
        }
      },
	  
	    scaleY: {
    minValue: ".$minTemp.",
        minorTicks: 1,
        lineColor: '#E3E3E5',
        tick: {
          lineColor: '#E3E3E5'
        },
        minorTick: {
          lineColor: '#E3E3E5'
        },
        minorGuide: {
          visible: true,
          lineWidth: 1,
          lineColor: '#E3E3E5',
          alpha: 0.7,
          lineStyle: 'dashed'
        },
        guide: {
          lineStyle: 'dashed'
        },
        item: {
          fontColor: '#E3E3E5'
        }
      },
	  
	  
	  
	  
      tooltip: {
        borderWidth: 0,
        borderRadius: 3
      },
      preview: {
        adjustLayout: true,
        borderColor: '#E3E3E5',
        mask: {
          backgroundColor: '#E3E3E5'
        }
      },
      crosshairX: {
        plotLabel: {
          multiple: true,
          borderRadius: 3
        },
        scaleLabel: {
          backgroundColor: '#53535e',
          borderRadius: 3
        },
        marker: {
          size: 5,
          alpha: 0.5
        }
      },
      crosshairY: {
        lineColor: '#E3E3E5',
        type: 'multiple',
        scaleLabel: {
          decimals: 2,
          borderRadius: 3,
          offsetX: -5,
          fontColor: \"#2C2C39\",
          bold: true
        }
      },
      shapes: [{
        type: 'rectangle',
        id: 'view_all',
        height: '20px',
        width: '75px',
        borderColor: '#E3E3E5',
        borderWidth: 1,
        borderRadius: 3,
        x: '85%',
        y: '11%',
        backgroundColor: '#53535e',
        cursor: 'hand',
        label: {
          text: 'View All',
          fontColor: '#E3E3E5',
          fontSize: 12,
          bold: true
        }
      }]
	  
	  
	  
	  ,  
      series: [";
        $contador2=0;
        foreach ($json_obj["device_ids"] as $obj) {
                  $contador=0;
                  $maxTemp=-100;
                  $hint2= "";
                  $txt="";
                  $query = "SELECT * FROM `Tsensor`
                  WHERE HOUR(ts_data)>=". $json_obj["lower_hour"]." ".
                  " AND". " HOUR(ts_data)<=". $json_obj["upper_hour"]."".
              
                  " AND". " DAY(ts_data)>=". $json_obj["lower_day"]."".
                  " AND". " DAY(ts_data)<=". $json_obj["upper_day"]."".
              
                  " AND". " MONTH(ts_data)>=". $json_obj["lower_month"]."".
                  " AND". " MONTH(ts_data)<=". $json_obj["upper_month"]."".
              
                  
                  " AND". " YEAR(ts_data)>=". $json_obj["lower_year"]."".
                  " AND". " YEAR(ts_data)<=". $json_obj["upper_year"]."".
              
                  " AND". " ts_temperature>=". $json_obj["lower_temperature"]."".
                  " AND". " ts_temperature<=". $json_obj["upper_temperature"]."".
                  " AND". " ts_device=". $obj." "
                  
                  
                  ;
                  if ($result=mysqli_query($conn,$query))
                  {
                  if(mysqli_num_rows($result) > 0)
                    {
                      while($row = $result->fetch_assoc()) {
                        $dateFormated=strtotime( $row["ts_data"]);
                        $dateFormated=$dateFormated*1000;
                        $aux='['.$dateFormated.','.$row["ts_temperature"].']';
                        
                        $temperature=(float)$row["ts_temperature"];
                        if ($temperature>$maxTemp)
                          $maxTemp=$temperature;
              
                        $hint2 .=$aux.",";
                        $hint2 .=$aux.",";
                        $txt.= "idrs: " . $row["ts_ID"]. " - data: " . $dateFormated. " temp" . $row["ts_temperature"]. " device" . $row["ts_device"]. "<br>";
                      }
                      $hint2=substr($hint2, 0, -1);
              
                    }
              
                  }
                else{
                  echo "Query  Failed: " . $query  . "<br>";
              
                }
                  $hint .="
                  {values: [";

              $hint .=$hint2;
             
              $hint .="]".
              
              "
              
              ,
                  lineColor: '". $json_obj["device_colours"][$contador2]."',
                  marker: {
                    backgroundColor: '". $json_obj["device_colours"][$contador2]."'
                  }
                },";

      $contador2++;
    }
      $hint .="
  ]};

    zingchart.bind('myChart', 'shape_click', function(p) {
      if (p.shapeid == \"view_all\") {
        zingchart.exec(p.id, 'viewall');
      }
    })

    zingchart.render({
      id: 'myChart',
      data: myConfig,
    });
  }
	
    
  </script> 
 

  ";
echo $hint;
echo "qqqq ";
$contador=0;

foreach ($json_obj["device_ids"] as $obj) {
  echo $json_obj["device_colours"][$contador]." "  ;
  $contador++;
}
echo " vvv";
echo " bbbbbrrr <div> ".$txt." <\div>";
?> 