<?php
header('Content-Type: application/json; charset=utf-8');

// Display errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set the database credentials based on the domain
if ($host === 'www.cymetrixsoft.com') {
    // Database credentials for https://www.cymetrixsoft.com
    $mysqli = new mysqli("localhost", "cymetrix_drup223", "8J8bp)vS6!", "cymetrix_production_db");
} elseif ($host === 'drupal.cymetrixsoft.com') {
    // Database credentials for https://drupal.cymetrixsoft.com
    $mysqli = new mysqli("localhost", "cymetrix_drup223", "8J8bp)vS6!", "cymetrix_drup223");
} else {
    // Handle error if the domain doesn't match any known configuration
    die("Unknown domain. Database connection not established.");
}

// Check for connection errors
if ($mysqli->connect_error) {
    die("Database connection failed: " . $mysqli->connect_error);
}

// Ensure proper character encoding
$mysqli->set_charset('utf8');

// Query to fetch rows containing href without trailing slash
$query = "SELECT entity_id, body_value FROM drgv_node__body WHERE body_value LIKE '%href=\"%/%\"%' LIMIT 10";
$result = $mysqli->query($query);

if (!$result) {
    die("Query failed: " . $mysqli->error);
}

while ($row = $result->fetch_assoc()) {
    
    var_dump($row);
    
    $id = $row['entity_id'];
    $body_value = $row['body_value'];

    // Modify body_value to append trailing slash where needed
    $updated_body_value = preg_replace_callback(
        '/href="([^"]*[^\/])"/', // Match href without trailing slash
        function ($matches) {
            return 'href="' . $matches[1] . '/"';
        },
        $body_value
    );

    // Check if the content was updated
    if ($body_value !== $updated_body_value) {
        // Update the database with the modified value
        $update_query = "UPDATE drgv_node__body SET body_value = '" . $mysqli->real_escape_string($updated_body_value) . "' WHERE entity_id = $id";

        if ($mysqli->query($update_query)) {
            echo "Updated entity_id: $id\n";
            echo "Original:\n$body_value\n";
            echo "Updated:\n$updated_body_value\n";
            echo "---------------------------------------------\n";
        } else {
            echo "Failed to update entity_id $id: " . $mysqli->error . "\n";
        }
    }
}

// Free the result set
$result->free();

// Close the database connection
$mysqli->close();
