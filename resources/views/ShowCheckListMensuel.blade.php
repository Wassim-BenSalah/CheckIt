<html>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Salle</th>
                                    <td>{{ $checklistMensuel->salleID }}</td>
                                </tr>
                                <tr>
                                    <th>Créé par</th>
                                    <td>{{ $user->nom }} {{ $user->prenom }}</td>
                                </tr>
                                <tr>
                                    <th>Créé à</th>
                                    <td>{{ $checklistMensuel->created_at }}</td>
                                </tr>
                                <tr>
                                    <th>Test Transmetteur GSM</th>
                                    <td>{{ $checklistMensuel->test_Transmetteur_GSM }}</td>
                                </tr>
                                <tr>
                                    <th>Test Sonde Thermique</th>
                                    <td>{{ $checklistMensuel->test_Sonde_Thermique }}</td>
                                </tr>
                                <tr>
                                    <th>Condition de la salle</th>
                                    <td>{{ $checklistMensuel->salle_condition_mensuelle }}%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  </body>  
  </html>
