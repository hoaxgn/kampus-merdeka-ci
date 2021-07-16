<?php
session_start();

$captcha = $_POST['captcha'];

// jika captcha tidak kosong
if (!empty($captcha)) {

    // jika captcha sesuai dengan image
    if ($captcha == $_SESSION['captcha']) {
        $response = array(
            'error' => false,
            'message' => 'Captcha valid'
        );

        // jika captcha tidak sesuai dengan image
    } else {
        $response = array(
            'error' => false,
            'message' => 'Captcha invalid'
        );
    }

    // jika captcha kosong
} else {
    $response = array(
        'error' => false,
        'message' => 'Please enter captcha'
    );
}

// buat response berupa JSON
echo json_encode($response);
