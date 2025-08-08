<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $to = "hayaakhlq@gmail.com"; 
    $subject = "New Chauffeur Application - Pegasus Transfers";

    $message = "First Name: " . $_POST['fname'] . "\n";
    $message .= "Last Name: " . $_POST['lname'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Phone: " . $_POST['phone'] . "\n";

    $headers = "From: no-reply@pegasustransfers.com";

    
    $attachments = "";
    if (!empty($_FILES['documents']['name'][0])) {
        $boundary = md5("sanwebe");
        $headers .= "\nMIME-Version: 1.0\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\n\n";
        
        $body = "--$boundary\n";
        $body .= "Content-Type: text/plain; charset=UTF-8\n";
        $body .= "Content-Transfer-Encoding: base64\n\n";
        $body .= chunk_split(base64_encode($message));

        for ($i = 0; $i < count($_FILES['documents']['name']); $i++) {
            if ($_FILES['documents']['error'][$i] == 0) {
                $file_tmp = $_FILES['documents']['tmp_name'][$i];
                $file_name = $_FILES['documents']['name'][$i];
                $file_type = $_FILES['documents']['type'][$i];
                $file_content = chunk_split(base64_encode(file_get_contents($file_tmp)));

                $body .= "--$boundary\n";
                $body .= "Content-Type: $file_type; name=\"$file_name\"\n";
                $body .= "Content-Disposition: attachment; filename=\"$file_name\"\n";
                $body .= "Content-Transfer-Encoding: base64\n\n";
                $body .= $file_content . "\n";
            }
        }

        $body .= "--$boundary--";
    } else {
        $body = $message;
    }

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid Request";
}
?> 
