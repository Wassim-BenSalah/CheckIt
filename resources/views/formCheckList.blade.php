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
        <div class="form-container">
            <form action="{{ route('checklists.store') }}" method="post" id="createChecklistForm" enctype="multipart/form-data">
                @csrf
                <div class="modal fade text-left" id="ModalformCheckList" enctype="multipart/form-data" tabindex="-1">
                <h1>LEONI</h1>
                <select name="salleID" id="salleID">
                    <option value="" disabled selected>-- Sélectionnez une salle --</option>
                    @foreach ($availableRooms as $salle)
                        <option value="{{ $salle->salleID }}">{{ $salle->salleID }}</option>
                    @endforeach
                </select>

                <table>
                    <tr>
                        <th>Test</th>
                        <th>Vérifié</th>
                        <th>Non vérifié</th>
                    </tr>
                    <tr>
                        <td>Test Température</td>
                        <td><input type="radio" name="test_temperature" value="verified" /></td>
                        <td><input type="radio" name="test_temperature" value="not-verified" /></td>
                    </tr>                        
              
                </tr>

                    <tr>
                        <td>Test Backbone</td>
                        <td><input type="radio" name="test_backbone" value="verified" /></td>
                        <td><input type="radio" name="test_backbone" value="not-verified" /></td>
                    </tr>

                    <tr>
                        <td>Test d'onduleur</td>
                        <td><input type="radio" name="test_onduleur" value="verified" /></td>
                        <td><input type="radio" name="test_onduleur" value="not-verified" /></td>
                    </tr>
                    <tr>
                        <td>Test Propretée</td>
                        <td><input type="radio" name="test_proprete" value="verified" /></td>
                        <td><input type="radio" name="test_proprete" value="not-verified" /></td>
                    </tr>

                </table>                        
                <input type="file" name="imageTestTemperature">
                <input type="file" name="imageTestBackbone">
                <input type="file" name="imageTestOnduleur">
                <input type="file" name="imageTestProprete">
                
            </div>
            </form>
        </div>
    </div>
</body>
</html>
