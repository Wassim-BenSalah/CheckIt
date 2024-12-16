<!--
=========================================================
* Soft UI Dashboard Tailwind - v1.0.5
=========================================================

* Page du produit : https://www.creative-tim.com/product/soft-ui-dashboard-tailwind
* Droits d'auteur 2023 Creative Tim (https://www.creative-tim.com)
* Sous licence MIT (https://www.creative-tim.com/license)
* Codé par Creative Tim

=========================================================

* L'avis de droits d'auteur ci-dessus et cet avis d'autorisation doivent être inclus dans toutes les copies ou portions substantielles du logiciel.
-->
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />
    <title>Liste de contrôle</title>
    <!-- Polices et icônes -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Icônes Font Awesome -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Icônes Nucleo -->
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Styles principaux -->
    <link href="/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />

    <!-- Analytiques Nepcha (nepcha.com) -->
    <!-- Nepcha est un outil d'analyse web facile à utiliser. Aucun cookie et entièrement conforme au RGPD, CCPA et PECR. -->
    <script defer data-site="VOTRE_DOMAINE_ICI" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  </head>

  <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    <div class="container sticky top-0 z-sticky">
      <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 flex-0">
          <!-- Navbar -->
          <nav class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 mx-6 my-4 shadow-soft-2xl rounded-blur bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start">
            <div class="flex items-center justify-between w-full p-0 pl-6 mx-auto flex-wrap-inherit">
              <img src="/assets/img/logos/checkit-blue.png" alt="Logo de app" style="width: 200px; height: auto;">
            </div>
          </nav>
        </div>
      </div>
    </div>
    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
      <section>
        <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen">
          <div class="container z-10">
            <div class="flex flex-wrap mt-0 -mx-3">
              <div class="flex flex-col w-full max-w-full px-3 mx-auto md:flex-0 shrink-0 md:w-6/12 lg:w-5/12 xl:w-4/12">
                <div class="relative flex flex-col min-w-0 mt-32 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                  <div class="p-6 pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                    <h3 class="relative z-10 font-bold text-transparent bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text">Bienvenue chez LEONI</h3>
                    <p class="mb-0">Entrez votre matricule et votre mot de passe pour vous connecter</p>
                  </div>
                  <div class="flex-auto p-6">
                    <!-- Afficher un message de succès si l'utilisateur s'est inscrit avec succès -->
                          @if (session('success'))
                          <div>
                              <p>{{ session('success') }}</p>
                          </div>
                      @endif
                    <form action="{{ route('login') }}" method="post">
                       @csrf
                      <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Matricule</label>
                      <div class="mb-4">
                        <input type="text" name="matricule"  class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Matricule"  />
                      </div>
                      <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Mot de passe</label>
                      <div class="mb-4">
                        <input type="password" name="password" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Mot de passe" aria-label="Mot de passe" aria-describedby="password-addon" />
                      </div>

                      <!-- Afficher les messages d'erreur s'il y en a -->
                          @if ($errors->any())
                          <div>
                              @foreach ($errors->all() as $error)
                                  <p>{{ $error }}</p>
                              @endforeach
                          </div>
                      @endif
                      <div class="text-center">
                        <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Se connecter</button>
                      </div>

                    </form>
                  </div>
                  <a href="{{ route('password.request') }}">Mot de passe oublié</a>

                </div>
              </div>
              <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 md:w-6/12">
                <div class="absolute top-0 hidden w-3/5 h-full -mr-32 overflow-hidden -skew-x-10 -right-40 rounded-bl-xl md:block">
                  <div class="absolute inset-x-0 top-0 z-0 h-full -ml-16 bg-cover skew-x-10" style="background-image: url('/assets/img/curved-images/02.jpg')"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
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
  </body>
  <!-- Plugin pour la barre de défilement -->
  <script src="/assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- Fichier de script principal -->
  <script src="/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
</html>
