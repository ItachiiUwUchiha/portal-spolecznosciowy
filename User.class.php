<?php
class User {
static funktion Register(string $email, string $password) {
    //ponizsza funkcja odpowiada za dodanie uzytkownika do wlasniciwej tabeli w bazie danych
    //user{id INT, email Varchar (128), password Varchar(128)}
    //skonwertuj haslo do bazy danych

    //poalczenie do bazy danych 
    $db = new mysqli('localhost', 'root', '', 'friendbook');
    //kwerenda do bazy danych
    $sql = "INSERT INTO user (email, password) VALUES (?, ?)";
    //zapytanie
    $q = $db->prepare($sql);
    //podstaw dane 
    $q->bind_param("ss", $email, $passwordHash);

    //wyslij zapytanie
    $q->execute();
    //zwroc wynik rejestracji
    return $result;

}
}
?>