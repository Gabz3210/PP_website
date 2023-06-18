<html>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => penny p
        $conn = mysqli_connect("localhost", "root", "", "penny p");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 6 values from the form data(input)
        $Death_by_Chocolate_Cake =  $_REQUEST['Death by Chocolate Cake'];
        $Red_Velvet_Cake = $_REQUEST['Red Velvet Cake'];
        $Cheesecake =  $_REQUEST['Cheesecake'];
	    	$Assoerted_Cupcakes =  $_REQUEST['Assoerted Cupcakes']
        $Cookies = $_REQUEST['Cookies'];
        $Fudge = $_REQUEST['Fudge'];
    		$Blueberry_Tart = $_REQUEST['Blueberry Tart'];
    		$Chocolate_Declares = $_REQUEST['Chocolate Declares'];
	    	$Name = $_REQUEST['Name'];
	    	$Cell = $_REQUEST['Cell'];
         
        // Performing insert query execution
        // here our table name is client_info
        $sql = "INSERT INTO products  VALUES ('$Death_by_Chocolate_Cake',
            '$Red_Velvet_Cake','$Cheesecake','$Assoerted_Cupcakes','$Cookies',
		      	'$Fudge','$Blueberry_Tart','$Chocolate_Declares')";
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>
