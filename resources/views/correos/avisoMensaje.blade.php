<style type="text/css">
	.tftable {
		font-size: 12px;
		color: #333333;
		width: 50%;
		border-width: 2px;
		border-color: #e2e2e2;
		border-collapse: collapse;
		font-family: Arial, Helvetica, sans-serif;
	}
	.tftable th {
		background-color: #ffffff;
		border-width: 2px;
		padding: 8px;
		border-style: solid;
		border-color: #e2e2e2;
		text-align: center;
	}
	.tftable tr {
		background-color: #ffffff;
	}
	.tftable tr {
		background-color: #ffffff;
	}
	.tftable td {
		border-width: 2px;
		padding: 8px;
		border-style: solid;
		border-color: #e2e2e2;
		text-align: center;
		border-radius: 20px;
	}
	.contenido {
		height: 250px;
		font-size: 15px;
		color: #555555;
	}

	.contenido td .title {
		font-size: 25px;
		font-weight: 800;
		color: #25405f;
	}
	.hola {
		color: #25405f;
		font-size: 19px;
		font-weight: 600;
		text-align: center;
	}
	.mensaje {
		margin: 5% auto;
		font-size: 16px;
		text-align: left;
		padding: 20px;
		border: 1px solid #b8b8b8;
		width: 40%;
		border-radius: 10px;
	}
	.footer {
		font-size: 15px;
		color: #2376a6;
	}
</style>

<table class="tftable" border="1">
	<tr>
		<th><img src="{{asset('img/Logo.png')}}" alt="" width="150" height="80" /></th>
	</tr>
	<tr class="contenido">
		<td>
			<h6 class="title">Tienes un mensaje nuevo</h6>
			<p class="hola">Hola, Pedro</p>
			<p>
				<b>Tienes un mensaje de:</b> <br />
				Juan perez Pedrito
			</p>
			<p>
				<b>Producto:</b> <br />
				Camara de seguridad
			</p>

			<p class="mensaje">
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non eum deleniti eligendi nulla quaerat corporis omnis aspernatur voluptatum optio ex!
			</p>
		</td>
	</tr>
	<tr class="footer">
		<td>El equipo de cambiemoslo</td>
	</tr>
</table>
