<?php
    // prendi l'username dalla sessione attiva
    session_start();
    if (isset($_SESSION['user'])) {
        $utente=$_SESSION['user'];
        deleteUser($utente);
    }
    // crea una funzione per eliminare un utente
    function deleteUser($username) {
        $dbconn = pg_connect("host=localhost port=5432 dbname=sicurezza user=postgres password=180402") 
        or die('Could not connect: ' . pg_last_error());
        $query="DELETE FROM usercredential WHERE username = '$username'";
        pg_query($dbconn, $query);
        pg_close($dbconn);
    }
    // torna alla index
    header("Location: index.php");
?>