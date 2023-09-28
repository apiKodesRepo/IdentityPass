<?php
require_once('../vendor/autoload.php');
require('../config.php');

// Allows you to verify a stamp duty
// function verify_stamp_duty($data)
// {
//     $curl = curl_init();

//     curl_setopt_array($curl, array(
//         CURLOPT_URL => TEST_URL . '/api/v2/biometrics/merchant/data/verification/stamp_duty',
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_ENCODING => '',
//         CURLOPT_MAXREDIRS => 10,
//         CURLOPT_TIMEOUT => 0,
//         CURLOPT_FOLLOWLOCATION => true,
//         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//         CURLOPT_CUSTOMREQUEST => 'POST',
//         CURLOPT_POSTFIELDS => json_encode($data),
//         CURLOPT_HTTPHEADER => array(
//             'x-api-key: ' . TEST_SECRET_KEY ,
//             'Content-Type: application/json'
//         ),
//     ));

//     $response = curl_exec($curl);

//     curl_close($curl);
//     return $response;
// }

function verify_stamp_duty($data)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => TEST_URL . 'api/v2/biometrics/merchant/data/verification/stamp_duty',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'x-api-key: ' . TEST_SECRET_KEY,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}


function plate_number_verification($data)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => TEST_URL . 'api/v2/biometrics/merchant/data/verification/vehicle',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'x-api-key: ' . TEST_SECRET_KEY,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

function bvn_igree_verification($data)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL =>  TEST_URL . 'api/v2/biometrics/merchant/data/verification/bvn/igree',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'x-api-key: ' . TEST_SECRET_KEY,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

function bvn_two_face_verification($data)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => TEST_URL . 'api/v2/biometrics/merchant/data/verification/bvn_w_face',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'x-api-key: ' . TEST_SECRET_KEY,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

function bvn_two_verification($data)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => TEST_URL . 'api/v2/biometrics/merchant/data/verification/bvn',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'x-api-key: ' . TEST_SECRET_KEY,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

function bvn_one_verification($data)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => TEST_URL . 'api/v2/biometrics/merchant/data/verification/bvn_validation',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'x-api-key: ' . TEST_SECRET_KEY,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

function nin_image_verification($data)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => TEST_URL . 'api/v2/biometrics/merchant/data/verification/nin/image',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'x-api-key:' . TEST_SECRET_KEY,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}


function nin_virtual_verification($data)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => TEST_URL . 'api/v2/biometrics/merchant/data/verification/nin_wo_face',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'x-api-key:' . TEST_SECRET_KEY,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

function tin_verification($data)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => TEST_URL . 'api/v1/biometrics/merchant/data/verification/tin',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'x-api-key:' . TEST_SECRET_KEY,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

function phone_verification($data)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => TEST_URL . 'api/v1/biometrics/merchant/data/verification/phone_number',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'x-api-key:' . TEST_SECRET_KEY,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

function phone_advance_verification($data)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => TEST_URL . 'api/v2/biometrics/merchant/data/verification/phone_number/advance',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'x-api-key:' . TEST_SECRET_KEY,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

function cac_basic_verification($data)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => TEST_URL . 'api/v2/biometrics/merchant/data/verification/cac',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'x-api-key:' . TEST_SECRET_KEY,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

function cac_basic_name_verification($data)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => TEST_URL . 'api/v2/biometrics/merchant/data/verification/cac_w_name',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'x-api-key:' . TEST_SECRET_KEY,
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $response;
}

function decode_base64_image($image_url)
{
    // Base64-encoded image string
    $base64Image = "data:image/png;base64," . $image_url;

    return $base64Image;
}
