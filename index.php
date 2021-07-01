<?php session_start(); ?>
<?php include 'header.php'; ?>
<script> 
	function mueveReloj(){  
		var LaFecha=new Date(); 
		var Mes=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 
		var diasem=new Array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sábado'); 
		var diasemana=LaFecha.getDay(); 
		var FechaCompleta=""; 
		var HoraA="";
		var NumeroDeMes=""; 
				
				var hora = LaFecha.getHours(); 
			if(hora<10){hora="0"+hora;}; 
				var minuto = LaFecha.getMinutes();  
			if(minuto<10){minuto="0"+minuto;}; 
				var segundo = LaFecha.getSeconds(); 
			if(segundo<10){segundo="0"+segundo;}; 
				NumeroDeMes=LaFecha.getMonth(); 
				
				FechaCompleta=diasem[diasemana]+" "+LaFecha.getDate()+" de "+Mes[NumeroDeMes]+" de "+LaFecha.getFullYear();
				HoraA=""+hora+":"+minuto+":"+segundo; 
				document.getElementById('FECHA').innerHTML=FechaCompleta; 
				document.getElementById('HORA').innerHTML=HoraA; 
				setTimeout('mueveReloj()',1000) 
	}  
</script>  

<body class="hold-transition login-page" onload="mueveReloj()">
<div class="login-box">
  	<div class="login-logo">
  <!--		<p id="date"></p>
      <p id="time" class="bold"></p> -->
	  <div id="FECHA"></div>
	  <div id="HORA" class="bold"></div> 
  	</div>
  
  	<div class="login-box-body">
    	<h4 class="login-box-msg">Ingrese la identificación del empleado</h4>

    	<form id="attendance">
          <div class="form-group">
            <select class="form-control" name="status">
              <option value="in">Hora de entrada</option>
              <option value="out">Hora de salida</option>
            </select>
          </div>
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control input-lg" id="employee" name="employee" required>
        		<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
      		</div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="signin"><i class="fa fa-sign-in"></i> Registrar</button>
        		</div>
      		</div>
    	</form>
  	</div>
		<div class="alert alert-success alert-dismissible mt20 text-center" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-check"></i> <span class="message"></span></span>
    </div>
		<div class="alert alert-danger alert-dismissible mt20 text-center" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-warning"></i> <span class="message"></span></span>
    </div>
  		
</div>
	
<?php include 'scripts.php' ?>
<script type="text/javascript">


$(function() {
  var interval = setInterval(function() {
    var momentNow = moment();
    $('#date').html(momentNow.format('dddd').toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));  
    $('#time').html(momentNow.format('hh:mm:ss A'));
  }, 100);

  $('#attendance').submit(function(e){
    e.preventDefault();
    var attendance = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'attendance.php',
      data: attendance,
      dataType: 'json',
      success: function(response){
        if(response.error){
          $('.alert').hide();
          $('.alert-danger').show();
          $('.message').html(response.message);
        }
        else{
          $('.alert').hide();
          $('.alert-success').show();
          $('.message').html(response.message);
          $('#employee').val('');
        }
      }
    });
  });
    
});
</script>



</body>
</html>