<!DOCTYPE html>
<html leng="it">
<?php session_start(); ?>
    <head>
        <title>Sito Web con Database</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body{
                font-family: Arial, sans-serif;
                margin: 0;
                background-color: #f0f0f0;
                align-items:center;
            }
            .title-div{
                background-color: #333;
                color: white;
                padding: 10px;
                text-align: center;
                position: relative;
                border-radius: 20px;
                margin: 10px;
            }
            .title{
                font-size: 25px;
                cursor: default;
            }
            .websiteBody{
                position:relative;
                margin: 1rem;
            }
            .body-text b{
                background-color: #bbb;
                padding: 0px 5px 0px 5px;
                border-radius: 5px;
            }
            .body-divBtn{
                display:flex;
                margin-top:2rem;
                margin-bottom:2rem;
                justify-content: center;
                align-items: center;
                gap: 1rem;
            }
            .body-logBtn{
                position:relative;
                background-color: #333;
                color: white;
                font-size: 20px;
                border-radius: 10px;
                border: 3px solid black;
                padding: 5px 30px;
                text-align:center;
            }
            .body-prevPageBtn{
                position:relative;
                background-color: #333;
                color: white;
                font-size: 20px;
                border-radius: 10px;
                border: 3px solid black;
                padding: 5px 20px;
                text-align:center;
                text-decoration: none;
            }
            .body-logBtn:hover{
                cursor: pointer;
                background-color: #222;
                scale:1.03;
            }
            .body-prevPageBtn:hover{
                cursor: pointer;
                background-color: #222;
                scale:1.03;
            }
            .page{
                background-color: rgba(0,0,0,0.5);
                position: fixed;
                display: none;
                justify-content: center;
                height: 100%;
                width: 100%;
                margin-top:0;
                top:0;
                text-align:center;
            }
            .login-div{
                position: relative;
                height: 350px;
                width: 500px;
                background-color: white;
                padding: 20px;
                border-radius: 20px;
                margin: 10px;
                margin-top:100px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                text-align: center;
            }
            .login_div p{
                margin:0;
                padding:0;
            }
            .errorLabel-login{
                display: none;
                color: red;
                font-size: 20px;
                margin: 0;
            }
            .login-div form{
                display:flex;
                flex-direction: column;
                text-align: left;
            }
            .login-div label{
                margin: 10px;
                font-size: 20px;
                font-weight: bold;
            }
            .login-div input[type="text"], input[type="password"]{
                font-size: 20px;
                padding: 5px;
                font-size: 20px;
                border-radius: 10px;
                border: 1px solid #333;
                margin-bottom: 10px;
                width: 85%;
                align-self: center;
            }
            .submitBtn{
                width: 200px;
                font-size: 20px;
                padding: 5px;
                font-size: 20px;
                border-radius: 10px;
                border: 1px solid #333;
                margin-top: 20px;
                margin-bottom: 40px;
                background-color: #333;
                color: white;
                cursor: pointer;
                align-self: center;
                transition: all 0.3 ease;
            }
            .submitBtn:hover{
                background-color: #222;
                scale: 1.03;
                transition: all 0.3 ease;
            }
            .registrazione-div{
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 0.5rem;
            }
            .registrazione-div a{
                color: #333;
                font-size: 18px;
                cursor: default;
            }
            .regBtn{
                text-decoration: underline;
            }
            .regBtn:hover{
                cursor: pointer;
            }

            .page2{
                background-color: rgba(0,0,0,0.5);
                position: fixed;
                display: none;
                justify-content: center;
                height: 100%;
                width: 100%;
                margin-top:0;
                top:0;
                text-align:center;
            }
            .registration-div{
                position: relative;
                height: 540px;
                width: 500px;
                background-color: white;
                padding: 20px;
                border-radius: 20px;
                margin: 10px;
                margin-top:100px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                text-align: center;
            }
            .errorLabel-reg{
                display: none;
                color: red;
                font-size: 18px;
                margin: 0;
            }
            .registration-div form{
                display:flex;
                flex-direction: column;
                text-align: left;
            }
            .registration-div label{
                margin: 3px;
                font-size: 18px;
                font-weight: bold;
            }
            .registration-div input[type="text"], input[type="password"], input[type="number"]{
                font-size: 18px;
                padding: 5px;
                font-size: 20px;
                border-radius: 10px;
                border: 1px solid #333;
                margin-bottom: 3px;
                width: 85%;
                align-self: center;
            }
            .registration-div select{
                font-size: 18px;
                padding: 5px;
                border-radius: 10px;
                border: 1px solid #333;
                margin-bottom: 5px;
                width: 85%;
                align-self: center;
            }
            .submitBtn2{
                width: 200px;
                font-size: 18px;
                padding: 5px;
                border-radius: 10px;
                border: 1px solid #333;
                margin-top: 20px;
                margin-bottom: 15px;
                background-color: #333;
                color: white;
                cursor: pointer;
                align-self: center;
                transition: all 0.3 ease;
            }
            .submitBtn2:hover{
                background-color: #222;
                scale: 1.03;
                transition: all 0.3 ease;
            }
            .logBtn{
                text-decoration: underline;
                color: #333;
                font-size: 15px;
            }
            .logBtn:hover{
                cursor: pointer;
            }

        </style>
    </head>
    <body>
        <div class="title-div">
            <h1 class="title">Sito Web con Database</h1>
        </div>

        <div class="websiteBody">
            <div class="body-margin">
                <h2 class="body-title">SQL-Injection Resolution</h2>
                <div class="body-text">
                    <p class="text1">
                        In questa pagina invece verrà mostrato come risolvere le vulnerabilità che permettono attacco di tipo SQLi.<br>
                        <br>
                        Un primo passo per evitare attacchi di tipo SQLi è quello di integrare un "maxlength" nei campi di input, in modo da limitare la lunghezza dei dati inseriti.<br>
                        Questo permette di evitare che un attaccante inserisca input malevolo troppo lungo, limitando già così le possibilità di attacco.<br>
                        Un secondo passo fondamentale è quello di parametrizzare le query SQL, ovvero di non inserire direttamente i dati dell'utente all'interno della query.<br>
                        Questo permette di evitare che un attaccante possa inserire input malevolo all'interno della query.<br>
                        Per fare ciò è necessario salvare l'input degli utenti in variabili, controllare i caratteri speciali e poi inserirle nella richiesta SQL usando funzioni specifiche come "pg_escape_string" e "pg_query_params".<br>

                        <br>
                        Riprova ad effettuare gli attacchi in questa pagina per vedere se sono stati risolti.<br>
                    </p>
                    <p class="text2">
                        <h3> Attacchi che violano la confidenzialità </h3>
                        <u>Nel primo esempio di attacco</u> andremo a leggere le informazioni di uno specifico utente di cui sappiamo l'username ma di cui non conosciamo la password.<br>
                        Per fare ciò andremo a sfruttare la tecnica di Tautology, ovvero andremo a inserire una condizione vera all'interno della query SQL.<br>
                        Seguita dalla tecnica di End-of-line per terminare la query.<br>
                        <br>
                        Per eseguire l'attacco inserire:
                        <ul>
                            <li>come username: <b>user001</b> e come password: <b>' OR 1=1 --</b></li>
                        </ul>
                        <br>
                        <br>
                        <u>Nel secondo esempio di attacco</u> andremo invece a leggere le informazioni di tutti gli utenti nel database.<br>
                        Per fare ciò andremo a sfruttare le stesse tecniche del primo attacco, ma usando una query più complessa che permetterà di accedere per qualsiasi utente.<br>
                        <br>
                        Per eseguire l'attacco inserire:
                        <ul>
                            <li>come username: <b>' or 1=1 limit 1 offset 0 --</b> e come password qualunque cosa, per il primo utente</li>
                            <li>come username: <b>' or 1=1 limit 1 offset 1 --</b> e come password qualunque cosa, per il secondo utente</li>
                            <li>come username: <b>' or 1=1 limit 1 offset 2 --</b> e come password qualunque cosa, per il terzo utente</li>
                            <li>e così via... </li>
                        </ul>
                    </p>
                    <p class="text3">
                    <h3> Attacchi che violano la disponibilità </h3>
                    <u>Nel terzo esempio di attacco</u> andremo a cancellare l'intero database rendendo i dati inacessibili a chiunque.<br>
                    Per fare ciò andremo prima ad effettuare un attacco di tipo Inferential per ottenere il nome del database.<br>
                    Successivamente, dopo aver copiato il nome e riavviato il sito in modo da risolvere tutti gli errori, effettuare un attacco di tipo Inband con tecnica di Piggybacked per eliminare il database.<br>
                    <br>
                    Per eseguire l'attacco inserire:
                    <ul>
                        <li>come username: <b>nome'malevolo</b> e come password qualunque cosa, per generare l'errore</li>
                        <li>copiare il nome del database dall'errore e riavviare il sito</li>
                        <li>come username qualsiasi cosa e come password: <b>'; DROP TABLE usercredential; --</b>, per eliminare il database</li>
                    </ul>
                    </p>
                </div>
                <div class="body-divBtn">
                    <a href="index.php" class="body-prevPageBtn">Sito Vulnerabile</a>
                    <button class="body-logBtn" onclick="openLogin()">Login</button>
                </div>
            </div>
        </div>

        <div class="page" id="log">
            <div class="login-div">
                <p class="errorLabel-login">Account inesistente o Password sbagliata</p>
                <form method="POST" action="index2.php">
                    <input type="hidden" name="action" value="login">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" maxlength="20" required>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" maxlength="20" required>
                    <input type="submit" value="Accedi" class="submitBtn">
                </form>
                <div class="registrazione-div">
                    <a>Non hai un account?</a>
                    <a class="regBtn">Registrati</a>
                </div>
            </div>
        </div>
        <div class="page2" id="reg">
            <div class="registration-div">
                <p class="errorLabel-reg">Account già esistente</p>
                <form method="POST" action="index2.php">
                    <input type="hidden" name="action" value="register">
                    <label for="username">Username*:</label>
                    <input type="text" name="Rusername" id="username" maxlength="20" required>
                    <label for="password">Password*:</label>
                    <input type="password" name="Rpassword" id="Rpassword" maxlength="20" required>
                    <label for="password">Conferma Password*:</label>
                    <input type="password" name="Rpassword2" id="Rpassword2" maxlength="20" required>
                    <label for="firstname">Nome:</label>
                    <input type="text" name="firstname" id="firstname" maxlength="20">
                    <label for="firstname">Cognome:</label>
                    <input type="text" name="lastname" id="lastname" maxlength="20">
                    <label for="age">Età:</label>
                    <input type="number" name="age" id="age" min="0" max="200">
                    <label for="gender">Sesso:</label>
                    <select name="gender" id="gender">
                        <option value="" disabled selected></option>
                        <option value="male">Maschio</option>
                        <option value="female">Femmina</option>
                    </select>
                    <input type="submit" value="Registrati" class="submitBtn2">
                </form>
                <div><a class="logBtn">Torna al Login</a></div>
            </div>
        </div>
        
        <?php
            $dbconn = pg_connect("host=localhost port=5432 dbname=sicurezza user=postgres password=180402") 
            or die('Could not connect: ' . pg_last_error());
            // controlla che la request sia POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $typeAction = $_POST['action'];
                // controlla se l'azione è di login
                if($typeAction == 'login'){
                    $usernamelog = $_POST['username'];
                    $passwordlog = $_POST['password'];
                    
                    $query = "SELECT * FROM usercredential WHERE username = ($1) AND password = ($2)";
                    // esegue la query
                    $usernamelog = pg_escape_string($usernamelog);
                    $passwordlog = pg_escape_string($passwordlog);
                    $result = pg_query_params($dbconn, $query, array($usernamelog, $passwordlog));
                    
                    if ($result){
                        if(pg_num_rows($result) > 0){
                            // sei loggato
                            $_SESSION['user'] = $usernamelog;
                            echo"   <script>
                                        window.location.href = 'profile.php';
                                    </script>";
                        }
                        else{
                            // account inesistente
                            echo "  <script>
                                        const loginDiv11 = document.querySelector('.page');
                                        const errorLabelLog11 = document.querySelector('.errorLabel-login');
                                        loginDiv11.style.display = 'flex';
                                        errorLabelLog11.style.display = 'block';
                                    </script>";
                        }  
                    }
                    pg_free_result($result);
                }
                // controlla se l'azione è di registrazione
                else if($typeAction == 'register'){
                    $username = $_POST['Rusername'];
                    $password = $_POST['Rpassword'];
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $age = $_POST['age'];
                    if(isset($_POST['gender']))
                        $gender = $_POST['gender'];
                    else
                        $gender = 'NULL';
                    // considera i campi vuoti
                    if($firstname == '') $firstname = 'NULL';
                    if($lastname == '') $lastname = 'NULL';
                    if($age == '') $age = 'NULL';
                    // controllo caratteri speciali
                    $username = pg_escape_string($username);
                    $password = pg_escape_string($password);
                    $firstname = pg_escape_string($firstname);
                    $lastname = pg_escape_string($lastname);
                    // query di controllo
                    $querycontrollo = "SELECT * FROM usercredential WHERE username = ($1)";
                    $resultcontrollo = pg_query_params($dbconn, $querycontrollo, array($username));
                    if(pg_num_rows($resultcontrollo) > 0){
                        echo "  <script>
                                    const registrationDiv00 = document.querySelector('.page2');
                                    const loginDiv00 = document.querySelector('.page');
                                    const errorLabelReg00 = document.querySelector('.errorLabel-reg');
                                    registrationDiv00.style.display = 'flex';
                                    loginDiv00.style.display = 'none';
                                    errorLabelReg00.style.display = 'block';
                                </script>";
                    }
                    else{
                        // inserimento dati
                        $query = "INSERT INTO usercredential VALUES ($1, $2, $3, $4, $5, $6); ";
                        pg_query_params($dbconn, $query, array($username, $password, $firstname, $lastname, $age, $gender));
                    }
                    pg_free_result($resultcontrollo);
                }
            } 
            pg_close($dbconn);
        ?>

        <script>

            // gestione pagine login-registrazione-profilo
            const regBtn = document.querySelector('.regBtn');
            const logBtn = document.querySelector('.logBtn');
            const registrationDiv = document.querySelector('.page2');
            const loginDiv = document.querySelector('.page');
            const errorLabelLog = document.querySelector('.errorLabel-login');
            const errorLabelReg = document.querySelector('.errorLabel-reg');

            function openLogin(){
                loginDiv.style.display = 'flex';
                errorLabelLog.style.display = 'none';
            }

            //login->reg
            regBtn.addEventListener('click', () => {
                registrationDiv.style.display = 'flex';
                loginDiv.style.display = 'none';
                errorLabelReg.style.display = 'none';
            });
            //reg->login
            logBtn.addEventListener('click', () => {
                registrationDiv.style.display = 'none';
                loginDiv.style.display = 'flex';
                errorLabelLog.style.display = 'none';
            });

            // controlla che le password siano uguali
            const password = document.querySelector('#Rpassword');
            const password2 = document.querySelector('#Rpassword2');
            const submitBtn2 = document.querySelector('.submitBtn2');
            submitBtn2.addEventListener('click', (e) => {
                if(password.value !== password2.value){
                    e.preventDefault();
                    alert('Le password non corrispondono');
                }
            });

            // Chiudi le pagine cliccando fuori
            window.onclick = function(event) {
                if (event.target == document.getElementById('log')) {
                    loginDiv.style.display = 'none';
                    errorLabelLog.style.display = 'none';
                }
                if (event.target == document.getElementById('reg')) {
                    registrationDiv.style.display = 'none';
                    errorLabelReg.style.display = 'none';
                }
            } 

        </script>
    </body>
</html>