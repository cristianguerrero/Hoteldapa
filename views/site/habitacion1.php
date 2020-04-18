<?php

/* @var $this yii\web\View */
	use yii\helpers\Url;

	$this->title = 'Hotel Dapa';

?>

    <!-- breadcrumb -->
	<div class="w3_breadcrumb">
	<div class="breadcrumb-inner">	
			<ul>
				<li><a href="index.php?r=site%2Findex">Inicio</a> <i> /</i></li>
				<li>Habitación 1</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumb -->

<div class="body_h1">
<!-- seccion uno -->
	<div class="row mgn0 h1_seccion1">
		<div class="col-xs-12 col-md-4" id="info_habitacion">
  			<div id="texto_habitacion">
  				<h1>Datos de Habitacion</h1><br>
  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis tempore ratione optio, porro autem nesciunt quo voluptate blanditiis praesentium, sint quia. Facere quasi aliquid est aut ea quidem, assumenda modi?</p><br>
  				
  				<!-- boton plegable -->
  				<div class="boton_reserva">
  					<a  id="reservar_boton">Reservar</a>
  					<div class="animacion">
  						<img src="pagina/images/img/carga.gif" alt="" height="30" width="30">
  					</div>
  					<button data-toggle="collapse" data-target="#reserva">Reservar</button>
  				</div>
				<!--fin boton plegable -->

			</div>
  		</div>
  
  		<div class="col-xs-12 col-sm-6 col-md-8">  	
	  		<!-- /Carrosul-->
	  		<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  			<!-- Indicators -->
	  			<ol class="carousel-indicators">
	    			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    			<li data-target="#myCarousel" data-slide-to="1"></li>
	    			<li data-target="#myCarousel" data-slide-to="2"></li>
	  			</ol>

	  			<!-- Wrapper for slides -->
	  			<div class="carousel-inner">
	    			<div class="item active">
	      				<img src="pagina/images/img/banner-habitacion.jpg" alt="Los Angeles">
	    			</div>

	    			<div class="item">
	      				<img src="pagina/images/img/banner-habitacion1.jpg" alt="Chicago">
	    			</div>

	    			<div class="item">
	      				<img src="pagina/images/img/banner-habitacion2.jpg" alt="New York">
	    			</div>
	  			</div>

	  			<!-- Left and right controls -->
	  			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	    			<span class="glyphicon glyphicon-chevron-left"></span>
	    			<span class="sr-only">Previous</span>
	  			</a>
	  			<a class="right carousel-control" href="#myCarousel" data-slide="next">
	    			<span class="glyphicon glyphicon-chevron-right"></span>
	    			<span class="sr-only">Next</span>
	  			</a>
			</div>
			<!-- fin carrosul -->
  		</div>
	</div>

	<div id="reservar_content" style="display:none">
	<!-- <div id="reserva" class="collapse"> -->
			<div class="row mgn0 seccion_reserva">
	  			<div class="col-md-offset-2 col-md-8 cuadro_reserva">
	  				<h2>RESERVAR</h2>
	  				<table class="table table-bordered">
			      		<tr>
			      			<th>Habitación</th>
				    		<th>Máximo Adultos</th>
				    		<th>Máximo Hijos</th>
				    		<th>Precio</th>
				    	</tr>
				    	<tr>
				    		<td>101</td>
				    		<td>2</td>
				    		<td>1</td>
				    		<td>$ 300.000</td>
				    	</tr>
					</table>

					<div class="row mgn0">
						<form action="#" method="post">
							<div class="col-md-3 pdn_tb10">
								<label><i class="fa fa-calendar" aria-hidden="true"></i> Desde</label>
								<input id="datepicker" name="Text" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required="" class="form-control">
							</div>
							<div class="col-md-3 pdn_tb10">
						        <label><i class="fa fa-calendar" aria-hidden="true"></i> Hasta</label>
								<input id="datepicker1" name="Text" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required="" class="form-control">									
							</div>

							<div class="col-md-3 pdn_tb10">
								<label><i class="fa fa-users" aria-hidden="true"></i> Adultos</label>
								<select id="adultos" class="form-control">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
							<div class="col-md-3 pdn_tb10">
								<label><i class="fa fa-users" aria-hidden="true"></i> Niños</label>
								<select id="ninos" class="form-control">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>

							<div>
								<input id="hab_cod" type="hidden" value="1">
							</div>

							<div class="clearfix"> </div>
							<div class="make wow shake" data-wow-duration="1s" data-wow-delay=".5s">
								  <div class="boton_reserva">
								  	<!-- <input type="submit" value="Reservar"> -->
								  	<a onClick="registrarReserva()" class="">
											<i class="material-icons icon-btn">&#xE877;</i>Reservar
										</a>
								  </div>
							</div>
						</form>
					</div>
	  			</div>	
			</div>
		<!-- </div> -->
	</div>
