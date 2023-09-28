<?php
require('../backend/index.php');

if (isset($_POST['cac_basic_name_verification_btn'])) {
    if (
        isset($_POST['company_name'])
    ) {

        $company_name = $_POST['company_name'];

        $data =  [
            "company_name" => $company_name
        ];

        // echo var_dump($data); exit();

        $cac_basic_name_verification_fn = cac_basic_name_verification($data);

        // $decode_cac_basic_name_verification_fn = json_decode($cac_basic_name_verification_fn);

        print_r(($cac_basic_name_verification_fn));

        // if ($decode_cac_basic_name_verification_fn->status === TRUE) {
        //     $cac_basic_name_verification_success_message = $decode_cac_basic_name_verification_fn->detail ;

        //     $cac_basic_name_verification_success_data = $decode_cac_basic_name_verification_fn;
        // }

        // if ($decode_cac_basic_name_verification_fn->status === FALSE) {
        //     $cac_basic_name_verification_error_message = $decode_cac_basic_name_verification_fn->detail;
        // }
    }
}


?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <title>IdentityPass CAC Basic with Name Verification CakePHP Implementation</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-12 col-md-12 col-lg-12 my-3">
                <h2 class="my-3 text-center">ApiKodes IdentityPass API implementations (Verify CAC Basic with Name)</h2>

                <div class="">
                    <?php
                    if (isset($cac_basic_name_verification_success_message)) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $cac_basic_name_verification_success_message ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <div class="container-fluid">
                            <table class="table table-responsive table-fluid">
                                <thead>
                                    <th colspan="2"> CAC Basic Verification Result </th>
                                </thead>
                                
                                <tr>
                                    <th>RC Number: </th>
                                    <td>
                                        <?= ucwords($cac_basic_name_verification_success_data->data->rc_number); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Company Name: </th>
                                    <td>
                                        <?= ucfirst($cac_basic_name_verification_success_data->data->company_name); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>State: </th>
                                    <td>
                                        <?= ucfirst($cac_basic_name_verification_success_data->data->state); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Company Address: </th>
                                    <td>
                                        <?= ucfirst($cac_basic_name_verification_success_data->data->company_address); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Company Status: </th>
                                    <td>
                                        <?= strtolower($cac_basic_name_verification_success_data->data->company_status); ?>
                                    </td>
                                </tr>
                               
                                <tr>
                                    <th>Email Address: </th>
                                    <td>
                                        <?= strtolower($cac_basic_name_verification_success_data->data->email_address); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>City: </th>
                                    <td>
                                        <?= strtolower($cac_basic_name_verification_success_data->data->city); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Branch Address: </th>
                                    <td>
                                        <?= strtolower($cac_basic_name_verification_success_data->data->branchAddress); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Local Government Area: </th>
                                    <td>
                                        <?= strtolower($cac_basic_name_verification_success_data->data->lga); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Registration Date: </th>
                                    <td>
                                        <?= strtolower($cac_basic_name_verification_success_data->data->registrationDate); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Directors: </th>
                                    <td>
                                        <?=json_encode($cac_basic_name_verification_success_data->data->directors);?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Search Score: </th>
                                    <td>
                                        <?= strtolower($cac_basic_name_verification_success_data->data->searchScore); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Company Type: </th>
                                    <td>
                                        <?= strtolower($cac_basic_name_verification_success_data->data->company_type); ?>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <th>Verification Status: </th>
                                    <td>
                                        <?= strtolower($cac_basic_name_verification_success_data->verification->status); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Reference: </th>
                                    <td>
                                        <?= strtolower($cac_basic_name_verification_success_data->verification->reference); ?>
                                    </td>
                                </tr> -->
                            </table>
                        </div>
                        </hr>
                    <?php
                    } else {
                    ?>

                        <?php
                        if (isset($cac_basic_name_verification_error_message)) {
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= $cac_basic_name_verification_error_message ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                        }
                    }
                    ?>

                    <div class="alert alert-info py-auto">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col">
                                        <p class=""><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-exclamation-circle mx-2" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                            </svg>Here are the test credentials </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <p> RC Number: 092932 </p>
                                <p> Company Name: TEST COMPANY</p>
                            </div>
                        </div>
                    </div>


                </div>
                <form method="POST" action="" class="px-3">
                    <div class="form-group my-2">
                        <label for="company_name">CAC Company Name: </label>
                        <input name="company_name" class="form-control form-input" placeholder="Enter CAC Company Name" type="text" required />
                    </div>

                    <div class="form-submit">
                        <button class="btn btn-primary" name="cac_basic_name_verification_btn" type="submit"> Submit </button>
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