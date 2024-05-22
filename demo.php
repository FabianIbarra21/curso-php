<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch,CURLOPT_RETURNTRANSFER, TRUE);
/* Ejecutar la petición
y guardamos  el resultado
*/
$result = curl_exec($ch);
// una alternativa sería utilizar file_get_contents
//$result = file_get_contents(API_URL); // si solo quieres hacer un GET de una API
$data = json_decode($result,true);

curl_close($ch);
?>

<head>
<meta charset="UTF-8"/>
<title>La próxima película de Marvel</title>
<meta name="description" content="La proxima película de Marvel"/>
<meta name="viewport"content="width=device-width, initial-scale=1.0"/>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"/>
</head>

<main>
    <h2>La próxima película de Marvel</h2>
</main>


<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>