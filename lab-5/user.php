


<?php
    include ("functions.php");

    /*$firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $age = $_POST["age"];*/

    $users = getAllUserData();
    #print_r($users);

		echo "<br>";

		foreach ($users as $user)
		{
		echo "

    
        
		<body style='background-image: url(img3.jpg);
		background-position: center;
		background-size:  cover;'>
<br>

<div class='container'>
   <div class='vertical'>
		   <div class='card' align='center'>
			   <img src='img1.png' width='200px' height='200px' align='center'style='margin-top:30px;'>
				   <div class='card-body'>
					   <h4 class='card-title' style= 'color: white;
													  margin-bottom: 30px;
													  margin-top: -3px;
													  font-size: 20;
													  font-family: cursive;'>" .$user['firstname']. "   " .$user['lastname'].
													  
						" <form method='GET' action='userDetails.php'>
					   <table border='1px solid' width='350px' height='250px' align='center' style='background:white;
																									border-radius: 10px;
																									border: transparent;
																									margin-top: 5px;'>

						   <tr> 
						   <th style='background-color: darkcyan;
									  border-radius: 5px;
									  padding: 3px;'> ID </th>
						   <td align='center' style='border-color: darkcyan;
													 border-style: groove;
													 border-radius: 10px;'> ".$user['id']. "</td>
						   </tr>

						   <tr>
						   <th style='background-color: darkcyan;
									  border-radius: 5px;
									  padding: 3px;''> First Name </th>
						   <td align='center' style='border-color: darkcyan;
													 border-style: groove;
													 border-radius: 10px;'>".$user['firstname']. "</td>
						   </tr>

						   <tr>
						   <th style='background-color: darkcyan;
									  border-radius: 5px;
									  padding: 3px;''> Last Name </th>
						   <td align='center' style='border-color: darkcyan;
													 border-style: groove;
													 border-radius: 10px;'>" .$user['lastname']." </td>
						   </tr>

						   <tr> 
						   <th style='background-color: darkcyan;
									  border-radius: 5px;
									  padding: 3px;''> Email </th>
						   <td align='center' style='border-color: darkcyan;
													 border-style: groove;
													 border-radius: 10px;'>" .$user['email']." </td>
						   </tr>

						   <tr>
						   <th style='background-color: darkcyan;
									  border-radius: 5px;
									  padding: 3px;''> Address </th>
						   <td align='center' style='border-color: darkcyan;
													 border-style: groove;
													 border-radius: 10px;'> " .$user['address']." </td>
						   </tr>

						   <tr>
						   <th style='background-color: darkcyan;
									  border-radius: 5px;
									  padding: 3px;'> Age </th>
						   <td align='center' style='border-color: darkcyan;
													 border-style: groove;
													 border-radius: 10px;'>" .$user['age']. " </td>
						   </tr>
						   
	   
						   </table>
				  
			   <input type='submit' value='open' style='background-color: #4CAF50;
			  															 margin-top: 10px;
																		 border-radius: 20px;
																		 font-size: 20;
																		 font-family: cursive;
																		 width: 100px;
																		 height: 40px;
																		 text-align: center;'>
				</form>
		   </div>
	   </div>
	   </div>
</div>


</body>";
        }
?>