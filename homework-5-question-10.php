<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    
    if (!empty($name) && !empty($email)) {
        echo json_encode(["message" => "Thank you $name for your submission!"]);
    } else {
        echo json_encode(["message" => "Error. Please fill in all the fields."]);
    }
    exit();
}

http_response_code(404);
echo json_encode(["error" => "Not Found"]);

?>
