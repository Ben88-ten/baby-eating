
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

.csvTable{
    font-size: 10pt;
    border-top: 1px solid #ccc;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
    color: #777;
}

.csvTable th{
    text-align:left;
    border-bottom: 1px solid #ccc;
}

.csvTable td{
    border-bottom: 1px solid #ccc;
}

</style>

<?php

$hasTitle = true;

echo '<table border="0" cellspacing="0" cellpadding="5" width="500" class="csvTable">';


$handle = fopen("daten.csv", "r");
$start = 0;
$datum = $_POST["datum"];

while (($data = fgetcsv($handle, 1000, ";")) !== FALSE)
{

    echo '<tr>' . "\n";

  for ( $x = 0; $x < count($data); $x++)
    {
    if ($start == 0 && $hasTitle == true)
        echo '<th>'.$data[$x].'</th>' . "\n";
    else
        echo '<td>'.$data[$x].'</td>' . "\n";
    }

    $start++;

    echo '</tr>' . "\n";

}

fclose($handle);

echo '</table>';

?>

<p> hier das glieche nochmal: </p>









<p> Zurück zum Eingabeformular<a href="/Mahlzeiten/indexqay123.html">Adress-Eingabe-Formular</a>
