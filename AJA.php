<?php
 $firstName = "Janusz"; 
 $lastName = "Kowal";
echo "Imię i nazwisko: $firstName $lastName";


//heredoc

echo "<br>";

$data = <<< DATA
Imię: $firstName <br>
Nazwiso: $lastName
<hr>
DATA;
echo $data;
//nowdoc
?>