<!-- fin seccion uno -->


<!-- seccion dos -->
	<div class="row mgn0 h1_seccion2">
		<div class="col-md-12">
			<h2>HOLAAAAA</h2>
		</div>

		<div id="reserva" class="">
			<div class="row mgn0 seccion_reserva">
	  			<div class="col-md-offset-2 col-md-8 cuadro_reserva">
	  				<h2>RESERVAR</h2>
	  				<table class="table table-bordered">
			      		<tr>
			      			<th>Habitación</th>
				    		<th>Máximo Adultos</th>
				    		<th>Máximo Hijos</th>
				    		<th>Precio</th>
				    	</tr>
				    	<tr>
				    		<td>101</td>
				    		<td>2</td>
				    		<td>1</td>
				    		<td>$ 300.000</td>
				    	</tr>
					</table>

					<div class="row mgn0">
						<form method="post">
							<div class="col-md-3 pdn_tb10">
								<label><i class="fa fa-calendar" aria-hidden="true"></i> Desde</label>
								<input id="datepicker" name="Text" type="text" value="dd/mm/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd/mm/yyyy';}" required="" class="form-control">
							</div>
							<div class="col-md-3 pdn_tb10">
						        <label><i class="fa fa-calendar" aria-hidden="true"></i> Hasta</label>
								<input id="datepicker1" name="Text" type="text" value="dd/mm/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd/mm/yyyy';}" required="" class="form-control">									
							</div>

							<div class="col-md-3 pdn_tb10">
								<label><i class="fa fa-users" aria-hidden="true"></i> Adultos</label>
								<select id="adultos" class="form-control">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
							<div class="col-md-3 pdn_tb10">
								<label><i class="fa fa-users" aria-hidden="true"></i> Niños</label>
								<select id="ninos" class="form-control">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>

							<div>
								<input id="hab_cod" type="hidden" value="1">
							</div>

							<div class="clearfix"> </div>
							<div class="make wow shake" data-wow-duration="1s" data-wow-delay=".5s">
								  <div class="boton_reserva">
								  	<!-- <input type="submit" value="Reservar"> -->
								  	<a onClick="registrarReserva()" class="">
											<i class="material-icons icon-btn">&#xE877;</i>Reservar
										</a>
								  </div>
							</div>
						</form>
					</div>
	  			</div>	
			</div>
		</div>
	</div>
<!-- fin seccion dos -->


<!-- seccion tres -->

<!-- fin seccion tres -->

</div>
<!-- Final habitacion 1 -->

