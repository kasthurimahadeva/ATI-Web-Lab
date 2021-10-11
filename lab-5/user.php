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
			<div class='container'>
				<div class='vertical'>
						<div class='card' align='center'>
							<img src='img1.png' width='200px' height='200px' align='center'>
								<div class='card-body'>
									<h4 class='card-title'>" .$user['firstname']. "   " .$user['lastname'].
									
									" <table border='1px solid' width='250px' height='250px' align='center'>
		
										<tr> 
										<th> ID </th>
										<td align='center'> ".$user['id']. "</td>
										</tr>

										<tr>
										<th> First Name </th>
										<td align='center'>".$user['firstname']. "</td>
										</tr>

										<tr>
										<th> Last Name </th>
										<td align='center'>" .$user['lastname']." </td>
										</tr>

										<tr> 
										<th> Email </th>
										<td align='center'>" .$user['email']." </td>
										</tr>

										<tr>
										<th> Address </th>
										<td align='center'> " .$user['addres']." </td>
										</tr>

										<tr>
										<th> Age </th>
										<td align='center'>" .$user['age']. " </td>
										</tr>
					
										</table>
								</div>
						</div>
					</div>
			</div>";
		}
?>