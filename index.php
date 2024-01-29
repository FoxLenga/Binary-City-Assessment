<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            echo "<li>" . $client["name"] . " - " . $client["Client Code"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo $clients;
    }
    
   
    

?>
 <form method="post">
  <label for="clientname">Client name:</label><br>
  <input type="text" id="cname" name="cname"><br>
  <label for="Sname"> name:</label><br>
  <input type="text" id="lname" name="lname">
</form> 
</body>
</html>