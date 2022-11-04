<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8"/>

<?php

   $dz=fopen("daten.csv","a");
        if(!$dz)
          {
            echo "Datei konnte nicht zum Schreiben geöffnet werden.";
            exit;
          }

    fputs($dz,$_POST["datum"].";".$_POST["uhr"].";".$_POST["menge"].";\n");

        echo "Ihre Eingaben wurden gespeichert.";

    fclose($dz);

?>

<p> Zurück zum Eingabeformular<a href="/Mahlzeiten/indexqay123.html">Adress-Eingabe-Formular</a>
