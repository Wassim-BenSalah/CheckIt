<!-- resources/views/notifications.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Notifications</h1>

    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="notification-icon">
                <i class="fas fa-exclamation-circle"></i> <!-- Icône pour l'anomalie -->
            </div>
            <div class="notification-content">
                <strong>Anomalie détectée</strong>
                <p>Une anomalie a été détectée dans la salle serveur. Veuillez vérifier immédiatement.</p>
                <small class="text-muted">Il y a 5 minutes</small>
            </div>
            <div class="notification-actions">
                <a href="/checklists" class="btn btn-primary btn-sm">Voir les détails</a>
            </div>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="notification-icon">
                <i class="fas fa-check-circle"></i> <!-- Icône pour la vérification -->
            </div>
            <div class="notification-content">
                <strong>Vérification mensuelle</strong>
                <p>La vérification mensuelle de la salle serveur a été complétée avec succès.</p>
                <small class="text-muted">Il y a 1 jour</small>
            </div>
            <div class="notification-actions">
                <a href="/checklists/monthly" class="btn btn-primary btn-sm">Voir le rapport</a>
            </div>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="notification-icon">
                <i class="fas fa-info-circle"></i> <!-- Icône pour l'information -->
            </div>
            <div class="notification-content">
                <strong>Nouvelle mise à jour</strong>
                <p>Une nouvelle mise à jour de l'application a été déployée.</p>
                <small class="text-muted">Il y a 3 jours</small>
            </div>
            <div class="notification-actions">
                <a href="/updates" class="btn btn-primary btn-sm">En savoir plus</a>
            </div>
        </li>
    </ul>
</div>
@endsection
