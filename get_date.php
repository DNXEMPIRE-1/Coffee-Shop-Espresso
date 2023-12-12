<?php

require_once "config.php";

$stmt = $conn->prepare("SELECT date(date) as x, count(order_id) as y FROM orders GROUP BY x");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>