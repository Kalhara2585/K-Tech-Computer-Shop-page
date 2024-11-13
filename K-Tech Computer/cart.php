<?php
require 'dbcon.php';

$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["price"] . "</td>
                <td>
                    <a href='delete.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this item?\");'>Remove</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<style>



table {
    width: 60%;
    margin: 20px auto;
    border-collapse: collapse;
    text-align: left;
    font-family: Arial, sans-serif;
}

table th, table td {
    padding: 12px;
    border: 1px solid #ddd;
}

table th {
    background-color: #f4f4f4;
    color: #333;
}

table tr:hover {
    background-color: #f1f1f1;
}

a {
    text-decoration: none;
    color: #007bff;
    padding: 5px 10px;
    border: 1px solid transparent;
    border-radius: 3px;
    transition: background-color 0.3s, color 0.3s;
}

a:hover {
    background-color: #f44336;
    color: #fff;
    border: 1px solid #f44336;
}
button {
    background-color: #f44336;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #d32f2f;
}
table {
    width: 60%;
    margin: 20px auto;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    background-color: #f9f9f9; /* Table background */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional shadow for visual depth */
}

table th, table td {
    padding: 12px;
    border: 1px solid #ddd;
}

table th {
    background-color: #4CAF50; /* Header background color */
    color: white;
}

table tr:nth-child(even) {
    background-color: #f2f2f2; /* Background for even rows */
}

table tr:hover {
    background-color: #f1f1f1; /* Hover effect for rows */
}

</style>