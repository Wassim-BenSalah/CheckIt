<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
</head>
<body>
    <h1>Password Reset</h1>
    <p>Hello {{ $user->name }},</p>
    <p>Your new password is: {{ $password }}</p>
    <p>You can use this new password to log in and change it from your profile settings.</p>
    <p>Your Matricule is: {{ $matricule }}</p>
    <p>Thank you!</p>
</body>
</html>
