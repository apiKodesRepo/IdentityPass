<?php
require('../backend/index.php');

if (isset($_POST['nin_image_verification_btn'])) {
    if (
        isset($_POST['image'])
    ) {
        $image = $_POST['image'];

        $data =  [
            "image" => $image
        ];

        // print(var_dump($data));

        $nin_image_verification_fn = nin_image_verification($data);

        $decode_nin_image_verification_fn = json_decode($nin_image_verification_fn);

        // print(var_dump($decode_nin_image_verification_fn));

        if ($decode_nin_image_verification_fn->status === TRUE) {
            $nin_image_verification_success_message = $decode_nin_image_verification_fn->detail . ' - ' . $decode_nin_image_verification_fn->message;

            $nin_image_verification_success_data = $decode_nin_image_verification_fn;
        }

        if ($decode_nin_image_verification_fn->status === FALSE) {
            $nin_image_verification_error_message = $decode_nin_image_verification_fn->detail . ' - ' . $decode_nin_image_verification_fn->message;
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
    
    <title>IdentityPass NIN Image Verification CakePHP Implementation</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-12 col-md-12 col-lg-12 my-3">
                <h2 class="my-3 text-center">ApiKodes IdentityPass API implementations (Verify NIN Image)</h2>

                <div class="">
                    <?php
                    if (isset($nin_image_verification_success_message)) {
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $nin_image_verification_success_message ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <div class="container-fluid">
                            <table class="table table-responsive table-fluid">
                                <thead>
                                    <th colspan="2"> NIN Image Verification Result </th>
                                </thead>

                                <tr>
                                    <th>Birth Country: </th>
                                    <td>
                                        <?= ucwords($nin_image_verification_success_data->nin_data->birthcountry); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Date of Birth: </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->birthdate); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Birth LGA: </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->birthlga); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Birth State: </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->birthstate); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Central ID : </th>
                                    <td>
                                        <?= strtolower($nin_image_verification_success_data->nin_data->centralID); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Educational Level : </th>
                                    <td>
                                        <?= strtolower($nin_image_verification_success_data->nin_data->educationallevel); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email : </th>
                                    <td>
                                        <?= strtolower($nin_image_verification_success_data->nin_data->email); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Employment Status: </th>
                                    <td>
                                        <?= strtolower($nin_image_verification_success_data->nin_data->emplymentstatus); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>First Name : </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->firstname); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Gender: </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->gender == "m" ? "Male" : "Female"); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Height: </th>
                                    <td>
                                        <?= strtolower($nin_image_verification_success_data->nin_data->heigth); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Marital status: </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->maritalstatus); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>NIN: </th>
                                    <td>
                                        <?= strtolower($nin_image_verification_success_data->nin_data->nin); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin Address 1: </th>
                                    <td>
                                        <?= strtolower($nin_image_verification_success_data->nin_data->nok_address1); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th> Next of Kin Address 2 : </th>
                                    <td>
                                        <?= strtolower($nin_image_verification_success_data->nin_data->nok_address2); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Next of Kin firstname: </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->nok_firstname); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin Middlename: </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->nok_middlename); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin Surname: </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->nok_surname); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin LGA: </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->nok_lga); ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Next of kin postal code: </th>
                                    <td>
                                        <?= $nin_image_verification_success_data->nin_data->nok_postalcode; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin State: </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->nok_state); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin Town: </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->nok_town); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin Spoken Language: </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->nspokenlang ?? "N/A"); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Next of Kin other Spoken Language: </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->ospokenlang); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Parent firstname: </th>
                                    <td>
                                        <?= ucfirst($nin_image_verification_success_data->nin_data->pfirstname); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Photo: </th>
                                    <td>
                                        <img src="<?= decode_base64_image($nin_image_verification_success_data->nin_data->photo); ?>" class="img img-fluid img-responsive" style="height:100px; width:100px;" alt="Image for the NIN" />

                                    </td>
                                </tr>
                            </table>
                        </div>
                        </hr>
                    <?php
                    } else {
                    ?>

                        <?php
                        if (isset($nin_image_verification_error_message)) {
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= $nin_image_verification_error_message ?>
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
                                <p> Image URL : <span id="image-url"> <b>https://asset.cloudinary.com/dh3i1wodq/089761016db6dab086ca450bf2465898</b> </span></p>
                                <button class="btn-sm btn-success btn" onclick="copyToClipboard()">Copy</button>
                            </div>
                        </div>
                    </div>


                </div>
                <form method="POST" action="" class="px-3">
                    <div class="form-group my-2">
                        <label for="image">NIN Image URL: </label>
                        <input name="image" class="form-control form-input" placeholder="Enter Image URL" type="text" required />
                    </div>

                    <div class="form-submit">
                        <button class="btn btn-primary" name="nin_image_verification_btn" type="submit"> Submit </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script>
        function copyToClipboard() {
            var imageUrl = document.getElementById("image-url");
            var range = document.createRange();
            range.selectNode(imageUrl);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand("copy");
            window.getSelection().removeAllRanges();
            alert("Image URL copied to clipboard!");
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