<table style="font-size: 12px; color: #333333; margin:auto; width: 80%; border-width: 2px; border-collapse: collapse; border: 1px solid #b8b8b8; font-family: Arial, Helvetica, sans-serif;">
	<tr style="background-color: #fdfdfd;">
		<th style="padding:10px;"><img src="http://cambiemoslo.com/img/Logo.png" alt="Logo cambiemoslo" width="150" height="80" /></th>
	</tr>
	<tr class="contenido" style="border: 1px solid #b8b8b8;">
		<td>
			<h6 class="title" style="font-size: 25px; font-weight: 800; color: #25405f; text-align: center;">Tienes un mensaje nuevo</h6>
			
			<p style="text-align: center; font-size:15px;">
				<b>Tienes un mensaje de:</b> <br />
				{{$de->name}}
			</p>
			<p style="text-align: center; font-size:15px;">
				<b>Producto:</b> <br />
				{{$producto->nombre}}
			</p>

			<p style="margin: 5% auto; font-size: 16px; text-align: left; padding: 20px; border: 1px solid #b8b8b8; width: 80%; border-radius: 10px;">
				{{$mensaje}}
			</p>
		</td>
	</tr>
	<tr style="	font-size: 15px; color: #2376a6;">
		<td style="text-align: center;background-color: #fdfdfd; padding:10px;">El equipo de cambiemoslo</td>
	</tr>
</table>
