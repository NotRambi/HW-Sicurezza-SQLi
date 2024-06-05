<!DOCTYPE html>
<html leng="it">
<?php session_start(); ?>
    <head>
        <title>Sito Web con Database</title>
        <meta charset="utf-8">
        <style>

            body{
                font-family: Arial, sans-serif;
                margin: 0;
                background-color: #f0f0f0;
                align-items:center;
            }
            .page3{
                position: fixed;
                display: flex;
                justify-content: center;
                height: 100%;
                width: 100%;
                margin-top:0;
                top:0;
                text-align:center;
            }
            .user-div{
                position: relative;
                height: 400px;
                width: 500px;
                font-size: 20px;
                background-color: white;
                padding: 20px;
                border: solid 2px black;
                border-radius: 20px;
                margin: 15px;
                margin-top:100px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                text-align: left;
            }
            .riga{
                display: flex;
                justify-content: column;
                gap: 0.5rem;
                align-items: center;
            }
            .print{
                font-weight: bold;
            }
            .rigatitolo p[class^='username-title']{
                margin-left: 30%;
            }
            .username-title{
                font-size: 25px;
                font-weight: bold;
            }
            .username-value{
                font-size: 25px;
                font-weight: bold;
                color: #333;
            }
            .user-div .buttons{
                text-align: center;
            }
            .buttons{
                margin-top: 1rem;
                display: flex;
                justify-content: center;
                gap:1rem;
            }
            .logoutBtn{
                width: 200px;
                font-size: 20px;
                padding: 5px;
                font-size: 20px;
                border-radius: 10px;
                background-color: #333;
                color: white;
                cursor: pointer;
                transition: all 0.3 ease;
            }
            .logoutBtn:hover{
                background-color: #222;
                scale: 1.03;
                transition: all 0.3 ease;
            }
            .delete-user{
                width: 200px;
                font-size: 20px;
                padding: 5px;
                font-size: 20px;
                border-radius: 10px;
                background-color: #333;
                color: white;
                cursor: pointer;
                transition: all 0.3 ease;
            }
            .delete-user:hover{
                background-color: #222;
                scale: 1.03;
                transition: all 0.3 ease;
            }

        </style>
    </head>
    <body>
        <?php
            $dbconn = pg_connect("host=localhost port=5432 dbname=sicurezza user=postgres password=180402") 
            or die('Could not connect: ' . pg_last_error());
            if (isset($_SESSION['user'])) {
                $utente=$_SESSION['user'];
                // query
                $query = "SELECT * FROM usercredential WHERE username = ($1)";
                $result = pg_query_params($dbconn, $query, array($utente));
                $row = pg_fetch_assoc($result);
                // estrazione dei dati
                $username = $row['username'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $age = $row['age'];
                $gender = $row['gender'];
                // pulizia dei dati
                $username = str_replace("''","'",$username);
                $firstname = pg_escape_string($firstname);
                $lastname = pg_escape_string($lastname);
                echo "
                    <div class='page3' id='prof'>
                        <div class='user-div'>";
                            echo "<div class='riga rigatitolo'>";
                                echo "<p class='username-title'>Benvenuto </p>"; 
                                echo "<p class='username-value'>";
                                    echo $username;
                                echo "</p>";
                            echo "</div>";
                            echo "<div class='riga'>";
                                echo "<p class='print'> Nome: </p>";
                                echo "<p class='value'>";
                                    echo $firstname;
                                echo "</p>";
                            echo "</div>";
                            echo "<div class='riga'>";
                                echo "<p class='print'> Cognome: </p>";
                                echo "<p class='value'>";
                                    echo $lastname;
                                echo "</p>";
                            echo "</div>";
                            echo "<div class='riga'>";
                                echo "<p class='print'> Età: </p>";
                                echo "<p class='value'>";
                                    echo $age;
                                echo "</p>";
                            echo "</div>";
                            echo "<div class='riga'>";
                                echo "<p class='print'> Sesso: </p>";
                                echo "<p class='value'>";
                                    echo $gender;
                                echo "</p>";
                            echo "</div>";
                            echo "
                                <div class='buttons'>
                                    <a href='index.php'><button class='logoutBtn'>Logout</button></a>
                                    <button class='delete-user'>Elimina Account</button>
                                </div>";
                    echo "
                        </div>
                    </div>";
                pg_free_result($result);
            }
            pg_close($dbconn);
        ?>
        <script>
            document.querySelector('.delete-user').addEventListener('click', function(){
                var r = confirm("Sei sicuro di voler eliminare il tuo account?");
                if (r == true) {
                    window.location.href = 'delUser.php';
                }
            });
        </script>
    </body>