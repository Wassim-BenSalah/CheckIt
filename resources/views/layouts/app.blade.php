
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="/assets/css/notifications.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Main Styling -->
    <link href="/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />
    <link href="/assets/css/guide.css" rel="stylesheet" />

    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

  </head>

  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-hidden rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
      <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="{{ route('dashboard') }}" target="_blank">
          <img src="/assets/img/logos/checkit-pink.png" alt="Logo de app" style="width: 150px; height: auto;">

        </a>
      </div>

      <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
      @yield('content1')

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
              <li class="text-sm leading-normal">
                <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
              </li>
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">@yield('title')</li>
            </ol>
            <h6 class="mb-0 font-bold capitalize">@yield('title')</h6>
          </nav>

          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">

            </div>
            <!-- notification -->
            <li class="relative flex items-center pr-4">
              <a href="javascript:;" class="block p-2 rounded-full transition-all duration-300 ease-in-out bg-gray-200 hover:bg-gray-300 focus:bg-gray-300 focus:outline-none notification-trigger" aria-expanded="false">
                  <i class="cursor-pointer fas fa-bell text-gray-600 text-2xl notification-bell"></i>
              </a>
              <ul class="px-4"></ul>
              <ul class="notification-box text-sm pointer-events-none absolute z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all overflow-y-auto" style="max-width: 500px; max-height: 450px;: auto; top: calc(100% + 10px); right: 0;">
              </ul>
            </li>

          <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full lg:w-auto">
            <!-- Bouton du générateur en ligne -->
            <!-- <li class="flex items-center">
              <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
            </li> -->
            <!-- Lien de déconnexion -->
            <li class="flex items-center">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                <a href="#" class="inline-block px-4 py-2 text-sm font-semibold text-center uppercase transition-all duration-300 bg-gradient-to-r from-red-400 to-red-500 text-gray-100 border border-transparent rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400 hover:bg-red-600 hover:text-white" style="display: inline-block; padding: 8px 12px; background-color: #EF4444; color: #fff; text-decoration: none; border-radius: 8px; cursor: pointer; margin-right: 10px; font-size: 14px;" onmouseover="this.style.backgroundColor='#DC2626'" onmouseout="this.style.backgroundColor='#EF4444'" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Déconnexion
                </a>
            </li>
          </ul>
        </li>

          </div>
        </div>
      </nav>

    @yield('content2')




    <footer class="py-12">

      <div class="flex flex-wrap -mx-3">
        <div class="w-8/12 max-w-full px-3 mx-auto mt-1 text-center flex-0">
          <p class="mb-0 text-slate-400">
            Droits d'auteur ©
            <script>
              document.write(new Date().getFullYear());
            </script>
            Bienvenue chez Leoni.
          </p>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- ici le guide -->
  <div fixed-plugin>
    <a fixed-plugin-button class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700">
      <i class="py-2 pointer-events-none fa fa-question"> </i>
    </a>
    
    <div fixed-plugin-card class="z-sticky shadow-soft-3xl w-90 ease-soft -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white bg-clip-border px-2.5 duration-500">
      <a href="javascript:;" class="p-0 text-sm transition-all ease-nav-brand text-slate-500">
        <i fixed-plugin-button-nav class="fixed-plugin-close fas fa-times" aria-hidden="true"></i>
      </a>
    
      <!-- Votre contenu ici -->
      <div class="container mx-auto p-4 overflow-y-auto" style="max-height: 90vh;">
        <h1 class="text-3xl font-bold mb-6">Guide Utilisateur</h1>
        <p class="text-lg mb-6">Bienvenue dans le guide utilisateur de notre application de gestion de checklists journalières et mensuelles. Explorez ci-dessous pour découvrir comment utiliser efficacement notre application.</p>
        
        <div class="mb-8">
          <h2 class="text-2xl font-semibold mb-4">Introduction</h2>
          <p class="text-lg mb-4">Notre application offre une solution complète pour la gestion efficace des tâches quotidiennes et mensuelles, ainsi que la supervision avancée des salles serveurs. Elle est conçue pour simplifier la gestion des processus et garantir une traçabilité optimale des activités.</p>
        </div>
        
        <div class="mb-8">
          <h2 class="text-2xl font-semibold mb-4">Fonctionnalités Principales</h2>
          <ul class="list-disc list-inside text-lg mb-4">
            <li>Création et gestion de checklists personnalisées pour les tâches journalières et mensuelles.</li>
            <li>Suivi détaillé des tâches mensuelles avec possibilité de marquer leur accomplissement.</li>
            <li>Génération de rapports exhaustifs pour évaluer la performance et l'efficacité des processus.</li>
            <li>Notifications instantanées et rappels pour les tâches prioritaires.</li>
            <li>Gestion avancée des salles serveurs avec traçabilité complète des actions effectuées.</li>
            <li>Gestion sécurisée des utilisateurs avec contrôle total sur les autorisations et les accès.</li>
          </ul>
        </div>
        
        <div class="mb-8">
          <h2 class="text-2xl font-semibold mb-4">Comment Utiliser l'Application</h2>
          <div class="mb-6">
            <h3 class="text-xl font-semibold mb-2">1. Connexion</h3>
            <p class="text-lg mb-4">Accédez à l'application en vous connectant avec vos identifiants.</p>
          </div>
          <div class="mb-6">
            <h3 class="text-xl font-semibold mb-2">2. Consultation des Checklists</h3>
            <p class="text-lg mb-4">Pour consulter une checklist, accédez à la section correspondante : "Liste de contrôle journalier" ou "Liste de contrôle mensuelle". Cliquez sur le nom de la salle serveur pour afficher les détails de la checklist associée.</p>
          </div>
          <div class="mb-6">
            <h3 class="text-xl font-semibold mb-2">3. Création d'une Checklist</h3>
            <p class="text-lg mb-4">Pour créer une nouvelle checklist, allez dans la section "Liste de contrôle journalier". Remplissez les champs nécessaires, tels que le nom de la checklist, la description, et les tâches spécifiques à inclure. Sauvegardez la checklist pour la rendre disponible dans l'application.</p>
          </div>
          <div class="mb-6">
            <h3 class="text-xl font-semibold mb-2">4. Suppression de Checklist</h3>
            <p class="text-lg mb-4">Pour supprimer une checklist associée à une salle serveur, cliquez sur l'icône de suppression correspondante dans la vue des détails de la checklist.</p>
          </div>
          <div class="mb-6">
            <h3 class="text-xl font-semibold mb-2">5. Consultation du Tableau de bord</h3>
            <p class="text-lg mb-4">Pour consulter le dashboard, accédez à la section "Tableau de bord". Vous y trouverez un aperçu de l'état des salles serveurs, incluant les tâches complétées et en cours, ainsi que des graphiques et des statistiques sur l'efficacité et la performance des processus.</p>
          </div>
        </div>
        
        <div class="mb-8">
          <h2 class="text-2xl font-semibold mb-4">Gestion des Salles Serveurs et des Utilisateurs (Administrateurs)</h2>
          <p class="text-lg mb-4">Les administrateurs ont un contrôle total sur la gestion des salles serveurs et des utilisateurs. Ajoutez de nouvelles salles, mettez à jour les détails existants, créez de nouveaux comptes, modifiez les informations existantes et contrôlez les autorisations pour assurer une sécurité maximale, tout en suivant chaque action effectuée pour une traçabilité parfaite.</p>
        </div>
        
        <div>
          <h2 class="text-2xl font-semibold mb-4">Support</h2>
          <p class="text-lg mb-6">Pour toute assistance technique ou question, n'hésitez pas à contacter notre équipe de support dédiée à l'adresse : support@leoni.com.</p>
          <p class="text-lg">Nous sommes là pour vous aider!</p>
        </div>
      </div>
    </div>
  </div>
  <!-- la fin du guide -->
  
  <!-- la fin du guide -->
  
  


  
  </body>
      <!-- plugin for charts  -->
  <script src="/assets/js/plugins/chartjs.min.js" async></script>
    <!-- plugin for scrollbar  -->
    <script src="/assets/js/plugins/perfect-scrollbar.min.js" async></script>
    <!-- github button -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- main script file  -->
    <script src="/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
    <script src="{{ asset('js/notifications.js') }}"></script>

  </html>
