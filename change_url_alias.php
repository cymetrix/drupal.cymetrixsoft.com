<?php
// Database connection
$mysqli = new mysqli("localhost", "cymetrix_drup223", "8J8bp)vS6!", "cymetrix_drup223");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Query to get all ids and aliases from drgv_path_alias
$query = "SELECT id, alias FROM drgv_path_alias";
$result = $mysqli->query($query);

// Check if the query returned any results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $alias = $row['alias'];

        // Check if alias does not have a trailing slash
        if (substr($alias, -1) !== '/') {
            // Add the trailing slash
            $newAlias = $alias . '/';

            // Update the alias in the database
            $updateQuery = "UPDATE drgv_path_alias SET alias = ? WHERE id = ?";
            $stmt = $mysqli->prepare($updateQuery);
            $stmt->bind_param("si", $newAlias, $id);
            $stmt->execute();

            echo "Updated alias for ID $id to $newAlias\n";
        } else {
            echo "Alias for ID $id already has a trailing slash: $alias\n";
        }
    }
} else {
    echo "No aliases found in the database.\n";
}

// Close the database connection
$mysqli->close();
?>
