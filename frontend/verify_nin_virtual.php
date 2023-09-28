<?php
require('../backend/index.php');

if (isset($_POST['nin_virtual_verification_btn'])) {
    if (
        isset($_POST['virtual_nin'])
    ) {
        $virtual_nin = $_POST['virtual_nin'];

        $data =  [
            "number" => $virtual_nin
        ];

        // print(var_dump($data));

        $nin_virtual_verification_fn = nin_virtual_verification($data);

        $decode_nin_virtual_verification_fn = json_decode($nin_virtual_verification_fn);

        // print(var_dump($decode_nin_virtual_verification_fn));

        if ($decode_nin_virtual_verification_fn->status === TRUE) {
            $nin_virtual_verification_success_message = $decode_nin_virtual_verification_fn->detail . ' - ' . $decode_nin_virtual_verification_fn->message;

            $nin_virtual_verification_success_data = $decode_nin_virtual_verification_fn;
        }

        if ($decode_nin_virtual_verification_fn->status === FALSE) {
            $nin_virtual_verification_error_message = $decode_nin_virtual_verification_fn->detail . ' - ' . $decode_nin_virtual_verification_fn->message;
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
    
    <title>IdentityPass NIN virtual Verification CakePHP Implementation</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-12 col-md-12 col-lg-12 my-3">
                <h2 class="my-3 text-center">ApiKodes IdentityPass API implementations (Verify Virtual NIN)</h2>

                <div class="">
                    <?php
                    if (isset($nin_virtual_verification_success_message)) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $nin_virtual_verification_success_message ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <div class="container-fluid">
                            <table class="table table-responsive table-fluid">
                                <thead>
                                    <th colspan="2"> NIN virtual Verification Result </th>
                                </thead>

                                <tr>
                                    <th>Title: </th>
                                    <td>
                                        <?= strtolower($nin_virtual_verification_success_data->nin_data->title); ?>
                                    </td>
                                </tr>

                               
                                <tr>
                                    <th>First Name: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->firstname); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Surname: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->surname); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Middlename: </th>
                                    <td>
                                        <?= ucwords($nin_virtual_verification_success_data->nin_data->middlename); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Date of Birth: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->birthdate); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>User Id: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->userid); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Gender: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->gender == "m" ? "Male" : "Female"); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Profession: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->profession); ?>
                                    </td>
                                </tr>

                                

                                 <!--
                                "centralID": "",
                                "nok_address1": "test address 1", -->

                                <tr>
                                    <th>Telephone: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->telephoneno); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Virtual NIN: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->vnin); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Self Origin LGA: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->self_origin_lga); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Height: </th>
                                    <td>
                                        <?= strtolower($nin_virtual_verification_success_data->nin_data->heigth); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Birth State: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->birthstate); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Signature: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->signature); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Religion: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->religion); ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>Educational Level: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->educationallevel); ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>Marital Status: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->maritalstatus); ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th> Self Origin State: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->self_origin_state); ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th> Spoken Language: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->spoken_language); ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th> Tracking ID: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->trackingId); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th> Self Origin Place: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->self_origin_place); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th> Residence Town: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->residence_town); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th> Next of Kin Town: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->nok_town); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th> Residence State: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->residence_state); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th> Residence Address: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->residence_address); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th> Birth Country: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->birthcountry); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th> Parent Surname: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->psurname); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th> Parent Firstname: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->pfirstname); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th> Parent Middlename: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->pmiddlename); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Next of Kin LGA: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->nok_lga); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th> Next of Kin Address 2 : </th>
                                    <td>
                                        <?= strtolower($nin_virtual_verification_success_data->nin_data->nok_address2); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Next of Kin State: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->nok_state); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Next of Kin firstname: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->nok_firstname); ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>Next of Kin Surname: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->nok_surname); ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>Next of Address: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->nok_address1); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Next of Kin postal code: </th>
                                    <td>
                                        <?= $nin_virtual_verification_success_data->nin_data->nok_postalcode; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Other Spoken Language: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->ospokenlang); ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>Residence Status: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->residencestatus); ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>Residence Status: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->residencestatus); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Email : </th>
                                    <td>
                                        <?= strtolower($nin_virtual_verification_success_data->nin_data->email); ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>NIN : </th>
                                    <td>
                                        <?= strtolower($nin_virtual_verification_success_data->nin_data->nin); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Employment Status: </th>
                                    <td>
                                        <?= strtolower($nin_virtual_verification_success_data->nin_data->employmentstatus); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Employment Status: </th>
                                    <td>
                                        <?= strtolower($nin_virtual_verification_success_data->nin_data->employmentstatus); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Birth LGA: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->birthlga); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Residence LGA: </th>
                                    <td>
                                        <?= ucfirst($nin_virtual_verification_success_data->nin_data->residence_lga); ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>Central ID : </th>
                                    <td>
                                        <?= strtolower($nin_virtual_verification_success_data->nin_data->centralID); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Photo: </th>
                                    <td>
                                        <img src="<?= decode_base64_image($nin_virtual_verification_success_data->nin_data->photo); ?>" class="img img-fluid img-responsive" style="height:100px; width:100px;" alt="virtual for the NIN" />

                                    </td>
                                </tr>
                            </table>
                        </div>
                        </hr>
                    <?php
                    } else {
                    ?>

                        <?php
                        if (isset($nin_virtual_verification_error_message)) {
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= $nin_virtual_verification_error_message ?>
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
                                <p> TEST VIRTUAL NIN : <span id="virtual-url"> <b>AA1234567890123B</b> </span></p>
                                <button class="btn-sm btn-success btn" onclick="copyToClipboard()">Copy</button>
                            </div>
                        </div>
                    </div>


                </div>
                <form method="POST" action="" class="px-3">
                    <div class="form-group my-2">
                        <label for="virtual_nin">Virtual NIN: </label>
                        <input name="virtual_nin" class="form-control form-input" placeholder="Enter Virtual NIN" type="text" required />
                    </div>

                    <div class="form-submit">
                        <button class="btn btn-primary" name="nin_virtual_verification_btn" type="submit"> Submit </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script>
        function copyToClipboard() {
            var virtualUrl = document.getElementById("virtual-url");
            var range = document.createRange();
            range.selectNode(virtualUrl);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand("copy");
            window.getSelection().removeAllRanges();
            alert("Virtual NIN copied to clipboard!");
        }
    </script>

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