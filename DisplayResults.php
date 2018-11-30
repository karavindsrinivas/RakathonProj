<?php
$con=mysqli_connect("localhost","root","","wpproject");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM registrations");

echo "<table>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['dob'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
