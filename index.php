<!DOCTYPE html>
<html dir="ltr" lang="pt-BR"> 
 <html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="simplebar.css" />
<script src="https://unpkg.com/simplebar@latest/dist/simplebar.js"></script>

<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    
	<link href="simple-sidebar.css" rel="stylesheet">
  
<script>
function showHint(str) {
		
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("grafico").innerHTML = this.responseText;
				//$("#grafico").load(this.responseText); 
				 $("#grafico").html(this.responseText);
				 gerarGrafico();
				//window.location.reload(true);
				
            }
        };
        xmlhttp.open("GET", "getHint.php?" + str, true);
        xmlhttp.send();
    }

</script>
</head>
<body>
	

<style>



.list-group-item{
	border-color:rgba(255, 255, 255, 0);
color:white;
background-color: rgba(255, 255, 255, 0.1);
padding-top: 2px;
padding-right: 10px;
padding-bottom: 2px;
padding-left: 10px;
}


.material-switch > input[type="checkbox"] {
    display: none;   
}

.material-switch > label {
    cursor: pointer;
    height: 0px;
    position: relative; 
    width: 30px;  
}

.material-switch > label::before {
    background: rgb(0, 0, 0);
    box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
    border-radius: 8px;
    content: '';
    height: 16px;
    margin-top: -8px;
    position:absolute;
    opacity: 0.3;
    transition: all 0.4s ease-in-out;
    width: 30px;
}
.material-switch > label::after {
    background: rgb(255, 255, 255);
    border-radius: 16px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
    content: '';
    height: 20px;
    left: -4px;
    margin-top: -8px;
    position: absolute;
    top: -4px;
    transition: all 0.3s ease-in-out;
    width: 20px;
}
.material-switch > input[type="checkbox"]:checked + label::before {
    background: inherit;
    opacity: 0.5;
}
.material-switch > input[type="checkbox"]:checked + label::after {
    background: inherit;
    left: 20px;
}




.spanWhite{

	color:white;
}
.slidecontainer {
    width: 100%; /* Width of the outside container */
}

/* The slider itself */
.slider {
    -webkit-appearance: none;  /* Override default CSS styles */
    appearance: none;
    width: 100%; /* Full-width */
    height: 25px; /* Specified height */
    background-color: rgba(255, 255, 255, 0.2); /* Grey background */
    outline: none; /* Remove outline */
    opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
    -webkit-transition: .2s; /* 0.2 seconds transition on hover */
    transition: opacity .2s;
}

/* Mouse-over effects */
.slider:hover {
    opacity: 1; /* Fully shown on mouse-over */
}

/* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
.slider::-webkit-slider-thumb {
    -webkit-appearance: none; /* Override default look */
    appearance: none;
    width: 25px; /* Set a specific slider handle width */
    height: 25px; /* Slider handle height */
    background: #dadada; /* Green background */
    cursor: pointer; /* Cursor on hover */
}

.slider::-moz-range-thumb {
    width: 15px; /* Set a specific slider handle width */
    height: 15px; /* Slider handle height */
    background: #dadada; /* Green background */
    cursor: pointer; /* Cursor on hover */
}

.dispInlineBlock{
 width:280px;
}


.label-primary {
  background-color: #e7ca25;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #3071a9;
}

.label-disp8 {
  background-color: #930000;
}
.label-disp8[href]:hover,
.label-disp8[href]:focus {
  background-color: #930000;
}


.label-disp7 {
  background-color: #400040;
}
.label-disp7[href]:hover,
.label-disp7[href]:focus {
  background-color: #400040;
}

.label-disp6 {
  background-color: #004040;
}
.label-disp6[href]:hover,
.label-disp6[href]:focus {
  background-color: #004040;


 
 .scrollbar {
    background-color: #1e9b53;
    float: left;
    height: 300px;
    margin-bottom: 25px;
    margin-left: 22px;
    margin-top: 40px;
    width: 65px;
    overflow-y: scroll;
}

#style-1::-webkit-scrollbar {
    width: 6px;
    background-color: #F5F5F5;
} 

#style-1::-webkit-scrollbar-thumb {
    background-color: #000000;
}



