<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Team</title>
    <link rel="stylesheet" href="css/bootstrap-4.4.0-dist/css/bootstrap.min.css" />
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="css/bootstrap-4.4.0-dist/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
    <link rel="stylesheet" href="./css/team_page.css">
</head>

<body>
    <?php require_once "./Fragments/header.php" ?>

    <section class="content" style="padding: 0 7%">
        <div class="container-fluid mt-5">
            <p>
                <h3>Meet The Team</h3>
            </p>
            <div class="row row-cols-1 row-cols-md-1 mt-5 mb-5">
                <div class="card mb-5">
                    <div class="row no-gutters ">

                        <div class="col-md-2 text-center">
                            <img src="https://res.cloudinary.com/gboyega/image/upload/v1575387409/grillspot/profile-placeholder_kqu2no.png"
                                alt="profileImage" class=" card-img team-image img-responsive">
                        </div>

                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title">Watson, Wendy</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
                                    nostrum
                                    mollitia praesentium accusantium, adipisci laboriosam molestias dolore dicta.</p>
                                <p class="card-text"><button class="btn btn-secondary" id="viewMoreButton">View
                                        More</button></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card mb-5">
                    <div class="row no-gutters ">

                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title">Black, Dwight</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
                                    nostrum
                                    mollitia
                                    praesentium accusantium, adipisci laboriosam molestias dolore dicta.</p>
                                <p class="card-text"><button class="btn btn-secondary" id="viewMoreButton">View
                                        More</button></p>
                            </div>
                        </div>

                        <div class="col-md-2 text-center">
                            <img src="https://res.cloudinary.com/gboyega/image/upload/v1575387409/grillspot/profile-placeholder_kqu2no.png"
                                alt="profileImage" class=" card-img team-image img-responsive">
                        </div>

                    </div>
                </div>


                <div class="card mb-5">
                    <div class="row no-gutters ">

                        <div class="col-md-2 text-center">
                            <img src="https://res.cloudinary.com/gboyega/image/upload/v1575387409/grillspot/profile-placeholder_kqu2no.png"
                                alt="profileImage" class=" card-img team-image img-responsive">
                        </div>

                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title">Murphy, Aubrey</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
                                    nostrum
                                    mollitia
                                    praesentium accusantium, adipisci laboriosam molestias dolore dicta.</p>
                                <p class="card-text"><button class="btn btn-secondary" id="viewMoreButton">View
                                        More</button></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card mb-5">
                    <div class="row no-gutters">

                        <div class="col-md-10">
                            <div class="card-body">
                                <h5 class="card-title">Russel, Leslie</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error
                                    nostrum
                                    mollitia
                                    praesentium accusantium, adipisci laboriosam molestias dolore dicta.</p>
                                <p class="card-text"><button class="btn btn-secondary" id="viewMoreButton">View
                                        More</button></p>
                            </div>
                        </div>

                        <div class="col-md-2 text-center">
                            <img src="https://res.cloudinary.com/gboyega/image/upload/v1575387409/grillspot/profile-placeholder_kqu2no.png"
                                alt="profileImage" class=" card-img team-image img-responsive">
                        </div>

                    </div>
                </div>

            </div>

            <div aria-label="...">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled m-2"><a class="page-link" href="#">1</a></li>
                    <li class="page-item disabled m-2"><a class="page-link" href="#">2</a></li>
                    <li class="page-item disabled m-2"><a class="page-link" href="#">3</a></li>
                </ul>
            </div>

        </div>
    </section>

    <?php require_once "./Fragments/footer.php" ?>
    <script src="./js/app.js"></script>
</body>

</html>