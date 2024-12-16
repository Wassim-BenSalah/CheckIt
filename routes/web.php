<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\checklistmensuelController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\CreatePasswordController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::post('/mark-all-notifications-read', [NotificationController::class, 'markAllAsRead']);
    Route::get('/notifications', [NotificationController::class, 'getNotifications']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/fetch-profile', [ProfileController::class, 'fetchProfileData'])->name('fetch-profile');
    Route::get('/edit', [EditController::class, 'index'])->name('edit');
    Route::post('/create', [EditController::class, 'register'])->name('create');

    Route::get('/formCheckListMensuel', [checklistmensuelController::class, 'showCheckListMensuelForm'])->name('formCheckListMensuel');
    Route::post('formCheckListMensuel', [checklistmensuelController::class, 'remplirFormMensuel'])->name('checklistsMensuel.store');
    Route::get('/CheckListMensuelle', [checklistmensuelController::class, 'index'])->name('CheckListMensuelle');

    Route::get('/checklists', [ChecklistController::class, 'index'])->name('checklists');
    Route::post('/checklists/store-checklist', [ChecklistController::class, 'storeCheckList'])->name('checklists.store');
    Route::get('/createSalle',[ChecklistController::class,'getSalle'])->name('createSalle');
    Route::post('/createSalle/store-salle', [ChecklistController::class, 'storeSalle'])->name('salle.store');
    Route::delete('/checklists/{id}', [ChecklistController::class, 'destroy'])->name('checklists.destroy');
    Route::get('/checklists/{id}', [ChecklistController::class, 'show'])->name('checklists.show');

    Route::delete('/checklistsMensuel/{id}', [ChecklistMensuelController::class, 'destroy'])->name('checklistsMensuel.destroy');
    Route::post('/edit/{matricule}/toggle/{etat}', [EditController::class, 'toggleUser'])->name('users.toggle');
    Route::put('/update/{matricule}', [EditController::class, 'update'])->name('update');
    Route::get('/checklistsMensuel/{id}', [checklistmensuelController::class, 'show'])->name('checklistsMensuel.show');
});

// Authentication routes
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::get('/login/create-psw', [CreatePasswordController::class, 'index'])->name('createpsw');
Route::put('/login/create-psw', [CreatePasswordController::class, 'store'])->name('createpsw.store');
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::put('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
