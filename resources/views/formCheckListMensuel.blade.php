<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

</head>
<body>
    <div class="container">
            <form action={{ route('formCheckListMensuel') }} method="post" id="checkListMensuelForm">
                @csrf
                <h1>LEONI</h1>
                @if ($errors->any())
                    <div class="error-message">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                @endif
                <select name="salleID" id="salleID">
                    <option value="" disabled selected><h1>-- Sélectionnez une salle --</option>
                    @foreach ($availableRooms as $salle)
                        <option value="{{ $salle->salleID }}" class="text-gray-900 font-medium">{{ $salle->salleID }}</option>
                    @endforeach
                </select>
                
                <table>
                    <tr>
                        <th>Test</th>
                        <th>Verified</th>
                        <th>Not Verified</th>
                    </tr>
                    <tr>
                        <td>Test Transmetteur GSM</td>
                        <td><input type="radio" name="test_Transmetteur_GSM" value="verified" /></td>
                        <td><input type="radio" name="test_Transmetteur_GSM" value="not-verified" /></td>
                    </tr>
                    <tr>
                        <td>Test Sonde Thermique</td>
                        <td><input type="radio" name="test_Sonde_Thermique" value="verified" /></td>
                        <td><input type="radio" name="test_Sonde_Thermique" value="not-verified" /></td>
                    </tr>

                    
                </table>  
                <input type="file" name="imageTestGsm">
                <input type="file" name="imageTestSondeThermique">
                <label>
            </label>
            </form>
    </div>
</body>
</html>
