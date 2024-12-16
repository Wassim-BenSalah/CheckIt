<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/login.css">
    <title>Inscription</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="{{ route('create') }}" id="createFormID" method="post">
                @csrf
                <h1>LEONI</h1>
                <input type="text" placeholder="Nom" name="nom" />
                <input type="text" placeholder="Prénom" name="prenom" />
                <input type="text" placeholder="Matricule" name="matricule" />
                <input type="email" placeholder="Adresse Mail" name="email" />
                <label>
                    <input type="radio" name="role" value="admin" />
                    Admin
                </label>
                <label>
                    <input type="radio" name="role" value="technicien" />
                    Technicien
                </label>
            </form>
        </div>
    </div>
</body>
</html>
