<head><title>IoT raw SQL data</title></head>
<body>
	<?php
		require("connect.php");
		$result = mysqli_query($link, "SELECT * FROM tempLog ORDER BY timeStamp DESC");
		$fields_num = mysqli_num_fields($result);

		echo "<table border='1'><tr>";

		for($i=0; $i<$fields_num; $i++){
			$field = mysqli_fetch_field($result);
			echo "<td>{$field->name}</td>";
		}
		echo "</tr>\n";

		while($row = mysqli_fetch_row($result)){
			echo "<tr>";
			foreach($row as $cell) echo "<td>$cell</td>";
			echo "</tr>\n";
		}
	?>
	<input type=button onClick="location.href='graph.html'" value='Graph'>
</body>
