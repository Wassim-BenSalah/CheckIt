@extends('layouts.app')
@section('title') Modifier les comptes @endsection
@section('content1')
<div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
    <ul class="flex flex-col pl-0 mb-0">
      <li class="mt-0.5 w-full">
        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('dashboard') }}">
          <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2">
             
                        <line x1="18" y1="20" x2="18" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="14"></line>

            </svg>
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Tableau de bord</span>
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('checklists') }}">
          <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="12px" height="12px">
              <path d="M16,2h-.171c-.413-1.164-1.525-2-2.829-2h-2c-1.304,0-2.416,.836-2.829,2h-.171c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h8c2.757,0,5-2.243,5-5V7c0-2.757-2.243-5-5-5ZM7,17c-1.308-.006-1.308-1.994,0-2,1.308,.006,1.308,1.994,0,2Zm.667-5c-.445,0-.864-.173-1.178-.488l-1.008-.951c-.401-.379-.42-1.012-.041-1.414,.379-.402,1.012-.42,1.414-.041l.811,.766,1.64-1.59c.396-.384,1.029-.375,1.414,.022,.384,.396,.375,1.029-.022,1.414l-1.862,1.805c-.303,.304-.722,.477-1.167,.477Zm9.333,5h-6c-1.308-.006-1.307-1.994,0-2h6c1.308,.006,1.307,1.994,0,2Zm0-5h-4c-1.308-.006-1.307-1.994,0-2h4c1.308,.006,1.307,1.994,0,2Z"/>
            </svg>
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Liste de contrôle journalier</span>
        </a>
      </li>
      
      
      <li class="mt-0.5 w-full">
        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('CheckListMensuelle') }}">
          <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="12px" height="12px">
              <path d="M16,2h-.171c-.413-1.164-1.525-2-2.829-2h-2c-1.304,0-2.416,.836-2.829,2h-.171c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h8c2.757,0,5-2.243,5-5V7c0-2.757-2.243-5-5-5ZM7,17c-1.308-.006-1.308-1.994,0-2,1.308,.006,1.308,1.994,0,2Zm.667-5c-.445,0-.864-.173-1.178-.488l-1.008-.951c-.401-.379-.42-1.012-.041-1.414,.379-.402,1.012-.42,1.414-.041l.811,.766,1.64-1.59c.396-.384,1.029-.375,1.414,.022,.384,.396,.375,1.029-.022,1.414l-1.862,1.805c-.303,.304-.722,.477-1.167,.477Zm9.333,5h-6c-1.308-.006-1.307-1.994,0-2h6c1.308,.006,1.307,1.994,0,2Zm0-5h-4c-1.308-.006-1.307-1.994,0-2h4c1.308,.006,1.307,1.994,0,2Z"/>
            </svg>
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Liste de contrôle mensuelle</span>
        </a>
      </li>
      
      <li class="mt-0.5 w-full">
        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('profile') }}">
          <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
            <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>customer-support</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(1.000000, 0.000000)">
                      <path class="fill-slate-800 opacity-60" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                      <path class="fill-slate-800" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                      <path class="fill-slate-800" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profil</span>
        </a>
      </li>
      <li class="mt-0.5 w-full">
        <a class="py-2.7 text-sm shadow-soft-xl ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="{{ route('edit') }}" style="width: 92%;">
          <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
            <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(1.000000, 0.000000)">
                      <path class="opacity-60" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                      <path class="" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                      <path class="" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Gestion des comptes</span>
        </a>
    </li>
   </ul>
  </div>


</aside>

@endsection
@section('content2')
<div class="w-full px-6 py-6 mx-auto">
    <!-- Content -->
    <div class="flex flex-wrap -mx-3">
      <div class="w-full max-w-full px-3 mt-6 md:w-7/12 md:flex-none">
          <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                  <h6 class="mb-0">Modifier les utilisateurs</h6>
              </div>
              <div class="mt-6 mx-auto text-center">
                  <button type="button" onclick="confirmCreate()" id="createUserId" class="inline-block px-4 py-2 font-bold text-center uppercase align-middle transition-all border border-transparent rounded-lg shadow-md cursor-pointer leading-pro text-xs ease-soft-in bg-blue-500 text-black hover:bg-blue-600 active:bg-blue-700">
                      <h4 style="display: inline-block; padding: 0.5rem 1rem; font-size: 1rem; font-weight: bold; text-align: center; color: white; background-color: #7ae1c6; border: none; border-radius: 0.375rem; cursor: pointer; transition: background-color 0.3s ease;">Créer un nouveau profil</h4>
                  </button>
              </div>
              <div class="flex-auto p-4 pt-6">
                  @if(session('success'))
                  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                      <span class="block sm:inline">{{ session('success') }}</span>
                  </div>
                  @endif
                  <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                      @foreach($users as $user)
                      <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
                          <div class="flex flex-col">
                              <h6 class="mb-4 leading-normal text-sm">{{ $user->prenom }} {{ $user->nom }}</h6>
                              <span class="mb-2 leading-tight text-xs">Matricule : <span class="font-semibold text-slate-700 sm:ml-2">{{ $user->matricule }}</span></span>
                          </div>
                          <div class="ml-auto text-right">
                              <form action="{{ route('users.toggle', ['matricule' => $user->matricule, 'etat' => $user->etat === 'active' ? 'desactivate' : 'activate']) }}" method="POST" id="toggleForm_{{ $user->matricule }}">
                                  @csrf
                                  <input type="hidden" name="matricule" value="{{ $user->matricule }}">
                                  <div class="toggle-container">
                                      <input class="toggle-checkbox visually-hidden" type="checkbox" name="toggle" id="toggle-{{ $user->matricule }}-active" onchange="toggleUser('{{ $user->matricule }}')" {{ $user->etat === 'active' ? 'checked' : '' }}>
                                      <label for="toggle-{{ $user->matricule }}-active" class="toggle-slider">
                                          <span class="toggle-label toggle-label-left">Désactiver</span>
                                          <span class="toggle-handle"></span>
                                          <span class="toggle-label toggle-label-right">Activer</span>
                                      </label>
                                  </div>
                              </form>
                              <button onclick="showUpdatePopup('{{ $user->matricule }}')" type="button" id="updateButton_{{ $user->matricule }}" class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700">
                                  <i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Modifier
                              </button>
                          </div>
                      </li>
                      @endforeach
                  </ul>
              </div>
          </div>
      </div>
  </div>
  
