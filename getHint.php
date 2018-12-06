
<?php
// Array with names


// get the q parameter from URL

$hint = "";


$fh = fopen(dirname(__FILE__).'/1_log.txt','r');
		$txt = " ";
		$lastDate=Null;
		$hint2="";
		$contador=0;
		$maxSamples=300;
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
			$hint2 .=$aux.",";
			$contador++;
			$lastDate=$DateMs;

		}
		$minTemp=$minTemp-5;
		fclose($fh);
		$hint2=substr($hint2, 0, -1);
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
        aspect: 'spline',
        lineWidth: 2,
        marker: {
          borderWidth: 0,
          size: 5
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
          size: 7,
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
      series: [{
        values: [";
		
		
		 $hint .=$hint2;
	
		 $hint .="],
        lineColor: '#E34247',
        marker: {
          backgroundColor: '#E34247'
        }
      }]
    };

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
echo " <div>".$txt."

<\div>";
?> 