<?php

$sql = "DELETE * FROM fs_products WHERE id = $id";

$do = $conn->prepare($sql);

$res = $results->execute();



?>
