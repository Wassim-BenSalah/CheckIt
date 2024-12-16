<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .form-container h1 {
            margin-bottom: 20px;
            color: #333;
            font-size: 28px;
            letter-spacing: 1px;
        }

        .form-label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
            color: #333;
            font-size: 16px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            color: #ff0000;
            margin-top: 10px;
            text-align: left;
        }

        .error-message li {
            list-style: none;
            margin-left: -25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form id="updateFormConfirmation" action="{{ route('password.email') }}" method="POST">
                @csrf
                @method("PUT")
                <h1>Saisir votre e-mail</h1>

                <label class="form-label" for="password">E-mail</label>
                <input class="form-input" type="password" id="password" name="password" autocomplete="new-password" />
                @if ($errors->any())
                          <div>
                              @foreach ($errors->all() as $error)
                                  <p>{{ $error }}</p>
                              @endforeach
                          </div>
                      @endif
                <button type="submit" name="save">Enregistrer</button>

            </form>

        </div>
    </div>
</body>
</html>
