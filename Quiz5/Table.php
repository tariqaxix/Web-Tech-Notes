<?php
echo "<table border =\"2\" style='border-collapse: none'>";
	for ($row = 1; $row <= 10; $row++) { 
		echo "<tr> \n";
		for ($column = 1; $column <= 5; $column++) { 
		   $p = $column + $row;
		   echo "<td>$row + $column = $p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>