<?php

$connection = new PDO("sqlsrv:Database=hcodebd;server=LAPTOP-9H600M4N\SQL;ConnectionPooling=0;", "sa", "root");

$statement = $connection->prepare("SELECT * FROM users;");

$statement->execute();

$users = $statement->fetchAll(PDO::FETCH_ASSOC);

?>