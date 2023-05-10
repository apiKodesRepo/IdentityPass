<?php
require('../backend/index.php');

if (isset($_POST['verify_stamp_duty_btn'])) {
    if (
        isset($_POST['customer_name'])
        && isset($_POST['stamp_duty_no'])
    ) {
        $customer_name = $_POST['customer_name'];
        $stamp_duty_no = $_POST['stamp_duty_no'];

        $data =  [
            "number" => $stamp_duty_no,
            "customer_name" => $customer_name
        ];


        $verify_stamp_duty_fn = verify_stamp_duty($data);

        // {
        //     "status": true,
        //     "detail": "Stamp Duty Verification Successful",
        //     "response_code": "00",
        //     "data": {
        //         "certificate_number": "2022-0000-1111-2222",
        //         "instrument": "New Registration (Stamp Duty on Share Capital: Forms CAC2 )",
        //         "reserved_company_name": "Test Company",
        //         "consideration": "₦1000000.00",
        //         "stamp_duty_paid": "₦8000.00",
        //         "payment_reference": "AA6BCDE2FG119H7IJKL0",
        //         "beneficiary": "ORIADE WALTER",
        //         "beneficiary_tin": "Not Available Yet",
        //         "description": "Company Registration Stamp Duty Payment",
        //         "date_of_execution": "11/03/2022",
        //         "date_of_filing": "11/03/2022 12:24 PM",
        //         "issuance_date": "15/03/2022 11:41 AM"
        //     },
        //     "verification": {
        //         "status": "VERIFIED",
        //         "reference": "48e2bc6a-5055-4130-bcdb-8682d5180c77",
        //         "endpoint": "Stamp Duty"
        //     }
        // }

        $decode_verify_stamp_duty_fn = json_decode($verify_stamp_duty_fn);

        if ($decode_verify_stamp_duty_fn->status === TRUE) {
            $verify_stamp_duty_success_message = $decode_verify_stamp_duty_fn->detail;

            $verify_stamp_duty_success_data = $decode_verify_stamp_duty_fn->data;
        }

        if ($decode_verify_stamp_duty_fn->status === FALSE) {
            $verify_stamp_duty_error_message = $decode_verify_stamp_duty_fn->detail;
        }
    }
}


?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="styles.css" type="text/css" rel="stylesheet" />
    <title>IdentityPass Stamp Duty Verification CakePHP Implementation</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-12 col-md-12 col-lg-12 my-3">
                <h2 class="my-3 text-center">ApiKodes IdentityPass API implementations (Verify Stamp Duty)</h2>

                <div class="">
                    <?php
                    if (isset($verify_stamp_duty_success_message)) {
                        // {
                        //     "status": true,
                        //     "detail": "Stamp Duty Verification Successful",
                        //     "response_code": "00",
                        //     "data": {
                        //         "certificate_number": "2022-0000-1111-2222",
                        //         "instrument": "New Registration (Stamp Duty on Share Capital: Forms CAC2 )",
                        //         "reserved_company_name": "Test Company",
                        //         "consideration": "₦1000000.00",
                        //         "stamp_duty_paid": "₦8000.00",
                        //         "payment_reference": "AA6BCDE2FG119H7IJKL0",
                        //         "beneficiary": "ORIADE WALTER",
                        //         "beneficiary_tin": "Not Available Yet",
                        //         "description": "Company Registration Stamp Duty Payment",
                        //         "date_of_execution": "11/03/2022",
                        //         "date_of_filing": "11/03/2022 12:24 PM",
                        //         "issuance_date": "15/03/2022 11:41 AM"
                        //     },
                        //     "verification": {
                        //         "status": "VERIFIED",
                        //         "reference": "48e2bc6a-5055-4130-bcdb-8682d5180c77",
                        //         "endpoint": "Stamp Duty"
                        //     }
                        // }
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $verify_stamp_duty_success_message ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>


                        <div class="container-fluid">
                            <table class="table table-responsive table-fluid">
                                <thead>
                                    <th colspan="2"> Stamp Duty Verification Result </th>
                                </thead>
                                <tr>
                                    <th>Certificate Number : </th>
                                    <td>
                                        <div class="badge badge-primary"><?= strtolower($verify_stamp_duty_success_data->certificate_number); ?></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Instrument : </th>
                                    <td>
                                        <?= strtolower($verify_stamp_duty_success_data->instrument); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Reserved Company Name : </th>
                                    <td>
                                        <?= strtoupper($verify_stamp_duty_success_data->reserved_company_name); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Consideration : </th>
                                    <td>
                                        <?= strtolower($verify_stamp_duty_success_data->consideration); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Stamp duty paid : </th>
                                    <td>
                                        <?= strtolower($verify_stamp_duty_success_data->stamp_duty_paid); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Payment Reference : </th>
                                    <td>
                                        <?= strtolower($verify_stamp_duty_success_data->payment_reference); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Beneficiary : </th>
                                    <td>
                                        <?= strtolower($verify_stamp_duty_success_data->beneficiary); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Beneficiary Tin : </th>
                                    <td>
                                        <?= strtolower($verify_stamp_duty_success_data->beneficiary_tin); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Description : </th>
                                    <td>
                                        <?= strtolower($verify_stamp_duty_success_data->description); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Date of Execution : </th>
                                    <td>
                                        <?= strtolower($verify_stamp_duty_success_data->date_of_execution); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Date of Filing : </th>
                                    <td>
                                        <?= strtolower($verify_stamp_duty_success_data->date_of_filing); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Issuance Date : </th>
                                    <td>
                                        <?= strtolower($verify_stamp_duty_success_data->issuance_date); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p class="mx-auto text-center"><?= strtolower($verify_stamp_duty_success_data->verification->reference); ?> </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    <?php
                    } else {
                    ?>

                        <?php
                        if (isset($verify_stamp_duty_error_message)) {
                        ?>
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <? //$verify_stamp_duty_error_message 
                                ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <form method="POST" action="" class="px-3">
                        <div class="form-group my-2">
                            <label for="customer_name">Customer Name</label>
                            <input name="customer_name" class="form-control form-input" placeholder="Enter Customer name" type="text" required />
                        </div>
                        <div class="form-group my-2">
                            <label for="stamp_duty_no">Stamp Duty Number</label>
                            <input name="stamp_duty_no" class="form-control form-input" placeholder="Enter Stamp Duty no" type="text" required />
                        </div>

                        <div class="form-submit">
                            <button class="btn btn-primary" name="verify_stamp_duty_btn" type="submit"> Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>