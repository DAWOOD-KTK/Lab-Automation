<?php
include 'db.php';

// Products table se id + image uthao
$result = mysqli_query($conn, "SELECT id, image FROM products");

while ($row = mysqli_fetch_assoc($result)) {

    $oldName = trim($row['image']);
    if ($oldName === '') continue;

    // ✅ CORRECT IMAGE PATH
    $oldPath = dirname(__DIR__) . "/assets/images/" . $oldName;

    // Agar file hi nahi mil rahi to skip
    if (!file_exists($oldPath)) {
        continue;
    }

    // Filename clean karo
    $newName = preg_replace('/[^a-zA-Z0-9._-]/', '_', $oldName);
    $newName = strtolower($newName);

    // Agar change required hai
    if ($oldName !== $newName) {

        rename(
            $oldPath,
            dirname(__DIR__) . "/assets/images/" . $newName
        );

        mysqli_query(
            $conn,
            "UPDATE products 
             SET image = '" . mysqli_real_escape_string($conn, $newName) . "' 
             WHERE id = '" . $row['id'] . "'"
        );
    }
}

echo "✅ Images renamed and database updated successfully";
