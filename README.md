# progetto-cyberbelli

Non so dov'è finito tutto quello che ho scritto quando ho inserito i file, ve lo riporto qua: 

Attenti a non fare casini, in locale sul computer funzionano, ma serve provarli in locale in laboratorio. 
Se volete provarli dovete scaricare XAMPP, una volta avviato premere il tasto start su Apache e MySQL.
Da qui prendere i file che ho caricato e spostarli nell'indirizzamento htdocs di XAMPP ( una volta scaricato XAMPP basta cercare il suo nome nella barra di ricerca ed uscirà
la cartella ). 
Da li verranno interpretati tutti i file html e php che inserirete. Php per funzionare deve essere letto su un server e XAMPP serve per simularne uno. 
Proprio per questo devo provare a fare la prova a scuola, perché devo vedere se funziona in locale con il server della scuola e capire come farlo leggere online anche 
da fuori. No non basta fare il collegamento dal file config.php Fabio non funziona, anche lasciandolo fuori, la soluzione è caricare il file direttamente sul server della scuola
ma è una cosa noiosa e onerosa collegarsi da esterno e faccio prima a passare dal lab. e fare da la.
Dicevo, una volta caricati i file nella cartella htdocs, create una cartella e infilateli tutti dentro oppure lasciateli così.
Come già detto con XAMPP viene creata una simulazione di un server, che sarà accessibile da google scrivendo nella barra di ricerca 127.0.0.1 oppure localhost. 
Per visualizzare i file php basta scrivere, una volta startato tutto su XAMPP, l'indirizzo locale, cioè 127.0.0.1 oppure localhost, seguito dal percorso al file php che ha come punto di inizio la cartella, cioè leggerà solo quello che sta la dentro.
Per esempio :
127.0.0.1/form.php
oppure se create una cartella, sempre dentro la cartella htdocs :
127.0.0.1/nomecartella/form.php
Se invece eseguite :
127.0.0.1/nomecartella
Verranno eseguiti tutti i file insieme, in questo caso il file config darà problemi perché come dati tiene inseriti quelli del database della scuola e da anche problemi la riga 6. 
Per questo devo chiedere aiuto alla Giordano, anche usando i dati dati nell'esempio da lo stesso errore. Ve li riporto in seguito : 
<?php
$host = 'localhost';
$user = 'user';
$pass = 'password';
$db = 'agenda';
$con = @mysql_connect($host,$user,$pass) or die (mysql_error());
$sel = @mysql_select_db($db) or die (mysql_error());
?>



Ha tagliato la parte in cui vi dicevo che Visual Studio Code sembra più figo di Notepad++, ma l'ho praticamente appena riassunta.



