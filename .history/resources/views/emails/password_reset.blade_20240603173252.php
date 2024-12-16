<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password reset</title>
</head>
<body>
    <h1>Welcome, {{ $user->prenom }} {{ $user->nom }}!</h1>

    <p>Your password has been successfully reset</p>

    <ul>
        <li><strong>Matricule:</strong> {{ $matricule }}</li>
        <li><strong>New password:</strong> {{ $password }}</li>
    </ul>

</body>
</html>
