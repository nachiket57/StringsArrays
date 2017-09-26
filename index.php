

<?php
print "<h2> To calculate similarity in the strings </h2>";
$v1 = 'NACH';
$v2 = 'NACHI'; 
print '<br>';
echo similar_text($v1, $v2);
print '<br>';
echo similar_text($v1, $v3);
echo '<hr>';
?>



	<?php
	print "<h2> To return part of a string </h2>";
	$i7 = substr("abgrddffbhbcdefg", 0, -1);
	echo $i7;
	echo '<hr>';
	?>
	
	<?php
	print "<h2>  To count the string length </h2> <br>";
	$st = ' NACHIKET';
	echo strlen($st);
	echo '<hr>';
	?>
	<?php
	print "<h2> To convert a string into an array </h2> ";
	$s1 = "I am from India";
	$arr1 = str_split($s1);
	print_r($arr1);
	echo '<hr>';
	?>
	<?php
	print "<h2> To convert binary into hexadecimal </h2>";
	$bin = "0101011";
	$hexad = dechex(bindec($bin));
	echo $hexad;
	echo '<hr>';
	?>
	<?php
	print "<h2> To convert the first alpabet of a string into uppercase
	</h2>";
	$a4 = 'abcd';
	$a4 = ucfirst($a4);
	echo $a4;
	echo '<hr>';
	?>
	<?php
	print"<h2> To return a formatted string </h2>";
	$variable11 = '7';
	$variable12= 'in the bag';
	$variable13 = 'There are %d apples in the %s';
	echo sprintf($variable13, $variable11, $variable12);
	echo '<hr>';
	?>
	
	<?php
	print" <h2> To format a number with grouped thousands </h2>";
	$r5 = 1299999524555.978665756;
	$r6 = number_format($r5);
	echo $r6;
	print '<hr>';
	?>
	
	
	<?php
	print "<h2>Function that wraps a string to given number of characters
	</h2>";
	$variable8 = "NAACCHIKEEETTT DESSAIIIIIIIIIIII";
	$variable9 = wordwrap($variable8, 2, "\n", true);
	echo "$variable9\n";
	echo '<hr>';
	?>
	<?php
	print "<h2> Function that converts uppercase to lowercase </h2>";
	$x1 = "WEB SYS DEVELOPMENT IS601 FALL";
	$x1= strtolower($x1);
	echo $x1;
	echo '<hr>';
	?>
	
	
	
	<?php 
	print"<h2> Array function that counts the elements in the array </h2>";
	$variable [0] = 1;
	$variable[1] = 3;
	$variable[2] = 5;
	$variable[3] = 8;
	$variable[4] = 9;
	$result = count($variable );
	echo $result;
	echo '<hr>';
	?>

	<?php 
	  print"<h2> Function to sort the array </h2>"; 
	  $drinks = array("C", "P", "M", "L","P");
	  sort($drinks);
	  foreach ($drinks as $key => $val)
	  {
	  echo "drinks[" . $key . "] = " . $val . "\n";
	  }
	  echo '<hr>';
	  ?>

	   <?php 
	   print"<h2>  To reverse sort the array </h2>";
	   $fruits = array("l", "o", "b", "e");
	   rsort($fruits);
	   foreach ($fruits as $key => $val)
	   {
	   echo "$key = $val\n";
	   }
	   echo '<hr>';
	   ?>
	   
	   <?php 
	    print"<h2> To extract a slice of array </h2>";
	    $input = array("a", "b", "c", "d", "e","f");
	    $output = array_slice($input, 2);
	    $output = array_slice($input, -2, 1);
	    $output = array_slice($input, 0, 3);
	    print_r(array_slice($input, 2, -1));
	    print_r(array_slice($input, 2, -1, true));
	    echo '<hr>';
	    ?>
	     <?php 
	     print"<h2>Function that replaces elements from an array </h2>";
	     print" The output is: <br> ";
	     $base = array("Beer", "Vodka", "Wine", "Scotch");
	     $repA = array(0 => "Cognac", 4 => "Rum");
	     $repB = array(0 => "Soda");
	     $hum = array_replace($base, $repA, $repB);
	     print_r($hum);
	     echo '<hr>';
	     ?>
	      <?php 
	      print"<h2> Function that removes duplicate value from the array
	      </h2>";
	      print" The output is: <br>";
	      $i = array("x" => "Brown", "Black", "y" => "Brown", "Black",
	      "Blue","Beige");
	      $o= array_unique($i);
	      print_r($o);
	      echo '<hr>';
	      ?>
	       <?php 
	       print"<h2> Function to shift off an element from the array
	       </h2>";
	       print"The output is: <br>";
	       $s = array("orange", "banana", "apple", "raspberry");
	       $f = array_shift($s);
	       print_r($s);
	       echo '<hr>';
	       ?>
	        <?php 
		print" <h2>  Function that randomly shuffles an array </h2>";
		$no = range(1, 10);
		shuffle($no);
		foreach ($no as $number) {
		echo "$number ";
		}
		echo '<hr>';
		?>
		 <?php 
		 print "<h2>  Function that fills the arrays with values
		 </h2>";
		 print " The output is: <br>";
		 $var1 = array_fill(5, 6, 'Tiger');
		 $var2 = array_fill(-3, 4, 'Rabbit');
		 print_r($var1);
		 print_r($var2);
		 echo '<hr>';
		 ?>
		 
		  <?php 
		  print "<h2>  Function that computes the difference of arrays
		  </h2>";
		  $y1 = array("a" => "green", "red", "blue", "red");
		  $y2 = array("b" => "green", "yellow", "red");
		  $u = array_diff($y1, $y2);
		  print_r($u);
		  echo '<hr>';
		  ?>
		                              
					      
					     
