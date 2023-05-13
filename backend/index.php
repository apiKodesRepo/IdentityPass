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