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
    <title>List of Clients</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>List of Clients</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Client Code</th>
            <th>Linked Client</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Display the list of clients in a table
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["client_code"] . "</td>";
                echo "<td>" . $row["linked_client"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No clients found</td></tr>";
        }
        ?>
    </tbody>
</table>
<div>
        <a href="index.php" target="_blank" class="addClientBtn">Add Client</a>
    </div>
</body>
</html>
