  <table align="center" border='1' width="100%">
  	<?php
  	$num = 10;
  	for($i = 1; $i <= 10; $i++)
  	{
  		echo "<tr>";
  		for($j =2; $j <= $num; $j++)
  		{
  			$multiplication_table = ($i * $j);
  			echo "<td>$j x $i = $multiplication_table </td>";
  		}
  		echo "<tr/>";
  	}
  	?>
  	
  </table>
  