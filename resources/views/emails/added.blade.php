<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WELCOME TO VALOUR MOBILE APP</title>
</head>
<body>
    <h1>WELCOME TO VALOUR MOBILE APP</h1>
    <p>Dear {{ $user->name }},</p>
    <p>
        You have been added to valour mobile app
    </p>

    <p>
        Your username is <strong>{{ $user->email }}</strong>
    </p>

    <p>
        Your password is <strong>{{ $password }}</strong>
    </p>

    <p>
        You are very welcome to your company team
    </p>
    <p>
        Valour wishes you the best!!
    </p>
</body>
</html>
