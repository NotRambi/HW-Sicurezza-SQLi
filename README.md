# HW-Sicurezza-SQLi

## Progetto
progetto sugli attacchi di tipo SQL injection realizzato per il corso di Sicurezza Informatica presso l'Università La Sapienza di Roma

## Documentazione
index.php - pagina principale del sito, contiene il codice HTML, lo stile CSS e gli script JS. Contiene inoltre il codice PHP necessario per comunicare con il DB;

index2.php - pagina secondaria del sito, è una versione migliorata di index.php dove vengono risolte le vulnerabilità che permettono un attacco di tipo SQLi;

profilo.php - pagina del profilo a cui si accede quando si inseriscono credenziali valide di accesso o per mezzo di SQLi;

delUser.php - funzione php chiamata quando si vuole eliminare un utente dal DB;

remakeDB.php - funzione php necessaria per ricreare la tabella dopo aver effettuato l'attacco che esegue una DROP TABLE;

query_creazione_database.txt - query SQL da usare per creare il DB al primo utilizzo;

## How To Use
per eseguire questo sito è prima necessario impostare un DB con nome 'sicurezza' e poi tramite una qualsiasi versione di SQL creare e popolare le TABLE all'interno del DB usando la query nel file txt.

successivamente è necessario avviare il server php del sito usando ad esempio VsCode con l'estensione Php Server.

infine aprire il sito dalla pagina principale e seguire le istruzioni passo per passo indicate nel corpo stesso del sito per effettuare gli attacchi SQLi.

## Crediti
realizzato da Alessio Lavore
