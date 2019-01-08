<?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $from = 'Desde: Pangea'; 
    $to = 'nokocchi251@gmail.com'; 
    $subject = 'Nuevo mensaje de Pangea';
    $human = $_POST['human'];
			
    $body = "De: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
				
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
?>