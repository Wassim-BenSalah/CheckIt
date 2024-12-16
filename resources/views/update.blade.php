<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier ce profil</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #eef2f7;
        }
    
        .container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            text-align: center;
        }
    
        .form-input {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
    
        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: left;
        }
    
        .radio-label {
            display: flex;
            align-items: center;
            margin-right: 10px;
            font-size: 16px;
            cursor: pointer;
        }
        
        .radio-label span {
            margin-right: 5px;
        }
    
        .radio-label input {
            margin-left: 5px;
        }
    
        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
    
        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }
    
        .radio-group {
            display: flex;
            justify-content: space-around;
            margin-bottom: 15px;
        }
        
        .role-container {
            display: flex;
            justify-content: center;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
        }



    </style>
</head>
<body>
    <div class="container">
        <form id="updateFormConfirmation" action="{{ route('update', ['matricule' => $user->matricule]) }}" method="POST">
            @csrf
            @method('PUT')
            <h1>Modifier ce profil</h1>
            <input type="hidden" name="matricule" value="${matricule}">

            <div class="form-group">
                <label class="form-label" for="prenom_${matricule}">Prénom</label>
                <input class="form-input" type="text" id="prenom" name="prenom"  autocomplete="prenom" />
            </div>

            <div class="form-group">
                <label class="form-label" for="nom_${matricule}">Nom</label>
                <input class="form-input" type="text" id="nom" name="nom"  autocomplete="nom" />
            </div>
            

            <div class="form-group">
                <label class="form-label" for="email_${matricule}">Nouvel Email</label>
                <input class="form-input" type="email" id="email" name="email"  autocomplete="email" />
            </div>

            <div class="form-group">
                <label class="form-label" style="text-align: center;">Rôle</label>
                <div class="role-container">
                    <div class="radio-group">
                        <label class="radio-label" for="role_technicien">
                            <span>Technicien</span>
                            <input type="radio" id="role_technicien" name="role" value="technicien" />
                        </label>
                        <label class="radio-label" for="role_admin">
                            <span>Admin</span>
                            <input type="radio" id="role_admin" name="role" value="admin" />
                        </label>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</body>
</html>
