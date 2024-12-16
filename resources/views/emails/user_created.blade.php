<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Created</title>
</head>
<body>
    <h1>Welcome, {{ $user->prenom }} {{ $user->nom }}!</h1>
    
    <p>Your account has been successfully created with the following details:</p>
    
    <ul>
        <li><strong>Matricule:</strong> {{ $matricule }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
        <li><strong>Role:</strong> {{ $user->role }}</li>
        <li><strong>Mot de passe:</strong> {{ $password }}</li>
    </ul>
    
    <p>Thank you for joining us!</p>
</body>
</html>
