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
                                    <td>{{ $checklist->salleID }}</td>
                                </tr>
                                <tr>
                                    <th>Créé par</th>
                                    <td>{{ $user->nom }} {{ $user->prenom }}</td>
                                </tr>
                                <tr>
                                    <th>Créé le</th>
                                    <td>{{ $checklist->created_at }}</td>
                                </tr>
                                <tr>
                                    <th>Test de température</th>
                                    <td>{{ $checklist->test_temperature }}</td>
                                </tr>
                                <tr>
                                    <th>Test de backbone</th>
                                    <td>{{ $checklist->test_backbone }}</td>
                                </tr>
                                <tr>
                                    <th>Test d'onduleur</th>
                                    <td>{{ $checklist->test_onduleur }}</td>
                                </tr>
                                <tr>
                                    <th>Test de propreté</th>
                                    <td>{{ $checklist->test_proprete }}</td>
                                </tr>
                                <tr>
                                    <th>État de la salle</th>
                                    <td>{{ $checklist->salle_condition }}%</td>
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