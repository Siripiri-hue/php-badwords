<!-- Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

$text = "Io abito a New York, e pensavo al laghetto di Central Park, vicino a Central Park South. Chi sa se quando arrivavo a casa l’avrei trovato gelato, mi domandavo, e se era gelato, dove andavano le anitre? Chi sa dove andavano le anitre quando il laghetto era tutto gelato e col ghiaccio sopra. Chi sa se qualcuno andava a prenderle con un camion per portarle allo zoo o vattelapesca dove. O se volavano via.";

echo $text;
echo "<br>";
echo "La lunghezza del paragrafo è: " . strlen($text);