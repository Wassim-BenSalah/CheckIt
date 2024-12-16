@extends('layouts.app')
@section('title') Tableau de bord @endsection
@section('content1')

<div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
    <ul class="flex flex-col pl-0 mb-0">
      <li class="mt-0.5 w-full">
        <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="{{ route('dashboard') }}" style="width: 92%;">
          <div class="bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
            <!-- Icon for dashboard -->
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
              <title>Support client</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(1.000000, 0.000000)">
                      <path class="fill-slate-800 opacity-60" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25
                      .214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
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
              <title>Support client</title>
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
        <div class="w-full max-w-full px-3 mt-0 lg:flex-none" id="chartContainer">
          <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border" style="width: 100%;">
            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
              <h6>État des salles</h6>
            
            </div>
            <div class="flex-auto p-4">
              <div>
                <canvas id="myChart" width="400" height="400"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap my-6 -mx-3">
          <!-- card 1 -->

          <div class="w-full px-3 mb-6 md:mb-0 md:w-1/2">
            <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="flex-auto p-6 px-0 pb-2">
                    <div class="overflow-x-auto">
                  <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Salle<i class="fas fa-scalpel"></i></th>
                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Tests journaliers</th>
                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Tests mensuels</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($salles as $salle)
                        
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="flex px-2 py-1">

                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 leading-normal text-sm">{{ $salle->salleID }}</h6>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">

                        
                          <?php
                          $currentMonth = Carbon\Carbon::now()->month;
                          $checklistsThisMonth = $checkList->where('salleID', $salle->salleID)->filter(function($item) use ($currentMonth) {
                              return $item->created_at->month == $currentMonth;
                          })->count();
                          $salleConditionSum = $checkList->where('salleID', $salle->salleID)->filter(function($item) use ($currentMonth) {
                              return $item->created_at->month == $currentMonth;
                          })->sum('salle_condition');
                          $averageSalleCondition = $checklistsThisMonth != 0 ? $salleConditionSum / $checklistsThisMonth : "N/A";
                          ?>
                    
                          @if (is_numeric($averageSalleCondition))
                          <div class="w-3/4 mx-auto">
                            <div>
                              <div >
                                <span class="font-semibold  leading-tight text-xs">{{ number_format($averageSalleCondition, 2) }}%</span>
                              </div>
                            </div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="<?= $averageSalleCondition ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $averageSalleCondition ?>%;"></div>
                            </div>
                          </div>

                          @else
                        <span class="font-semibold leading-tight text-xs">{{ $averageSalleCondition }}</span>
                         @endif
                                        
                    
                        </td>

                        <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                          <div class="w-3/4 mx-auto">
                            <div>
                              <div>
                                @php
                                $found = false;
                                @endphp

                                @foreach ($checkListMensuelle as $checklistMensuelle)
                                    @if ($checklistMensuelle->salleID == $salle->salleID)
                                        @php
                                            $found = true;
                                        @endphp
                                        <div class="w-3/4 mx-auto">
                                          <div>
                                            <div>
                                              <span class="font-semibold leading-tight text-xs">{{ $checklistMensuelle->salle_condition_mensuelle }}%</span>
                                            </div>
                                          </div>
                                          <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                            <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="<?= $checklistMensuelle->salle_condition_mensuelle ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $checklistMensuelle->salle_condition_mensuelle ?>%;"></div>
                                          </div>
                                        </div>
                                    @endif
                                @endforeach

                                @if (!$found)
                                    <span class="font-semibold leading-tight text-xs">N/A</span>
                                @endif
                           </div>
                            </div>
            
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
          </div>
      </div>
          
          <!-- card 2 -->

      <!-- card 2 -->
      <div class="w-full px-3 md:w-1/2">
        <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
            <div class="flex-auto p-4">
                <div class="py-4 pr-1 mb-4 bg-gradient-to-tl from-gray-900 to-slate-800 rounded-xl">
                    <div>
                        <canvas id="bars" height="190"></canvas>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