</div>

<script>
  function toggleUser(matricule) {
      // Soumettre le formulaire de bascule correspondant lorsque l'état de la bascule change
      document.getElementById(`toggleForm_${matricule}`).submit();
  }
</script>


<script>
  function confirmCreate() {
      Swal.fire({
          title: "créer utilisateur",
          html: `@include("create")`, // Replace with your confirmation message
          showCancelButton: true,
          confirmButtonText: "Créer un utilisateur",
          showLoaderOnConfirm: true,
          preConfirm: async () => {
              try {
                  const form = document.getElementById(`createFormID`);
                  const formData = new FormData(form);
                  const response = await fetch('{{ route("create") }}', {
                      method: 'POST',
                      headers: {
                          'X-CSRF-TOKEN': '{{ csrf_token() }}'
                      },
                      body: formData
                  });

                  if (!response.ok) {
                      const errorMessage = await response.json();
                      let errorMessages = '<ul>';
                      for (const key in errorMessage.errors) {
                          errorMessage.errors[key].forEach((error) => {
                              errorMessages += `<li>${error}</li>`;
                          });
                      }
                      errorMessages += '</ul>';
                      throw new Error(errorMessages || 'Échec de la mise à jour.');
                  }

                  return response.json();
              } catch (error) {
                  Swal.showValidationMessage(error.toString());
              }
          },
          allowOutsideClick: () => !Swal.isLoading()
      }).then((result) => {
          if (result.isConfirmed) {
              Swal.fire({
                title: "Création réussie",
                text: "Utilisateur créé avec succès.",
                  icon: "success"
              }).then(() => {
                  location.reload(); // Refresh the page after successful update
              });
          }
      });
  }


</script>


<script>
  function showUpdatePopup(matricule) {
      Swal.fire({
          html: `@include('update')`,
          showCloseButton: true,
          showCancelButton: true,
          focusConfirm: false,
          preConfirm: () => {
              const form = document.getElementById(`updateFormConfirmation`);
              const formData = new FormData(form);
              
              return fetch(form.action, {
                  method: form.method,
                  body: formData
              })
              .then(response => {
                  if (!response.ok) {
                      throw new Error('Network response was not ok');
                  }
                  return response.json();
              })
              .then(data => {
                  if (data.success) {
                      Swal.fire('Success', data.message, 'success').then(() => {
                          location.reload(); // Refresh the page after successful update
                      });
                  } else {
                      Swal.showValidationMessage(`Error: ${data.message}`);
                  }
              })
              .catch(error => {
                  Swal.showValidationMessage(`Error: ${error}`);
              });
          }
      });
  }
</script>


  

<style>
  .toggle-container {
      display: inline-block;
      font-size: 0.875rem;
      color: #4A5568;
  }
  
  .toggle-slider {
      position: relative;
      display: inline-block;
      width: 78px;
      height: 34px;
      background-color: #CBD5E0;
      border-radius: 17px;
      cursor: pointer;
      transition: background-color 0.4s;
  }
  
  .toggle-label {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      transition: opacity 0.4s;
  }
  
  .toggle-label:first-child {
      left: 5px;
      opacity: 1;
  }
  
  .toggle-label:last-child {
      right: 15px;
      opacity: 0;
  }
  
  .toggle-handle {
      position: absolute;
      top: 5%;
      left: 5px;
      width: 30px;
      height: 30px;
      background-color: #FFF;
      border-radius: 50%;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      transition: transform 0.4s;
  }
  
  .toggle-checkbox:checked + .toggle-slider {
      background-color: #48BB78;
  }
  
  .toggle-checkbox:checked + .toggle-slider .toggle-label:first-child {
      opacity: 0;
  }
  
  .toggle-checkbox:checked + .toggle-slider .toggle-label:last-child {
      opacity: 1;
  }
  
  .toggle-checkbox:checked + .toggle-slider .toggle-handle {
      transform: translateX(40px);
  }
  
  .visually-hidden {
      position: absolute !important;
      height: 1px;
      width: 1px;
      overflow: hidden;
      clip: rect(1px, 1px, 1px, 1px);
      white-space: nowrap;
  }
  
  </style>                     



  @endsection
