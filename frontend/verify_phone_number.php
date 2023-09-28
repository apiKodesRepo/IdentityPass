<?php
require('../backend/index.php');

if (isset($_POST['phone_verification_btn'])) {
    if (
        isset($_POST['phone_number'])
    ) {
        $phone_number = $_POST['phone_number'];

        $data =  [
            "number" => $phone_number
        ];

        $phone_verification_fn = phone_verification($data);

        $decode_phone_verification_fn = json_decode($phone_verification_fn);

        print_r(($decode_phone_verification_fn));

        if ($decode_phone_verification_fn->status === TRUE) {
            $phone_verification_success_message = $decode_phone_verification_fn->detail;

            $phone_verification_success_data = $decode_phone_verification_fn;
        }

        if ($decode_phone_verification_fn->status === FALSE) {
            $phone_verification_error_message = $decode_phone_verification_fn->detail;
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

    <title>IdentityPass Tax Identification Number Verification CakePHP Implementation</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-12 col-md-12 col-lg-12 my-3">
                <h2 class="my-3 text-center">ApiKodes IdentityPass API implementations (Verify Phone Number)</h2>

                <div class="">
                    <?php
                    if (isset($phone_verification_success_message)) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $phone_verification_success_message ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <div class="container-fluid">
                            <table class="table table-responsive table-fluid">
                                <thead>
                                    <th colspan="2"> Phone Verification Result </th>
                                </thead>

                                <tr>
                                    <th>First Name: </th>
                                    <td>
                                        <?= ucwords($phone_verification_success_data->data->firstName); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Middle Name: </th>
                                    <td>
                                        <?= ucfirst($phone_verification_success_data->data->middlename); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Phone Number: </th>
                                    <td>
                                        <?= ucfirst($phone_verification_success_data->data->phoneNumber); ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        </hr>
                    <?php
                    } else {
                    ?>

                        <?php
                        if (isset($phone_verification_error_message)) {
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= $phone_verification_error_message ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                        }
                    }
                    ?>

                    <!-- test credential provided  -->

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
                                <p> Number: 08082838283 </p>
                            </div>
                        </div>
                    </div>

                </div>
                <form method="POST" action="" class="px-3">
                    <div class="form-group my-2">
                        <label for="phone_number">Phone Number: </label>
                        <input name="phone_number" class="form-control form-input" placeholder="Enter phone" type="text" required />
                    </div>


                    <div class="form-submit">
                        <button class="btn btn-primary" name="phone_verification_btn" type="submit"> Submit </button>
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