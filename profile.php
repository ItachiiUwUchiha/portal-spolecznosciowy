<?php

//kwerenda pobiera jeden profil z tabeli po jego id
$sql = "SELECT * FROM profile WHERE ID=?";

//polacz sie z baza danych
$db = new mysqli('localhost', 'root', '', 'friendBool');

//przygotuj kwerende do wyslania
$query = $db->prepare($sql);

//podstaw ID
$query->bind_param('i', 2);

//wykonujemy kwerende 
$query->execute();
?>