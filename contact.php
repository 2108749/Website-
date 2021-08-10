<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="Z4.CSS">

</head>

<body>
    <header>
        <div class="banner">
            <nav>
                <div class="banner_content">
                    <ul>
                        <li><button><a href="index.html">Home</a></button></li>
                        <li><button><a href="Information.html">Information</a></button></li>
                        <li><button><a href="about.html">About us</a></button></li>
                        <li><button><a href="Contact.php">Contact</a></button></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="contact-form">
            <form id="contact-form" method="post" action="form-handler.php">
                <input name="name" type="text" class="form-control" placeholder="Your name" required>
                <br>
                <input name="email" type="email" class="form-control" placeholder="Your email" required>
                <br>
                <textarea name="message" class="form-control" placeholder="message" rows="4" required></textarea>
                <BR>
                <input type="submit" class="form-control submit" value="Submit">
            </form>
        </div>

    </main>
</body>

</html>