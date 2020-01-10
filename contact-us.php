<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/contact-us.css">
</head>
<body>
<?php require_once "./Fragments/header.php" ?>
    <main>
    <form class="form">
        <section class="form-container">
            <h1 class="text-center">Send us a message</h1>
            <div class="form-group">
                <label for="name">Fullname: </label>
                <input type="text" placeholder="Enter your fullname" name="fullname">
            </div>
            <div class="form-group">
                <label for="email">Email Address: </label>
                <input type="email" name="email" id="email" placeholder="Enter your email address">
            </div>
            <div class="form-group">
                <label for="num">Phone Number: </label>
                <input type="tel" name="num" id="num" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
                <label for="message">Message: </label>
                <textarea name="message" id="message" placeholder="Enter your message here" cols="30" rows="5"></textarea>
            </div>

            <button class="submit">Send message</button>
        </section>
    </form>

<?php require_once "./Fragments/footer.php" ?>
</body>
</html>