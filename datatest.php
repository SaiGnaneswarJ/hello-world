<?php
$servername = "localhost";
$username = "saignaneswarj";
$password = "Gnaneswar@2002";
$dbname = "Practice";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have a table named 'users'
$sql = "SELECT * FROM Mydata";
$result = $conn->query($sql);

if ($result) {
    // Fetch all rows as an associative array
    $rowsAssociative = mysqli_fetch_all($result, MYSQLI_ASSOC);
    print_r($rowsAssociative);
    echo "<br><br>";

    // Free result set
    // mysqli_free_result($result);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<br><br>";


$query = "SELECT id, name, email FROM Mydata";

// Execute the query
$result1 = mysqli_query($conn, $query);

// Check if the query was successful
if ($result1) {
    // Fetch a single row as an enumerated array
    $row = mysqli_fetch_row($result1);

    // Check if a row was returned
    if ($row) {
        // Accessing values by index (0-based)
        $id = $row[0];
        $name = $row[1];
        $email = $row[2];

        // Process the data as needed
        echo "ID: $id, Name: $name, Email: $email";
    } else {
        echo "No rows found";
    }

    // Free the result set
    mysqli_free_result($result1);
} else {
    // Handle query error
    echo "Query failed: " . mysqli_error($conn);
}

   echo "<br>";  
   $conn -> query("Select id , name from Mydata");

   //Field Count
   $count = $conn->field_count;
   print("Field Count: ".$count);
   echo "<br>";
     
   var_dump($conn -> get_charset());

   echo "<br>";
   // client info()
//    echo mysqli_get_client_info();

//    echo "<br>";
//    // client stats
//    print_r(mysqli_get_client_stats());

//    echo "<br>";
//    // client version

//    echo mysqli_get_client_version();

//    echo "<br>";
//    // eonnection stats
//    print_r(mysqli_get_connection_stats($conn));

// echo "<br><br>";

// echo mysqli_get_host_info($conn);

echo "<br><br>";

echo mysqli_get_proto_info($conn);

echo "<br><br>";

echo mysqli_get_server_info($conn);

echo "<br><br>";

echo mysqli_get_server_version($conn);

echo "<br><br>";

echo mysqli_info($conn);

echo "<br><br>";
echo "New record has id: " . mysqli_insert_id($conn);


echo "<br><br>";









// Close connection
$conn->close(); 


















?>
