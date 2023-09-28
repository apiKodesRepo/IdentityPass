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

        $phone_verification_fn = phone_advance_verification($data);

        $decode_phone_verification_fn = json_decode($phone_verification_fn);

        // print_r(($decode_phone_verification_fn));

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
                <h2 class="my-3 text-center">ApiKodes IdentityPass API implementations (Verify Phone Number - Advance)</h2>

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
                                    <th colspan="2"> Advance Phone Verification Result </th>
                                </thead>
                                
                                <tr>
                                    <th>Employment Status: </th>
                                    <td>
                                        <?= ucwords($phone_verification_success_data->data->employmentstatus); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Gender: </th>
                                    <td>
                                        <?= ucfirst($phone_verification_success_data->data->gender); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Height: </th>
                                    <td>
                                        <?= ucfirst($phone_verification_success_data->data->heigth); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Marital Status: </th>
                                    <td>
                                        <?= ucfirst($phone_verification_success_data->data->maritalstatus); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Title: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->title); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Birth Country: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->birthcountry); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Birth Date: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->birthdate); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Birth LGA: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->birthlga); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Birth State: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->birthstate); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Education Level: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->educationallevel); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email Address: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->email); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>First Name: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->firstname); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Middle Name: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->middlename); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Surname: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->surname); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Owner Spoken Language: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->ospokenlang); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Photo: </th>
                                    <td>
                                        <img src="<?= decode_base64_image($phone_verification_success_data->data->photo); ?>" class="img img-fluid img-responsive" style="height:100px; width:100px;" alt="Image for the NIN" />

                                    </td>
                                </tr>
                                <tr>
                                    <th>National Identification Number: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->nin); ?>
                                    </td>
                                </tr>
                                <hr/>
                                <tr>
                                    <th>Next of Kin Address 1: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->nok_address1); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin Address 2: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->nok_address2); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin Surname: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->nok_surname); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin First Name: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->nok_firstname); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin Middle Name: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->nok_middlename); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin Local Government Area: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->nok_lga); ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>Next of Kin Postal Code: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->nok_postalcode); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin State: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->nok_state); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin Town: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->nok_town); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin Spoken Language: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->spoken_language); ?>
                                    </td>
                                </tr>
                                

                                <tr>
                                    <th>Parent First Name: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->pfirstname); ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>Parent Middle Name: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->pmiddlename); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Parent Surname: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->psurname); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Profession: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->profession); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Religion: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->religion); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Residence Address: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->residence_address); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Residence Town: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->residence_town); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Residence LGA: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->residence_lga); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Residence State: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->residence_state); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Residence Status: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->residencestatus); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>LGA of Origin: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->self_origin_lga); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Place of Origin: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->self_origin_place); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>State of Origin: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->self_origin_state); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Signature: </th>
                                    <td>
                                        <img src="<?= decode_base64_image($phone_verification_success_data->data->signature); ?>" class="img img-fluid img-responsive" style="height:100px; width:100px;" alt="Image for the NIN" />

                                    </td>
                                </tr>

                                <tr>
                                    <th>Phone Number: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->telephoneno); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Tracking ID: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->data->trackingId); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Verification Status: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->verification->status); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Reference: </th>
                                    <td>
                                        <?= strtolower($phone_verification_success_data->verification->reference); ?>
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