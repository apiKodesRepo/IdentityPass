<?php
require('../backend/index.php');

if (isset($_POST['plate_number_verification_btn'])) {
    if (
        isset($_POST['vehicle_number'])
    ) {
        $vehicle_number = $_POST['vehicle_number'];

        $data =  [
            "vehicle_number" => $vehicle_number
        ];

        $plate_number_verification_fn = plate_number_verification($data);
        
        // {
        //     "status": true,
        //     "detail": "Vehicle Verification Successful",
        //     "response_code": "00",
        //     "data": {
        //         "vehicle_number": "AAA000000",
        //         "vehicle_name": "Toyota",
        //         "vehicle_color": "BLUE"
        //     },
        //     "verification": {
        //         "status": "VERIFIED",
        //         "reference": "e4bd4641-e3a8-456a-98de-899972179e2e"
        //     }
        // }

        $decode_plate_number_verification_fn = json_decode($plate_number_verification_fn);

        if ($decode_plate_number_verification_fn->status === TRUE) {
            $plate_number_verification_success_message = $decode_plate_number_verification_fn->detail;

            $plate_number_verification_success_data = $decode_plate_number_verification_fn;

        }

        if ($decode_plate_number_verification_fn->status === FALSE) {
            $plate_number_verification_error_message = $decode_plate_number_verification_fn->detail;
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
    
    <title>IdentityPass Vehicle Plate Number Verification CakePHP Implementation</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-12 col-md-12 col-lg-12 my-3">
                <h2 class="my-3 text-center">ApiKodes IdentityPass API implementations (Verify Vehicle Plate Number )</h2>

                <div class="">
                    <?php
                    if (isset($plate_number_verification_success_message)) {
                        
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $plate_number_verification_success_message ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <!-- // {
                        //     "status": true,
                        //     "detail": "Vehicle Verification Successful",
                        //     "response_code": "00",
                        //     "data": {
                        //         "vehicle_number": "AAA000000",
                        //         "vehicle_name": "Toyota",
                        //         "vehicle_color": "BLUE"
                        //     },
                        //     "verification": {
                        //         "status": "VERIFIED",
                        //         "reference": "e4bd4641-e3a8-456a-98de-899972179e2e"
                        //     }
                        // } -->

                        <!-- {
                            "status": false,
                            "detail": "Vehicle Verification failed",
                            "response_code": "01",
                            "message": "Record not found",
                            "verification": {
                                "status": "NOT-VERIFIED",
                                "reference": "d9ef65ff-fba5-41f5-9d71-3ac6bf52b6da"
                            }
                        } -->

                        <div class="container-fluid">
                            <table class="table table-responsive table-fluid">
                                <thead>
                                    <th colspan="2"> Vehicle Plate Number Verification Result </th>
                                </thead>
                                <tr>
                                    <th>Vehicle Number: </th>
                                    <td>
                                        <?= ucwords($plate_number_verification_success_data->data->vehicle_number); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Vehicle Name: </th>
                                    <td>
                                        <?= ucfirst($plate_number_verification_success_data->data->vehicle_name); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Vehicle Color: </th>
                                    <td>
                                        <?= ucfirst($plate_number_verification_success_data->data->vehicle_color); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Verification Status: </th>
                                    <td>
                                        <?= strtolower($plate_number_verification_success_data->verification->status); ?> 
                                    </td>
                                </tr>
                                <tr>
                                    <th>Verification Reference : </th>
                                    <td>
                                        <?= strtolower($plate_number_verification_success_data->verification->reference); ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </hr>
                    <?php
                    } else {
                    ?>

                        <?php
                        if (isset($plate_number_verification_error_message)) {
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= $plate_number_verification_error_message ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <form method="POST" action="" class="px-3">
                        <div class="form-group my-2">
                            <label for="vehicle_number">Vehicle Number</label>
                            <input name="vehicle_number" class="form-control form-input" placeholder="Enter Vehicle Number" type="text" required />
                        </div>

                        <div class="form-submit">
                            <button class="btn btn-primary" name="plate_number_verification_btn" type="submit"> Submit </button>
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