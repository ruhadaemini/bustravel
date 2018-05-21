<html>
	<body>	
		<?php include'dbconnect.php'; ?>
		<?php include'header.php' ?>
		<?php
		$query = "SELECT * from qytetet ORDER BY q_id";
		$result = mysql_query($query) or die (mysql_error());
		
		$count = mysql_num_rows($result);
		if($count>0);
		{
			echo "<table id='table' border='2' cellpadding='10' width='960px' >";
			echo "<tr><th colspan='4' align='left'>Qyteti <a href='addqyteti.php'> Shto </a></th></tr>";
			echo "<tr><th>ID</th><th>Emri i Qytetit</th><th colspan='2'>Veprimet</th></tr>";

		while ($row = mysql_fetch_array($result))
			{
				$q_id = $row['q_id'];
				$q_emri = $row['q_emri'];

				echo "<tr>";
				echo "<td>" .$q_id. "</td>";
				echo "<td>" .$q_emri. "</td>";
				echo "<td><a href='fshijqytete.php?q_id=".$q_id."'><img src='images/delete.png'> Fshij</a></td>";
				echo "<td><a href='editqyteti.php?q_id=".$q_id."'><img src='images/edit.png'> Ndrysho</a></td>";
			}
			echo "</table>";
		}	
		?>
		
	</body>
</html>
