<head>
	<title>Sensor Data</title>
</head>

<body>
	<h1>Temperature sensor readings</h1>

	<table border="1" cellspacing="1" cellpadding="1">
		<tr>
			<td>&nbsp;Timestamp&nbsp;</td>
			<td>&nbsp;Chambre&nbsp;</td>
			<td>&nbsp;Chambre2&nbsp;</td>
			<td>&nbsp;SalleBain&nbsp;</td>
			<td>&nbsp;Salon&nbsp;</td>
		</tr>

		<?php
			require("connect.php");

			$result = mysqli_query($link, "SELECT * FROM tempLog ORDER BY timeStamp DESC");
			if($result!==FALSE){
				while($row = mysqli_fetch_array($result)) {
					printf("<tr><td> &nbsp;%s </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>", 
					$row["timeStamp"], $row["Chambre"], $row["Chambre2"], $row["SalleBain"], $row["Salon"]);
				}
				mysqli_free_result($result);
				mysqli_close($link);
			}
		?>

		<input type=button onClick="location.href='graph.html'" value='Graph'>
	</table>
</body>
