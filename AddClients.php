

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

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $client_Name = $_POST["client_name"];
    $client_Code = $_POST["client_code"];

    // SQL to insert data into the clients table
    $sql = "INSERT INTO clients (Client_Name, Client_Code) VALUES ('$client_Name', '$client_Code')";

}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create New Client</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="GetClients.php">Clients</a></li>
                <li><a href="GetContact.php">Contacts</a></li>
            </ul>
        </nav>
    </header>
    <h2>Create New Client</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="client_name">Client Name:</label>
        <input type="text" name="client_name" id="client_name" required><br>

        <label for="client_code">Client Code:</label>
        <input type="text" name="client_code" id="client_code" readonly><br>

        <input type="submit" value="Create Client">
    </form>
</body>
</html>

<script src="main.js"></script>





