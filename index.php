<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Lixir</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <section>
        <?php require_once "./Fragments/header.php" ?>
        <main>

            <section class="row1">
                <div class="cta">
                    <h3>Innovative tech solutions with the spark of life.</h3>
                    <button><a href="project-request.php">Start A Project Now</a></button>
                </div>
                <div class="carousel1">
                    <div class="carousel1_slide active slide1">
                        <img src="images/banner.png" alt="">
                    </div>
                    <div class="carousel1_slide">
                        <img src="images/banner1.jpg" alt="">
                    </div>
                    <div class="carousel1_slide">
                        <img src="images/banner2.jpg" alt="">
                    </div>
                    <div class="carousel1_slide">
                        <img src="images/banner3.jpg" alt="">
                    </div>
                    <div class="carousel1_slide">
                        <img src="images/banner.png" alt="">
                    </div>
                    <div class="carousel1_slide">
                        <img src="images/banner3.jpg" alt="">
                    </div>
                    <div class="carousel1_slide">
                        <img src="images/banner2.jpg" alt="">
                    </div>
                    <div class="carousel1_slide">
                        <img src="images/banner1.jpg" alt="">
                    </div>
                    <div class="carousel1_slide">
                        <img src="images/banner.png" alt="">
                    </div>
                    <div class="carousel1_slide">
                        <img src="images/rectangle.jpg" alt="">
                    </div>
                    <div class="carousel1_slide">
                        <img src="images/banner.png" alt="">
                    </div>
                </div>
                <i class="fa fa-angle-left control control--left"></i>

                <i class="fa fa-angle-right control control--right"></i>
            </section>
            <section class="row2">
                <div class="log_details">
                    <article class="log_details_container">
                        <aside>
                            <h4>100</h4>
                            <p>Customers</p>
                        </aside>
                        <aside>
                            <h4>93%</h4>
                            <p>Recommendations Reviews</p>
                        </aside>
                        <aside>
                            <h4>433</h4>
                            <p>Sucess Stories</p>
                        </aside>
                    </article>
                </div>
                <section class="services">
                    <h1>What We DO</h1>
                    <article>
                        <aside>
                            <img src="images/Vector (6).png" alt="software development">
                            <h4>Software Development</h4>
                            <p>We are all about software solutions,
                                we are highly skilled in the business
                                of creating Internet-based applications,
                                mobile applications, consultancy services,
                                systems integration. We believe in world-class software solutions that suit
                                organizational backlogs.</p>
                        </aside>
                        <aside>
                            <img src="images/Vector (5).png" alt="web Design">
                            <h4>Web Design</h4>
                            <p>Responsive and mobile web design
                                Web app UI design
                                Company and product sites
                                Website reviews</p>
                        </aside>
                        <aside>
                            <img src="images/Vector (8).png" alt="Training and Support">
                            <h4>Training and Support</h4>
                            <p>We train and support newbie developers
                                to become giants in the tech space, in an
                                effort to help build their dreams.</p>
                        </aside>
                        <aside>
                            <img src="images/Vector (7).png" alt="Content">
                            <h4>Content</h4>
                            <p>Content strategy,
                                Digital copywriting
                                Tone of voice. Content reviews.</p>
                        </aside>
                    </article>
                </section>

            </section>
            <section class="row3">
                <h3>Our Featured Works</h3>
                <article>
                    <div class="carousel">
                        <i class="fa fa-angle-left control control--left"></i>
                        <div class="carousel__container">
                            <div class="carousel__container__slide">
                                <div class="img_container">
                                    <img src="images/malthisi.jpg" alt="mathisi">
                                </div>
                                <p>Mathisi Mini Classroom</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, rerum!</p>
                                <a href="mathisi-classroom/index.html">View Project</a>

                            </div>
                            <div class="carousel__container__slide">
                                <div class="img_container">
                                    <img src="images/buzzdona.jpg" alt=""></div>
                                <p>Buzz Donna</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, rerum!</p>
                                <a href="">View Project</a>
                            </div>

                        </div>
                        <i class="fa fa-angle-right control control--right"></i>

                    </div>
                </article>
            </section>

            <section class="row4">
                <h3>Check Us Out</h3>
                <article>
                    <aside>
                        <img src="images/Rectangle 29.png" alt="user1">
                        <p>Kathryn Bell</p>
                        <p>Front-End Developer</p>
                    </aside>
                    <aside>
                        <img src="images/Rectangle 30.png" alt="user2">
                        <p>Jeromes Hawkins</p>
                        <p>Technical Account Manager</p>
                    </aside>
                    <aside>
                        <img src="images/Rectangle 32.png" alt="user3">
                        <p>Angel Howard</p>
                        <p>Marketting Technologist</p>
                    </aside>
                    <aside>
                        <img src="images/Rectangle 31.png" alt="user4">
                        <p>Harold Black</p>
                        <p>Data Analyst</p>
                    </aside>
                </article>
            </section>
        </main>
       <?php require_once "./Fragments/footer.php" ?>
    </section>
</body>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/main.js"></script>

</html>