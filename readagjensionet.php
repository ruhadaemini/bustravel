<html>
	<body>	
		<?php include'header.php' ?>
		<?php include'dbconnect.php'; ?>
		<?php
		$query = "SELECT * from agjensionet ORDER BY a_id";
		$result = mysql_query($query) or die (mysql_error());
		
		$count = mysql_num_rows($result);
		if($count>0);
		{
			echo "<table border='1' cellpadding='10' width='960px'>";
			echo "<tr><th colspan='7' align='left'>Agjensionet</th></tr>";
			echo "<tr><th>ID</th><th>Emri i Agjensionit</th><th>Pershkrimi</th><th>Qyteti</th><th colspan='2'>Veprimet</th></tr></tr>";

		while ($row = mysql_fetch_array($result))
			{
				$a_id = $row['a_id'];
				$a_emri = $row['a_emri'];
				$pershkrimi = $row['pershkrimi'];
				$q_id = $row['q_id'];
				//$q_emri = $row['q_emri'];

				echo "<tr>";
				echo "<td>" .$a_id. "</td>";
				echo "<td>" .$a_emri. "</td>";
				echo "<td>" .$pershkrimi. "</td>";
				echo "<td>" .$q_id. "</td>";
				//echo "<td>" .$q_emri. "</td>";
				echo "<td><a href='fshijagjensioni.php?a_id=".$a_id."'><img src='images/delete.png'> Delete</a></td>";
				echo "<td><a href='editagjensionet.php?a_id=".$a_id."'><img src='images/edit.png'> Edit</a></td>";
			}
			echo "</table>";
		}	
		?>		
	</body>
</html>
