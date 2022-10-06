<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Down & Feather - Contact Form</title>
</head>

<body>
    Inquiry from: {{ $firstName }} {{ $lastName }}
    <p> Email: {{ $email }} </p>
    <p> Phone: {{ $tel }} </p>
    <p> Message: {{ $comment }} </p>
</body>

</html>