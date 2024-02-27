<?php
require_once __CI__ . "mysql.php";

$stmt = $conn->query("SELECT id, name, price FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>