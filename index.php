<?php

$conn = new \PDO("mysql:host=localhost;dbname=test","root","");
$query = "select * from `pessoa`";
$ret = $conn->query($query);
$pessoas = $ret->fetchAll(\PDO::FETCH_BOTH);
print_r($pessoas);

echo "<br><br>Mysqli:<br>";

$msqyli = new mysqli("localhost","root", "", "test");
$query = "select * from `pessoa`";
foreach($q = $msqyli->query($query) as $p){
    echo $p['nome'] . "<br>";
}