<script>
  // Function to initialize the chart
  function initializeChart(chartData) {
      var ctx = document.getElementById('myChart').getContext('2d');

      var dates = Object.keys(chartData);
      var salleIDs = Object.keys(chartData[dates[0]]);
      var datasets = [];
      
      // Loop through dates first, then salleIDs
      dates.forEach(function(date) {
          var data = [];
          salleIDs.forEach(function(salleID) {
              if (chartData[date][salleID] !== undefined && chartData[date][salleID] !== null ) {
                  data.push(chartData[date][salleID]);
              } else {
                  data.push(null); // Push null for rooms with no data
              }
          });

          datasets.push({
              label: date, // Use the date as label
              data: data,
              borderColor: 'rgb(' + Math.random() * 255 + ', ' + Math.random() * 255 + ', ' + Math.random() * 255 + ')',
              fill: false
          });
      });

      var myChart = new Chart(ctx, {
          type: 'line',
          data: {
              labels: salleIDs, // Use salleIDs as labels (rooms)
              datasets: datasets
          },
          options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: {
        display: true,
      },
    },
    interaction: {
      intersect: false,
      mode: "index",
    },
    scales: {
      y: {
        grid: {
          drawBorder: false,
          display: true,
          drawOnChartArea: true,
          drawTicks: false,
          borderDash: [5, 5],
        },
        ticks: {
          display: true,
          padding: 10,
          color: "#b2b9bf",
          font: {
            size: 11,
            family: "Open Sans",
            style: "normal",
            lineHeight: 2,
          },
        },
      },
      x: {
        grid: {
          drawBorder: false,
          display: false,
          drawOnChartArea: false,
          drawTicks: false,
          borderDash: [5, 5],
        },
        ticks: {
          display: true,
          color: "#b2b9bf",
          padding: 20,
          font: {
            size: 11,
            family: "Open Sans",
            style: "normal",
            lineHeight: 2,
          },
        },
      },
    },
  },
      });
  }

  // Initialize the chart with initial data
  initializeChart(@json($chartData));

  // Function to update the chart with new data
  function updateChart(newData) {
      // Destroy the existing chart instance
      if (window.myChart) {
          window.myChart.destroy();
      }
      // Reinitialize the chart with the new data
      initializeChart(newData);
  }
</script>


<script>
  // Récupérez les données nécessaires pour le graphique depuis la variable PHP
  var salleIDs = {!! json_encode($currentMonthData->pluck('salleID')) !!};
  var salleConditions = {!! json_encode($currentMonthData->pluck('salle_condition_mensuelle')) !!};

  // Récupérez l'élément canvas et initialisez le graphique
  var ctx = document.getElementById('bars').getContext('2d');
  var myChart;


      
    myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: salleIDs, // Utilisez les salleIDs comme étiquettes sur l'axe x
            datasets: [{
                label: 'État de la salle mensuelle',
                data: salleConditions, // Utilisez les données du mois en cours sur l'axe y
                borderSkipped: false,
                backgroundColor: "#fff",              
                borderWidth: 1 // Épaisseur de la bordure des barres
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                     display: false,
                },
          },
            interaction: {
                intersect: false,
                mode: "index",
            },
            scales: {
                y: {
                    grid: {
                         drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                          drawTicks: false,
                      },
                      ticks: {
                          suggestedMin: 0,
                          suggestedMax: 600,
                          beginAtZero: true,
                          padding: 15,
                          font: {
                              size: 15,
                              family: "Open Sans",
                              style: "normal",
                              lineHeight: 1,
                          },
                          color: "#fff",
                      },
                  },
                  x: {
                      grid: {
                          drawBorder: false,
                          display: true,
                          drawOnChartArea: false,
                          drawTicks: false,
                      },
                      ticks: {
                          display: true,
                      },
                  },
              },
          },
      });

</script>

@endsection