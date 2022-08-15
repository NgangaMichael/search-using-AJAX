<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "leakey");
$sql = "SELECT * FROM users WHERE name LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['name']."</td>
		          <td>".$row['user_id']."</td>
		          <td>".$row['designation']."</td>
		          <td>".$row['password']."</td>
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>