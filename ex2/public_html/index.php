<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head> <title>Reservem</title>
 <link rel="stylesheet" href="estil.css">
 <?php
// Load the calendar class
require('calendar/tc_calendar.php');
 ?>
</head>
<body>
<h2>Reserves </h2>
<p>Introducció a les reserves </p>
<h3>Formulari de reserva </h3>
<p>Informació relacionada </p>
<form id="form1" method="post" action="enviar_reserva.php">
 <table cellspacing="2" cellpadding="4">
 <tr>
 <td>Nom:</td>
 <td><input name="nom" class="text" type="text" id="nom" size="25" /></td>
 </tr>
 <tr>
 <td>Email:</td>
 <td><input name="email" class="text" type="text" id="email" size="25" /></td>
 </tr>
 <tr>
 <td>Data de la visita:</td>
 <td><?php
 // Call the calendar constructor - use the desired form and format, according to the 
//instructions/samples provided on triconsole.com
 $myCalendar = new tc_calendar("date1", true);
 $myCalendar->setIcon("calendar/images/iconCalendar.gif");
 $myCalendar->setDate(date('d'), date('m'), date('Y'));
 $myCalendar->setPath("calendar/");
 $myCalendar->zindex = 150; //default 1
 $myCalendar->setYearInterval(1960, date('Y'));
 $myCalendar->dateAllow('1960-03-01', date('Y-m-d'));
 //$myCalendar->autoSubmit(true, "calendar");
 $myCalendar->disabledDay("sat");
 $myCalendar->disabledDay("sun");
 $myCalendar->setAlignment('right', 'bottom'); //optional
 $myCalendar->writeScript();
 ?>
 </td></td>
 </tr>
 <tr>
 <td>Persones</td>
 <td><input name="numero" class="texto" type="text" id="numero" size="4" /></td>
 </tr>
 <tr>
 <td>Selecciona elements </td>
 <td><label><input type="radio" name="edad" id="edad" value="5a8" /> 
 A </label>
 <br />
 <label><input type="radio" name="edad" id="edad" value="9a14" /> 
 B </label>
 <br />
 <label><input type="radio" name="edad" id="edad" value="15a184" />  C </label>
 <label><br />
 <input type="radio" name="edad" id="edad" value="adults" /> 
 D</label></td>
 </tr>
 <tr>
 <td colspan="2"><label>
 <input type="checkbox" name="aula" id="aula" /> 
 Serveis adicionals </label></td>
 </tr>
 <tr>
 <td>Observaciones:</td>
 <td>&nbsp;</td>
 </tr>
 <tr>
 <td colspan="2" style="text-align:center;">
 <textarea name="observacions" id="observacions" class="texto" cols="45" rows="5"></textarea>
 </td>
 </tr>
 <tr>
 <td colspan="2" style="text-align: right">
 <input type="submit" value="Enviar" class="boton" />
 </td>
 </tr>
 </table>
</form>
</body>
</html>