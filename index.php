<?php

/* indico una frase di partenza */
$phrase = "Why should we go and fight for them? Why don't the politicians go and fuck themselves?";

//stampo a schermo la frase
echo $phrase;

# concateno il numero di caratteri della frase con del testo esplicativo
$lengthphrase = ' La frase ha: ' . strlen($phrase) . ' ' . "caratteri";

/* stampo a schermo il risultato della concatenazione */
echo $lengthphrase;

// creo un parametro GET definito in una variabile
$parolaccia = $_GET['censura'];

/* rimpiazzo il valore indicato dall'utente con degli asterischi dentro la frase, poi lo mostro a schermo */
echo "La frase censurata è: " . str_replace($parolaccia, "***", $phrase);

?>