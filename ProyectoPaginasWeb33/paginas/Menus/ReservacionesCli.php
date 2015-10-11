<?php include ("../sesionperf.php");?>
<!DOCTYPE html>
<html>
<head>
<!--Muestra las reservaciones que tiene el usuario-->
	<title></title>
	<script src="../Jquery/jquery-1.9.1.min.js"></script>
	<script src="js/ReserH.js"></script>
	<link href='css/ReservacionesCli.css' rel='stylesheet' type='text/css'>




</head>
<body>
<label id="sesi" style="display:none"><?php echo $_SESSION["usuario"];?></label>

	<h1 id="restitulo">Tus Reservaciones Son: </h1>

	<div id="tablareser">
		
	</div>

</body>
</html>


<!--<div class="datagrid">
<table>
<thead>
<tr>
<th>header</th>
<th>header</th>
<th>header</th>
<th>header</th>
</tr>
</thead>
<tfoot>
<tr>
<td colspan="4">
<div id="paging">
<ul>
<li><a href="#"><span>Previous</span></a></li>
<li><a href="#" class="active"><span>1</span></a></li>
<li><a href="#"><span>2</span></a></li>
<li><a href="#"><span>3</span></a></li>
<li><a href="#"><span>4</span></a></li>
<li><a href="#"><span>5</span></a></li>
<li><a href="#"><span>Next</span></a></li>
</ul>
</div>
</tr>
</tfoot>
<tbody><tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
<tr class="alt"><td>data</td><td>data</td><td>data</td><td>data</td></tr>
<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
<tr class="alt"><td>data</td><td>data</td><td>data</td><td>data</td></tr>
<tr><td>data</td><td>data</td><td>data</td><td>data</td></tr>
</tbody>
</table></div>-->