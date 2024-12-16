@extends('layouts.app')
@section('title') Liste de contrôle mensuelle @endsection
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
        <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="{{ route('CheckListMensuelle') }}" style="width: 95%;">
          <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="12px" height="12px">
              <title>credit-card</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(453.000000, 454.000000)">
                      <path d="M16,2h-.171c-.413-1.164-1.525-2-2.829-2h-2c-1.304,0-2.416,.836-2.829,2h-.171c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h8c2.757,0,5-2.243,5-5V7c0-2.757-2.243-5-5-5ZM7,17c-1.308-.006-1.308-1.994,0-2,1.308,.006,1.308,1.994,0,2Zm.667-5c-.445,0-.864-.173-1.178-.488l-1.008-.951c-.401-.379-.42-1.012-.041-1.414,.379-.402,1.012-.42,1.414-.041l.811,.766,1.64-1.59c.396-.384,1.029-.375,1.414,.022,.384,.396,.375,1.029-.022,1.414l-1.862,1.805c-.303,.304-.722,.477-1.167,.477Zm9.333,5h-6c-1.308-.006-1.307-1.994,0-2h6c1.308,.006,1.307,1.994,0,2Zm0-5h-4c-1.308-.006-1.307-1.994,0-2h4c1.308,.006,1.307,1.994,0,2Z"/>
                    </g>
                  </g>
                </g>
              </g>
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
        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('edit') }}">
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
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Gestion des comptes</span>
        </a>
      </li>

    </ul>

  </div>
</aside>
@endsection

@section('content2')

<div class="w-full px-6 py-6 mx-auto">
  <!-- Table 1 -->
  <div class="flex flex-wrap">
      <div class="w-full">
          <div class="bg-white rounded-2xl shadow-xl">
              <div class="p-6 bg-white border-b border-gray-200 rounded-t-2xl flex justify-between items-center">
                  <h2 class="text-lg font-semibold">Les listes de contrôle </h2>
                  <div class="mt-3 flex items-center">
                    <button type="button" onclick="createChecklist()"   id='createCheckListButton' style="display: inline-block; padding: 5px 10px; background-color:rgb(171, 75, 168);  color: #fff; text-decoration: none; border-radius: 10px; cursor: pointer; margin-right: 10px;" onmouseover="this.style.backgroundColor='rgb(138, 45, 135)'" onmouseout="this.style.backgroundColor='rgb(171, 75, 168)'">Créer Checklist</a>
                    <button type="button" onclick="createSalle()"  id="createSalleButton" class="ml-2 text-sm text-gray-500 self-end">Créer une salle</a>


                  </div>
              </div>
              <div class="overflow-x-auto">
                  <table class="w-full border-collapse">
                      <thead>
                          <tr class="border-b border-gray-200">
                            <th class="px-6 py-3 text-left font-semibold uppercase">Nom de la salle</th>
                            <th class="px-6 py-3 text-center font-semibold uppercase">Créée le</th>
                            <th class="px-6 py-3 text-center font-semibold uppercase">Traçabilité</th>
                            <th class="px-6 py-3"></th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($checkListMensuel as $checklistMensuel)
                          <tr class="border-b border-gray-200">
                              <td class="px-6 py-4 whitespace-nowrap">
                                <a href="javascript:void(0)" onclick="showChecklistDetails({{ $checklistMensuel->id }})" class="text-sm font-semibold text-purple-600">{{ $checklistMensuel->salleID }}</a>
                              </td>

                              <td class="px-6 py-4 text-center text-sm text-gray-500">{{ $checklistMensuel->created_at }}</td>
                              <td class="px-6 py-3 text-center">
                                <button type="button" name="trace" onclick="showImageAlert('{{ $checklistMensuel->imageTestGsm }}', '{{ $checklistMensuel->imageTestSondeThermique }}')">trace</button>
                              </td>
                              <td class="px-6 py-4 text-right text-sm">
                                <form id="deleteForm_{{ $checklistMensuel->id }}" action="{{ route('checklistsMensuel.destroy', $checklistMensuel->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete('{{ $checklistMensuel->id }}')" class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text">
                                        <i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Supprimer
                                    </button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  <!-- Card 2 -->
</div>


