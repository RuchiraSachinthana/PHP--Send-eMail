
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
<div class="container">
    <form action="contact-us.php" method="POST">
        <p>
            <lable for="fullname">Full Name *:</lable>
            <input type="text" name="fullname" id="fullname" required>
        </p><p>
            <lable for="email">Email *:</lable>
            <input type="email" name="email" id="email" required>
        </p></p><p>
            <lable for="subject">Subject *:</lable>
            <input type="subject" name="subject" id="subject" required>
        </p>

    </form>
</div>
</body>
</html>