<script>

	function registrarReserva(){
		// captura los datos ingresados
		var hab_cod = document.getElementById("hab_cod").value;
		var desde = document.getElementById("datepicker").value;
		var hasta = document.getElementById("datepicker1").value;
		var adultos = document.getElementById("adultos").value;
		var ninos = document.getElementById("ninos").value;

		// comprobar que se ingresaron los datos basicos
		if((desde.length*hasta.length*adultos.length*ninos) != 0){
			// comprobar que sea un correo valido
			// if(comprobarEmail(correoCliente) == 0){
				// comprobar que sea telefono fijo o celular
				// if(((telefonoCliente.length) == 0) || ((telefonoCliente.length) == 7) || ((telefonoCliente.length) == 10)){
					$.ajax({
						url:'<?php echo Url::toRoute(['site/registrarreserva']); ?>',
						method: "GET",
						data: {'hab_cod':hab_cod,'desde':desde,'hasta':hasta,'adultos':adultos,'ninos':ninos},
						success: function (data) {										
							//O: Cliente Ya Se Encuentra Registrado En La Base De Datos 
							//1: Registro Completado
							//2: Registro Erroneo
							
							if(data == 0){
								mensajeAlerta(10);
							}else if(data == 1){
								// se cierran los modales de registro 								
								// $("#cerrarRegistro").click();
								// $("#closeModClt").click();
								// pone el codigo del cliente en el campo donde se valida su existencia
								// document.getElementById("cltRCc").value = codigoCliente;
								// $("#addIdClt").click();
								// muestra mensaje 
								// mensajeAlerta(9, nombreCliente);
								mensajeAlerta(9);
							}
						}
					});
				// }else{
				// 	mensajeAlerta(11);
				// }
			// }else{
			// 	mensajeAlerta(8, correoCliente);
			// }
		}else{
			mensajeAlerta(7);
		}
	}

	function comprobarEmail (email){
		//formato que debe terne un email
		re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
		// si cumple con el formato retorna 0 si no 1
		if(!re.exec(email)){
			return 1;
		}
		else {
			return 0;
		}
	}

	function mensajeAlerta(tipoAlerta, mensajeAdd = ''){
		switch(tipoAlerta){
			case 1:
				swal("Mesa sin pedido", "Tome el pedido antes de confirmarlo!", "error");
				break;
			case 2:
				
				break;
			case 3:
				swal("Hay una mesa sin pedido!", "Ambas mesas deben de tener por lo menos un pedido cada una, de lo contrario reduzca su tamaño a 4!", "error");
				break;
			case 4:
				swal("Usuario no registrado!", "Verifique el código ingresado o realice el debido registro!", "error");
				break;
			case 5:
				swal("Campo vacío!", "Ingrese un código en el campo indicado!", "error");
				break;
			case 6:
				swal("Usuario validado!", mensajeAdd, "success");
				break;
			case 7:
				Swal.fire("Campos vacios!", "Llene los campos para completar el registro! ", "error");
				break;
			case 8:
				swal("Correo electrónico no valido!", "Ingrese un correo electronico valido!", "error");
				break;
			case 9:
				Swal.fire("Registro completado!", "Se ha registrado el cliente "+mensajeAdd, "success");
				break;
			case 10:
				Swal.fire({
				  icon: 'error',
				  title: 'Lo sentimos...',
				  text: '¡Estas fechas estan ocupadas!'
				});
				break;
			case 11:
				swal("Numero de teléfono no valido!", "Ingresa un número de teléfono fijo o celular!", "error");
				break;
		}
	}

</script>


<script type="text/javascript" src="../web/pagina/js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						}
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
	<!-- //Dropdown-Menu-JavaScript -->
	
	<!-- <script>
			$(document).ready(function(){ 
				$('#reservar_boton').on('click',function(){
					$('#reservar_content').toggle('slow');
				});
			});
	</script> -->

	<!--  -->
	
	<!--  -->

	<!--  -->
		<script>
			$(document).ready(function(){ 
				$('#reservar_boton').on('click',function(){
						$("#reservar_boton").hide();
						$(".animacion").show();
					setTimeout(function(){
						$("#reservar_boton").show();
						$(".animacion").hide();
						$('#reservar_content').toggle('slow');
					}, 1000);
				});
			});
		</script>
	<!--  -->

<script type="text/javascript" src="../web/pagina/js/jquery.zoomslider.min.js"></script>
		<!-- search-jQuery -->
				<script src="../web/pagina/js/main.js"></script>

<!--/script-->
	<script src="../web/pagina/js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
			<!-- flexSlider -->
					<script defer src="../web/pagina/js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
<!--//script for portfolio-->
				<!-- Calendar -->
				<link rel="stylesheet" href="../web/pagina/css/jquery-ui.css" />
				<script src="../web/pagina/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker({ minDate: 1, dateFormat: 'dd/mm/yy' });
						  });
				  </script>
			<!-- //Calendar -->
<script type="text/javascript" src="../web/pagina/js/move-top.js"></script>
<script type="text/javascript" src="../web/pagina/js/easing.js"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
<!--end-smooth-scrolling-->
<!--js for bootstrap working-->
	<script src="../web/pagina/js/bootstrap.js"></script>
<!-- //for bootstrap working -->