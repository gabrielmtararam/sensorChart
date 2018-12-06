<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Celke - datepicker</title>
   
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<script src="js/bootstrap.min.js"></script>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<link href="css/bootstrap-datepicker.css" rel="stylesheet"/>
		<script src="js/bootstrap-datepicker.min.js"></script> 
		

				
		<script src="js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>

	<link rel="stylesheet" type="text/css" href="dist/bootstrap-clockpicker.min.css">

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="dist/bootstrap-clockpicker.min.js"></script>
		

		

		<style>

			
		.btn span.glyphicon {    			
	opacity: 0;				
}
.btn.active span.glyphicon {				
	opacity: 1;				
}
		</style>
		
		
		
	</head>
	
	<body>
	
 
	
	
	
<div class="container" style=" background-color:red; min-height:200px">
<div class="input-group clockpicker">
    <input type="text" class="form-control" value="09:30">
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
</div>



		</div>
	
			<div class="container" style=" background-color:blue; min-height:400px">
			
				 <div class="row" style=" outline: 2px solid black;">
				 <div class="col-sm-1"  style=" background-color:white; min-height:50px	;">
			<H4>ID</H4>
					
			</div>
			<div class="col-sm-2"  style=" background-color:green; min-height:50px	;">
			<H4>HORA INICIAL</H4>
					
			</div>
			<div class="col-sm-3"  style=" background-color:white; min-height:50px	;">
			<H4>OPCAO</H4>
			</div>
				<div class="col-sm-2"  style=" background-color:green; min-height:50px	;">
				
		
			<H4>HORA FINAL</H4>
			</div>
			
				<div class="col-sm-3"  style=" background-color:white; min-height:50px	;">
			<H4>DESCRICAO</H4>
			</div>
				<div class="col-sm-1"  style=" background-color:green; min-height:50px	;">
			<H4>CBOX</H4>
			</div>
		</div>
		
		
		<!-- comeca form aqui -->

		<form role="form" id="contactForm" action="index.php" method="post">
		<div class="form-group">
		<div id="dados">asdasdasd</div>


 <script>
 window.onload = function() {
  atualizar();
};

     function atualizar()
            {
			$("#dados").html("Carregando...");
			alert("teste");
                var page = "main.php";
                $.ajax
                        ({
                            type: 'POST',
                            dataType: 'html',
                            url: page,
                            beforeSend: function () {
                                $("#dados").html("Carregando...");
                            },
                            data: {palavra: palavra},
                            success: function (msg)
                            {
                                $("#dados").html(msg);
                            }
                        });
            }
            
       
 
 </script>

	
		</div>
			
	
	
</div>
	
	<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					 <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
				
					</div>
				</div>
	
	</form>
	</div>

		<script type="text/javascript">
			$('#exemplo').datepicker({	
				format: "dd/mm/yyyy",	
				language: "pt-BR",
				startDate: '+0d',
			});
		</script>
		
		

		<script type="text/javascript">
$('.clockpicker').clockpicker();
</script>

				<script src="js/script1.js"></script> 
				<script>
				$("#contactForm").submit(function(event){


    // cancels the form submission
    event.preventDefault();
    creat_line();
//window.location.reload(true);
});
				</script>
	</body>
</html>



