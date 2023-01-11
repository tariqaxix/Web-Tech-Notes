<html> 
  <head> 
  <title> Database Creation </title> 
  <style>
    table,th,td{
      border: 1px solid black;
      border-collapse: collapse;
      border-color: chocolate;
    }
    th,td{
      text-align: center;
      padding: 5px;
    }
    table tr:nth-child(even){
      background-color: bisque;
    }
    
  </style>
  </head> 
  

<?php
$con = new mysqli("localhost","root","");


// If database is not already existing, then create one

if (!mysqli_select_db($con,"Students1_DB")){
	
// Create database
 mysqli_query($con,"CREATE DATABASE Students1_DB");
 print("Database created successfully. <br />");
 }	
   

   // Create table
   mysqli_select_db($con,"Students1_DB");
   $sql = "CREATE TABLE Students(FirstName varchar(30), 
           LastName varchar(30), Gender varchar(15), Age varchar(15), Department varchar(30))";
   
   // Execute query
   mysqli_query($con,$sql);
//}
//else {
	
$checkbox1=$_POST['skill'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
	
		
   mysqli_select_db($con,"Students1_DB");
   $sql="INSERT INTO Students (FirstName, LastName, Gender, Age, Department) 
   VALUES ('$_POST[firstname]','$_POST[sex]','$chk','$_POST[number]','$_POST[dp]')";

   if (!mysqli_query($con,$sql)){
     die('Error executing the query');
   }
   
   
//}
mysqli_close($con);
?> 


<?php
  $con = mysqli_connect("localhost","root","");
  if (!$con){
    die('Could not connect to localhost'. mysqli_error());
  }
  mysqli_select_db($con,"Students1_DB");
  $result = mysqli_query($con,"SELECT * FROM Students");
  mysqli_close($con);
?>
<table style="width: 100%;">

  <tr style="background-color: chocolate; color: white; font-weight: bold"> 
     
      <td> Record No </td>  <td> Name </td> <td> Gender </td> <td> Skills </td> <td> Contact No </td> <td> Department </td> 
        
  </tr>


         <?php
            // fetch each record in result set
            for ( $counter = 1; $row = mysqli_fetch_row( $result );$counter++ ) {
          print( "<tr>" );
		  print("<td>". $counter ."</td>");
          foreach ( $row as $key => $value ) 
		     print( "<td>$value</td>" );
          print( "</tr>" );
      } // end for
   ?>
         <!-- end PHP script -->

       </table>
	   <br>
   <center> <a href="GatherData.html"> Back </a> </center>
 </body> 
</html>


