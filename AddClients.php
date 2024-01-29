<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BinaryCity";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $client_name = $_POST["client_name"];
    $client_email = $_POST["client_email"];

    // SQL to insert data into the clients table
    $sql = "INSERT INTO clients (name, email) VALUES ('$client_name', '$client_email')";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo "New client created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create New Client</title>
</head>
<body>
    <h2>Create New Client</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="client_name">Client Name:</label>
        <input type="text" name="client_name" required><br>

        <label for="client_email">Client Email:</label>
        <input type="email" name="client_email" required><br>

        <input type="submit" value="Create Client">
    </form>
</body>
</html>



Other code

/**
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="AddClients.php">Clients</a></li>
            <li><a href="GetClients.php">Contacts</a></li>
        </ul>
    </nav>
</header>
<?php


    class ClientManager
    {
        private $conn;
    
        // Constructor to establish database connection
        public function __construct($servername , $username, $password, $dbname)
        {
            $this->conn = new mysqli($servername, $username, $password, $dbname);
    
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
    
        // Fetch clients from the database ordered by name ascending
        public function getClients()
        {
            $sql = "SELECT * FROM clients ORDER BY name ASC";
            $result = $this->conn->query($sql);
    
            // Check if there are clients
            if ($result->num_rows > 0) {
                // Return the list of clients as an associative array
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                // Return 'No clients found' message
                return "No clients found";
            }
        }
    
        // Destructor to close the database connection
        public function __destruct()
        {
            $this->conn->close();
        }
    }
    
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Binary_City";
    
    // Create an instance of the ClientManager class
    $clientManager = new ClientManager($servername, $username, $password, $dbname);
    
    // Get the list of clients
    $clients = $clientManager->getClients();
    
    // Display the list or the message
    if (is_array($clients)) {
        echo "<h2>List of Clients</h2>";
        echo "<ul>";
        foreach ($clients as $client) {
            echo "<li>" . $client["Name"] . " - " . $client["Client_Code"] . " - " . $client["Client_Code"] ."</li>";
        }
        echo "</ul>";
    } else {
        echo "No Client(s) found.";
    }
    

?>
 <form method="post">
  <label for="clientname">Client name:</label><br>
  <input type="text" id="cname" name="cname"><br>
  <label for="Sname">Client Code:</label><br>
  <input type="text" id="client_code" name="client_code"><br>
  <input type="submit" value="submit">
</form> 
</body>
</html>

*/