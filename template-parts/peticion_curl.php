<?php
// Asegúrate de que solo se pueda acceder mediante POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST["usuario"])) {
    http_response_code(400); // Bad Request
    echo json_encode(['error' => 'Petición no válida.']);
    exit;
}

// 1. Recibir y sanitizar el dato
$usuario = addslashes(htmlspecialchars(trim($_POST["usuario"])));
$data = array('folio' => $usuario);

// 2. Configuración del cURL
$curl_url = "10.3.27.219/public/index.php/Plataforma/mi_comunidad";
$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2OTE1MjExNTAsImRhdGEiOnsiZm9saW8iOjU4Mjc3NSwiYXNzaWduZWQiOiJzYW1pZSAtIG1vb2RsZSIsImNyZWF0ZWRCeSI6ImVyaWNrLmJhZGlsbG9AcHJlcGFlbmxpbmVhLnNlcC5nb2IubXgifX0.Y4U7HS3R1Au6T4boKybZTIAnXczNoYFca1qPZOAdsy0";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $curl_url);
curl_setopt($ch, CURLOPT_POST, 1);
// Para enviar un array como datos POST a una API, es mejor convertirlo a formato urlencoded
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $token,
    'Content-Type: application/x-www-form-urlencoded' // Indica el tipo de contenido que estás enviando
));
$json_respuesta = curl_exec($ch);
curl_close($ch);

// 3. Devolver la respuesta JSON de la API directamente
// Nota: La decodificación y manejo del resultado se hace en JavaScript (punto 1).
// Simplemente devolvemos el JSON que recibimos de la API.
header('Content-Type: application/json');
echo $json_respuesta;

?>