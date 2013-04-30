<!DOCTYPE html>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>untitled</title>
        <style type="text/css" media="screen">
            label{display:block;}
        </style> 
    </head>
    <body>

<table border="0" cellpadding="5" cellspacing="5">

<?php

foreach($records as $record)
    {

    
   
        echo "<tr><td><strong>Event Type:</strong></td>\n" ;
        echo "<td><strong>" . $record["type"] . "</strong></td>\n";
        echo "</tr>\n";	
    
        echo "<tr><td><strong>Event Date:</strong></td>\n" ;
	echo "<td>" . $record["date"] . "</td>\n";
        echo "</tr>\n";			

        echo "<tr><td><strong>Number of Guests</strong></td>\n" ;
        echo "<td>" . $record["no_guests"] . "</td>\n";
        echo "</tr>\n";			

        echo "<tr><td><strong>Event Start Time</strong></td>\n" ;
        echo "<td>" . $record["start_time"] . "</td>\n";
        echo "</tr>\n";
        
        echo "<tr><td><strong>Event Finishing Time</strong></td>\n" ;
        echo "<td>" . $record["end_time"] . "</td>\n";
        echo "</tr>\n";
        
        echo "<tr><td><strong>Additional Notes</strong></td>\n" ;
        echo "<td>" . $record["notes"] . "</td>\n";
        echo "</tr>\n";
        
}
?>
</table>
</body>
</html>