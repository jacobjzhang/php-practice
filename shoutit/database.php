<?php
// Connecting to MySQL database
$con = mysqli_connect("localhost", "jacobjzhang", "", "shoutit");

// Test Connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL ".mysqli_connect_error();
} else {
    echo "All good here, connected and ready to go.";
}