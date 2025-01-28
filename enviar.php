<?php
	$destino = "anabetjim12@gmail.com";
	$nombre = $_POST['fullname'];
		$correo =$_POST['email'];
			$telefono = $_POST['phone'];
				$mensaje = $_POST['message'];
					$contenido = "fullname:" .$nombre."\nemail:" .$correo."\nphone:".$
						$telefono."\nmessage:" .$mensaje;
	mail($destino, "contacto pag", $contenido);
	echo'<script type="text/javascript">
    alert("Mensaje enviado");
    window.location.href="contacto.html";
    </script>';
?>