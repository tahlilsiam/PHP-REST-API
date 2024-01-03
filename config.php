<?php

// Connection code (as per your question)
$conn = mysqli_connect("localhost", "famhxukk_Siam", "2BN6S@yNpj9DMHk", "famhxukk_test") or die("Connection Failed");

// SQL query to create the 'students' table
$query_create_table = "
    CREATE TABLE IF NOT EXISTS students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        student_name VARCHAR(255) NOT NULL,
        age INT NOT NULL,
        city VARCHAR(255) NOT NULL
    )
";

// Execute the query
mysqli_query($conn, $query_create_table);

// Sample data to insert
$sample_data = [
    ['John Doe', 20, 'New York'],
    ['Jane Smith', 22, 'Los Angeles'],
    ['Bob Johnson', 21, 'Chicago'],
    ['Alice Williams', 23, 'San Francisco']
];

?>
