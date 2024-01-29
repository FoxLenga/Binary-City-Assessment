<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "binary_city";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch clients from the database ordered by name ascending
$sql = "SELECT * FROM clients ORDER BY name ASC";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>List of Clients</title>
   
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="GetClients.php">Clients</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </nav>
    </header>

<h2>List of Clients</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email Address</th>
            <th>Linked Client</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Display the list of clients in a table
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["surname"] . "</td>";
                echo "<td>" . $row["email address"] . "</td>";
                echo "<td>" . $row["link clients"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No clients found</td></tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
