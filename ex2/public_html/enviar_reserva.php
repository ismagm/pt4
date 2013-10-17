<html>
    <body><table border="1" style="background-color: #ccccff" cellspacing="2" cellpadding="4">
<?php
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $edad = $_POST["edad"];
    $aula = $_POST["aula"];
    $observacion = $_POST["observacions"];
    $month = $_POST["date1_month"];
    $day = $_POST["date1_day"];
    $year = $_POST["date1_year"];
    
    
    
    echo("<tr><td>nom</td><td>$nom</td></tr>");
    echo("<tr><td>email</td><td>$email</td></tr>");
    echo("<tr><td>numero</td><td>$numero</td></tr>");
    echo("<tr><td>edad</td><td>$edad</td></tr>");
    echo("<tr><td>aula</td><td>$aula</td></tr>");
    echo("<tr><td>observacion</td><td>$observacion</td></tr>");
    echo("<tr><td>month</td><td>$month</td></tr>");
    echo("<tr><td>day</td><td>$day</td></tr>");
    echo("<tr><td>year</td><td>$year</td></tr>");
 
?>
          </table>
    </body>
</html>