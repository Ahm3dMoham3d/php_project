<?php

require_once 'conn.php';

class UsersQuery
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Method to register a new user
    public function register($username, $password)
    {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and bind
        $stmt = $this->conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashedPassword);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

        // Close the statement
        $stmt->close();
    }

    public function login($username, $password)
    {
        // Prepare and bind
        $stmt = $this->conn->prepare("SELECT password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);

        // Execute the statement
        $stmt->execute();
        $stmt->store_result();

        // Check if the user exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashedPassword);
            $stmt->fetch();

            // Verify the password
            if (password_verify($password, $hashedPassword)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }

        // Close the statement
        $stmt->close();
    }
}

// Usage example
$usersQuery = new UsersQuery($conn);

// Register a new user
if ($usersQuery->register('newuser', 'password123')) {
    echo "Registration successful!";
} else {
    echo "Registration failed.";
}

// Log in a user
if ($usersQuery->login('newuser', 'password123')) {
    echo "Login successful!";
} else {
    echo "Login failed.";
}