#style-1::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

}
</style>
<div id="wrapper">
         <div id="sidebar-wrapper"  style="overflow-x: hidden;"  data-simplebar>
            <ul class="sidebar-nav"  style=" ">
                <li class="sidebar-brand" >
                    <a href="#">
                        FILTROSsss
                </li>
                <li >
					<div class="dispInlineBlock"  style=" overflow:hidden;">
						<div class="container-fluid" style=" padding-right:1px; padding-left:15px;  overflow:hidden;" >
							<div class="row">
								<div class="col-sm-2" style=" padding-right:1px; padding-left:0px; "  > 
										<span class="spanWhite"  id="ai"  >2018</span> 													
								</div>
								<div class="col-sm-3" style="padding-left:0px; padding-right:0px;"> 
									 <span class="spanWhite" >Ano inicial</span>														
								</div>
								<div class="col-sm-6" style="padding-left:1px; padding-right:10px;">							   
										<div class="slidecontainer"  style="display: inline-block;" >
										  <input type="range" min="2017" max="2030" value="2018" class="slider" id="slai" >
										</div>
								</div>
								<div class="col-sm-1" style="padding-left:0px; padding-right:0px;">							   

								</div>
							</div>
						</div>
					</div>
					
                </li>
				<li >
					<div class="dispInlineBlock">
						<div class="container-fluid" style=" padding-right:1px; padding-left:15px;  overflow:hidden;" >
							<div class="row">
								<div class="col-sm-2" style=" padding-right:1px; padding-left:0px;"  > 
										<span  class="spanWhite" id="af"  >2018</span> 													
								</div>
								<div class="col-sm-3" style="padding-left:0px; padding-right:0px;"> 
									 <span class="spanWhite"  >Ano final</span>														
								</div>
								<div class="col-sm-6" style="padding-left:1px; padding-right:10px;">							   
										<div class="slidecontainer"  style="display: inline-block;" >
										  <input type="range" min="2017" max="2030" value="2018" class="slider" id="slaf" >
										</div>
								</div>
								<div class="col-sm-1" style="padding-left:0px; padding-right:0px;">							   

								</div>
							</div>
						</div>
					</div>
					
                </li>
				<li >
					<div class="dispInlineBlock">
						<div class="container-fluid" style=" padding-right:1px; padding-left:15px;  overflow:hidden;" >
							<div class="row">
								<div class="col-sm-2" style=" padding-right:1px; padding-left:0px;"  > 
										<span class="spanWhite"  id="mi"  >1</span> 													
								</div>
								<div class="col-sm-3" style="padding-left:0px; padding-right:0px;"> 
									 <span   class="spanWhite">mes inicial</span>														
								</div>
								<div class="col-sm-6" style="padding-left:1px; padding-right:10px;">							   
										<div class="slidecontainer"  style="display: inline-block;" >
										  <input type="range" min="1" max="12" value="1" class="slider" id="slmi" >
										</div>
								</div>
								<div class="col-sm-1" style="padding-left:0px; padding-right:0px;">							   

								</div>
							</div>
						</div>
					</div>
					
                </li>
				<li >
					<div class="dispInlineBlock">
						<div class="container-fluid" style=" padding-right:1px; padding-left:15px;  overflow:hidden;" >
							<div class="row">
								<div class="col-sm-2" style=" padding-right:1px; padding-left:0px;"  > 
										<span  class="spanWhite" id="mf"  >1</span> 													
								</div>
								<div class="col-sm-3" style="padding-left:0px; padding-right:0px;"> 
									 <span class="spanWhite"  >mes final</span>														
								</div>
								<div class="col-sm-6" style="padding-left:1px; padding-right:10px;">							   
										<div class="slidecontainer"  style="display: inline-block;" >
										  <input type="range" min="1" max="12" value="1" class="slider" id="slmf" >
										</div>
								</div>
								<div class="col-sm-1" style="padding-left:0px; padding-right:0px;">							   

								</div>
							</div>
						</div>
					</div>
					
                </li>
				<li >
					<div class="dispInlineBlock">
						<div class="container-fluid" style=" padding-right:1px; padding-left:15px;  overflow:hidden;" >
							<div class="row">
								<div class="col-sm-2" style=" padding-right:1px; padding-left:0px;"  > 
										<span  class="spanWhite" id="di"  >1</span> 													
								</div>
								<div class="col-sm-3" style="padding-left:0px; padding-right:0px;"> 
									 <span   class="spanWhite" >dia inicial</span>														
								</div>
								<div class="col-sm-6" style="padding-left:1px; padding-right:10px;">							   
										<div class="slidecontainer"  style="display: inline-block;" >
										  <input type="range" min="1" max="30" value="1" class="slider" id="sldi" >
										</div>
								</div>
								<div class="col-sm-1" style="padding-left:0px; padding-right:0px;">							   

								</div>
							</div>
						</div>
					</div>
					
                </li>
				<li >
					<div class="dispInlineBlock">
						<div class="container-fluid" style=" padding-right:1px; padding-left:15px;  overflow:hidden;" >
							<div class="row">
								<div class="col-sm-2" style=" padding-right:1px; padding-left:0px;"  > 
										<span  class="spanWhite" id="df"  >1</span> 													
								</div>
								<div class="col-sm-3" style="padding-left:0px; padding-right:0px;"> 
									 <span class="spanWhite"  >dia final</span>														
								</div>
								<div class="col-sm-6" style="padding-left:1px; padding-right:10px;">							   
										<div class="slidecontainer"  style="display: inline-block;" >
										  <input type="range" min="1" max="30" value="30" class="slider" id="sldf" >
										</div>
								</div>
								<div class="col-sm-1" style="padding-left:0px; padding-right:0px;">							   

								</div>
							</div>
						</div>
					</div>
					
                </li>
				
				<li >
					<div class="dispInlineBlock">
						<div class="container-fluid" style=" padding-right:1px; padding-left:15px;  overflow:hidden;" >
							<div class="row">
								<div class="col-sm-2" style=" padding-right:1px; padding-left:0px;"  > 
										<span class="spanWhite"  id="hi"  >0</span> 													
								</div>
								<div class="col-sm-3" style="padding-left:0px; padding-right:0px;"> 
									 <span  class="spanWhite" >hora inicial</span>														
								</div>
								<div class="col-sm-6" style="padding-left:1px; padding-right:10px;">							   
										<div class="slidecontainer"  style="display: inline-block;" >
										  <input type="range" min="0" max="24" value="0" class="slider" id="slhi" >
										</div>
								</div>
								<div class="col-sm-1" style="padding-left:0px; padding-right:0px;">							   

								</div>
							</div>
						</div>
					</div>
					
                </li>
				<li >
					<div class="dispInlineBlock">
						<div class="container-fluid" style=" padding-right:1px; padding-left:15px;  overflow:hidden;" >
							<div class="row">
								<div class="col-sm-2" style=" padding-right:1px; padding-left:0px;"  > 
										<span  class="spanWhite" id="hf"  >24</span> 													
								</div>
								<div class="col-sm-3" style="padding-left:0px; padding-right:0px;"> 
									 <span   class="spanWhite" >hora final</span>														
								</div>
								<div class="col-sm-6" style="padding-left:1px; padding-right:10px;">							   
										<div class="slidecontainer"  style="display: inline-block;" >
										  <input type="range" min="0" max="24" value="24" class="slider" id="slhf" >
										</div>
								</div>
								<div class="col-sm-1" style="padding-left:0px; padding-right:0px;">							   

								</div>
							</div>
						</div>
					</div>
					
                </li>

				<li >
					<div class="dispInlineBlock">
						<span  class="spanWhite" style="font-size: 18px;">Dispositivos</span> 			
					</div>
				</li >
				
				<li >
					<div class="dispInlineBlock">
						
					<ul class="list-group">

                    <li class="list-group-item">
                        Dispositivo 1
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionPrimary" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionPrimary" class="label-primary"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
					Dispositivo 2
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionSuccess" class="label-success"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
					Dispositivo 3
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionInfo" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionInfo" class="label-info"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
					Dispositivo 4
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionWarning" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionWarning" class="label-warning"></label>
                        </div>
                    </li>
                    <li class="list-group-item">
					Dispositivo 5
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox"/>
                            <label for="someSwitchOptionDanger" class="label-danger"></label>
                        </div>
                    </li>
					<li class="list-group-item">
					Dispositivo 6
                        <div class="material-switch pull-right">
                            <input id="switchDisp6" name="someSwitchOption006" type="checkbox"/>
                            <label for="switchDisp6" class="label-disp6"></label>
                        </div>
                    </li>
					<li class="list-group-item">
					Dispositivo 7
                        <div class="material-switch pull-right">
                            <input id="switchDisp7" name="someSwitchOption007" type="checkbox"/>
                            <label for="switchDisp7" class="label-disp7"></label>
                        </div>
                    </li>
					
					<li class="list-group-item">
					Dispositivo 8
                        <div class="material-switch pull-right">
                            <input id="switchDisp8" name="someSwitchOption008" type="checkbox"/>
                            <label for="switchDisp8" class="label-disp8"></label>
                        </div>
                    </li>
                </ul>


						
					</div>
				</li >
            </ul>
        </div>
		
								
							<div class="container-fluid " style=" background-image: linear-gradient(to right, rgba(0,0,255,0.2), rgba(0,0,255,0.3)); min-height:200px">
								<div class="row">	
									<div class="col-sm-2">
										<button type="button" class="btn btn-primary" onclick="showHint()">GERAR GRAFICO</button>
								

									</div>	
									<div class="col-sm-2">
								
										<a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">FILTROS</a>

									</div>	
							

									
									
							</div>

								<div class="row">	
									<div id="grafico"></div>
								</div>
							</div>
	  </div>
	  
	      <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
<script>

$("#slmi").on('input',function(e){
	$("#mi").html($("#slmi").val());
});

$("#slmf").on('input',function(e){
	$("#mf").html($("#slmf").val());
});

$("#slai").on('input',function(e){
	$("#ai").html($("#slai").val());
});

$("#slaf").on('input',function(e){
	$("#af").html($("#slaf").val());
});


$("#slhi").on('input',function(e){
	$("#hi").html($("#slhi").val());
});


$("#slhf").on('input',function(e){
	$("#hf").html($("#slhf").val());
});


$("#sldi").on('input',function(e){
	$("#di").html($("#sldi").val());
});

$("#sldf").on('input',function(e){
	$("#df").html($("#sldf").val());
});
//$("#grafico").html(this.responseText);
//var slmi = document.getElementById("slmi");
//var mi = document.getElementById("mi");
//mi.innerHTML = slmi.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
//slmi.oninput = function() {
    //mi.innerHTML = this.value;
//} 
</script>
</body>
</html> 



