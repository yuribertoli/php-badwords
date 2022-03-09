<?php

/* indico una frase di partenza */
$phrase = "Why should we go and fight for them? Why don't the politicians go and fuck themselves?";

# concateno il numero di caratteri della frase con del testo esplicativo
$lengthphrase = ' La frase ha: ' . strlen($phrase) . ' ' . "caratteri";

// creo un parametro GET definito in una variabile
$parolaccia = $_GET['censura'];

/* definisco cosa scrivere al posto della parola da censurare */
$parola_censurata = "***";

/* rimpiazzo il valore indicato dall'utente con degli asterischi dentro la frase, poi salvo tutto dentro una variabile */
$censored_phrase = "La frase censurata è: " . str_replace($parolaccia, $parola_censurata, $phrase);

?>

<!-- stampo a schermo la prima frase -->
<h2>
    <?php echo $phrase ?>
</h2>

<!-- stampo a schermo il risultato della concatenazione -->
<span>
    <?php echo $lengthphrase ?>
</span>

<!-- stampo a schermo la frase censurata -->
<h2>
    <?php echo $censored_phrase ?>
</h2>