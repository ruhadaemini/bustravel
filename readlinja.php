<html>
	<body>	
		<?php include'dbconnect.php'; ?>
		<?php include'header.php' ?>
		<?php
		$query = "SELECT * from linjat ORDER BY l_id";
		$result = mysql_query($query) or die (mysql_error());
		
		$count = mysql_num_rows($result);
		if($count>0);
		{
			echo "<table id='table' border='2' cellpadding='10' width='960px' >";
			echo "<tr><th colspan='6' align='left'>Linjat <a href='addlinja.php'> Shto </a></th></tr>";
			echo "<tr><th>ID</th><th>Nisja nga : </th><th>Deri ne: </th><th>Koha e nisjes</th><th colspan='2'>Veprimet</th></tr>";
		while ($row = mysql_fetch_array($result))
			{
				$l_id = $row['l_id'];
				$qyteti1 = $row['qyteti1'];
				$qyteti2 = $row['qyteti2'];
				$ora = $row['ora'];

				echo "<tr>";
				echo "<td>" .$l_id. "</td>";
				echo "<td>" .$qyteti1. "</td>";
				echo "<td>" .$qyteti2. "</td>";
				echo "<td>" .$ora. "</td>";
				echo "<td><a href='fshijlinjat.php?l_id=".$l_id."'><img src='images/delete.png'> Delete</a></td>";
				echo "<td><a href='editlinja.php?l_id=".$l_id."'><img src='images/edit.png'> Edit</a></td>";
			}
			echo "</table>";
		}	
		?>
		
	</body>
</html>
