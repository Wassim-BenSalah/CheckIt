@extends('layouts.app')
@section('title') profil @endsection
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
        <a class="py-2.7 text-sm shadow-soft-xl ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="{{ route('profile') }}" style="width: 92%;">
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
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Modifier les comptes</span>
        </a>
      </li>
    </ul>
  </div>


</aside>
@endsection
@section('content2')
      <div class="w-full px-6 mx-auto">
        <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl" style="background-image: url('/assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
          <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-purple-700 to-pink-500 opacity-60"></span>
        </div>
        <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
          <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-auto max-w-full px-3">
              <div class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                <img src="/assets/img/bruce-mars.jpg" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
              </div>
            </div>
            <div class="flex-none w-auto max-w-full px-3 my-auto">
              <div class="h-full">
                <h5 class="mb-1">{{ $prenom }} {{ $nom }}</h5>
                <p class="mb-0 font-semibold leading-normal text-sm">{{ $role }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-8/12">
        <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                <div class="flex items-center justify-between">
                    <h6 class="mb-0 font-semibold">Informations sur le profil</h6>
                    <a href="javascript:;" data-target="tooltip_trigger" data-placement="top">
                        <i class="leading-normal fas fa-user-edit text-sm text-slate-400"></i>
                    </a>
                    <div data-target="tooltip" class="hidden px-2 py-1 text-center text-white bg-black rounded-lg text-sm" role="tooltip">
                        Modifier le profil
                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                    </div>
                </div>
            </div>
            <div class="flex-auto p-4">
                <p class="leading-normal text-sm">Bonjour {{ $prenom }} {{ $nom }}.</p>
                <hr class="my-6 border-t border-gray-300" />
                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                    <li class="px-4 py-2 leading-normal bg-white border-b border-gray-200">
                        <strong class="text-gray-700">Nom complet :</strong> &nbsp; {{ $prenom }} {{ $nom }}
                    </li>
                    <li class="px-4 py-2 leading-normal bg-white border-b border-gray-200">
                        <strong class="text-gray-700">Email :</strong> &nbsp; {{ $email }}
                    </li>
                    <li class="px-4 py-2 leading-normal bg-white border-b border-gray-200">
                        <strong class="text-gray-700">Matricule :</strong> &nbsp; {{ $matricule }}
                    </li>
                    <li class="px-4 py-2 leading-normal bg-white border-b border-gray-200">
                        <strong class="text-gray-700">Rôle :</strong> &nbsp; {{ $role }}
                    </li>
                    <li class="px-4 py-2 leading-normal bg-white">
                        <strong class="text-gray-700">Réseaux sociaux :</strong> &nbsp;
                        <a class="inline-block py-0 px-2 mb-0 font-bold text-blue-800 transition-all bg-transparent rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none" href="javascript:;">
                            <i class="fab fa-facebook-f fa-lg"></i>
                        </a>
                        <a class="inline-block py-0 px-2 mb-0 font-bold text-sky-600 transition-all bg-transparent rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none" href="javascript:;">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a class="inline-block py-0 px-2 mb-0 font-bold text-sky-900 transition-all bg-transparent rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-none" href="javascript:;">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
