<?php
include '../KKCK_tasks/header.php';
include 'db.php';
$title = "Student Table";


$sql = "SELECT * FROM studentinfo";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                    <th>Group ID</th>
                </tr>
            </thead>
            <tbody>";

            while ($row = $result->fetch_assoc()) 
            {
                echo "<tr>
                        <td><a href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
                        <td>{$row['first_name']}</td>
                        <td>{$row['last_name']}</td>
                        <td>{$row['city']}</td>
                        <td>{$row['groupId']}</td>
                      </tr>";
                      


}
echo "</tbody></table>";
}
$conn->close();

include '../KKCK_tasks/footer.php';
?>