<script>
  function showImageAlert(imagePath1, imagePath2) {
    let currentImageIndex = 0;
    let imagePaths = [imagePath1, imagePath2];
    let titles = ["Test GSM", "test Sonde Thermique"];

    function showNextImagePopup() {
      if (currentImageIndex < imagePaths.length) {
        Swal.fire({
          title: titles[currentImageIndex], // Utilisez le titre dynamique en fonction de l'index de l'image
          text: "Modal with a custom image.",
          imageUrl: "{{ asset('storage/') }}" + "/" + imagePaths[currentImageIndex],
          imageWidth: 500,
          imageHeight: 400,
          imageAlt: "Custom image",
          showCloseButton: true,
          showConfirmButton: false,
          html: `
            <button id="viewNextBtn" style="margin-top: 10px;">View Next Image</button>
          `
        }).then((result) => {
          if (result.isConfirmed) {
            currentImageIndex++;
            showNextImagePopup();
          }
        });

        // Ajout d'un écouteur d'événements pour gérer le clic sur le bouton "View Next Image"
        document.getElementById('viewNextBtn').addEventListener('click', function() {
          currentImageIndex++;
          showNextImagePopup();
        });
      } else {
        Swal.fire({
          title: "No more images",
          text: "You've reached the end of the images.",
          icon: "info"
        });
      }
    }

    showNextImagePopup(); // Afficher la première popup
  }
</script>

<script>
  function createSalle() {

  Swal.fire({
    title: "Créer une salle",
    html: `
      <form id="createSalleForm">
        <label for="salleID">ID de la salle :</label>
        <input type="text" id="salleID" name="salleID" class="swal2-input">
        <div id="errorPopup"></div>
      </form>
    `,
    showCancelButton: true,
    confirmButtonText: "Créer une salle",
    showLoaderOnConfirm: true,
    preConfirm: async () => {
      try {
        const salleID = document.getElementById('salleID').value.trim();
        const response = await fetch('{{ route("salle.store") }}', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: JSON.stringify({ salleID })
        });

        if (!response.ok) {
          const errorMessage = await response.text();
          throw new Error(errorMessage || 'Échec de la création de la salle.');
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
        position: "top-end",
        icon: "success",
        title: "Votre salle a été enregistrée",
        showConfirmButton: false,
        timer: 1500
      }).then(() => {
                // Mettre à jour l'interface utilisateur, par exemple, recharger la page
                location.reload();
            });;
    }
  })};
</script>


<script>
  function createChecklist() {
       // Vérifie si $availableRooms est vide
       if (!{!! json_encode($availableRooms->count()) !!}) {
        Swal.fire({
            icon: 'error',
            title: 'Aucune salle disponible',
            text: 'Il n\'y a pas de salle disponible pour créer une liste de vérification.',
        });
        return; // Arrête l'exécution de la fonction
    }
      Swal.fire({
          title: "Créer une Liste de Vérification",
          html: `
              @include('formCheckListMensuel')
          `,
          showCancelButton: true,
          confirmButtonText: "Enregistrer",
          showLoaderOnConfirm: true,
          preConfirm: async () => {
              try {
                  const form = document.getElementById('checkListMensuelForm');
                  const formData = new FormData(form);
                  const response = await fetch('{{ route("checklistsMensuel.store") }}', {
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
                    throw new Error(errorMessages || 'Échec de la création.');

                }
                  return response.json();
              } catch (error) {
                  Swal.showValidationMessage(error.toString());
              }
          },
          allowOutsideClick: () => !Swal.isLoading() // Permet le clic en dehors de la modale pendant le chargement
      }).then((result) => {
          if (result.isConfirmed) {
              Swal.fire({
                  title: "Liste de Vérification Mensuelle Créée avec Succès",
                  icon: "success"
              }).then(() => {
                // Mettre à jour l'interface utilisateur, par exemple, recharger la page
                location.reload();
            });
          }
      });
  }
</script>



<script>
  function confirmDelete(id) {
  Swal.fire({
    title: "Êtes-vous sûr(e) ?",
    text: "Cette action est irréversible !",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Oui, supprimez-le !"
  }).then((result) => {
    if (result.isConfirmed) {
      // Sélectionner le formulaire avec l'ID spécifié
      document.getElementById('deleteForm_' + id).submit();

    }
  });
  }
</script>



<script>
  function showChecklistDetails(id) {
      // Récupérer les détails de la liste de contrôle en utilisant AJAX
      fetch(`/checklistsMensuel/${id}`)
          .then(response => {
              if (!response.ok) {
                  throw new Error('La réponse du réseau n\'a pas été correcte');
              }
              return response.text();
          })
          .then(data => {
              // Afficher les détails de la liste de contrôle dans la popup Swal.fire()
              Swal.fire({
                  title: `Détails de la liste de contrôle pour la liste de contrôle ${id}`,
                  html: data,
                  showCloseButton: false,
                  showConfirmButton: true
              });
          })
          .catch(error => {
              console.error('Erreur :', error);
              Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: `Impossible de récupérer les détails de la liste de contrôle pour la liste de contrôle ${id}`,
              });
          });
  }
</script>

  @endsection
