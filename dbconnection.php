<!-- //////// php code ////// -->
<?php 
if(isset($_POST['submit'])) {
   
    //set connection variable

	$server="localhost";
	$username="root";
	$password="";
	$db="coronavirus";

	//create a daatabase connnection

	$con=mysqli_connect($server,$username,$password,$db);

	
	 //collect post variables
	$username= $_POST['username'];
	$email= $_POST['email'];
	$mobile= $_POST['mobile'];
	$symtoms= $_POST['coronasym'];
	$msg= $_POST['msg'];
     

    // it hold all check box 
	$chk = "";
	foreach ($symtoms as $chk1) {
		$chk .=$chk1.",";
	}

   $sql = "INSERT INTO `corona`(`username`, `email`, `mobile`, `symtoms`, `message`) VALUES ('$username','$email','$mobile','$chk','$msg');";

   // execute the query
   $query = mysqli_query($con,$sql);

   if ($con) {

	   ?>
	   <script>
	   	 alert("Inserted successfully");
	   </script>
	   <?php 
	}
	else{

	   ?>
	   <script>
	   	 alert("Not inserted successfully");
	   </script>
	   <?php 
	}


}
 ?>