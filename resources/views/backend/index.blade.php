@extends('backend.layouts.master')
@section('title','Inno Mak || DASHBOARD')
@section('main-content')
<div class="container-fluid">
    @include('backend.layouts.notification')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

      <!-- Category -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Project Category</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{\App\Models\Category::countActiveCategory()}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-sitemap fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Products -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Projects</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{\App\Models\Product::countActiveProduct()}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-cubes fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Order -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Order</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{\App\Models\Order::countActiveOrder()}}</div>
                  </div>
                  
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Posts-->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Post</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{\App\Models\Post::countActivePost()}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-folder fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

            <!-- Tickets -->
            <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total tickets</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($totalTickets) }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-cubes fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Tickets -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Open tickets</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($openTickets) }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-cubes fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Tickets -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Closed tickets</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($closedTickets) }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-cubes fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Tickets -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">In-progress Tickets</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($In_progressTickets) }}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-cubes fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">

      <!-- Area Chart -->
      <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
            
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <div class="chart-area">
              <canvas id="myAreaChart"></canvas>
            </div>
          </div>
        </div>
      </div> 
 <!-- Content Row -->  
  </div>


  <!-- Graphs -->
  <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">My graphs</div>

                <div class="card-body">
                    
                                <!-- Chart's container -->
                    <div id="" style="height: 300px;">
                    <canvas id="charts"></canvas>
                </div>
                <div id="" style="height: 300px;">
                    <canvas id="charts"></canvas>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Graph Key
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">1 : System Inquires</button>
                            <button class="dropdown-item" type="button">2 : Non-Technical assistance</button>
                            <button class="dropdown-item" type="button">3 : Technical Assistance</button>
                        </div>
                    </div>
                </div>
                    <!-- Charting library -->
                    <scrip src="https://unpkg.com/echarts/dist/echarts.min.js"></scrip>
                    <!-- Chartisan -->
                    <!-- Chartisan -->
                    <scrip src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></scrip>
                    <!-- Your application script -->
                    
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">My graphs</div>

                <div class="card-body">
                    
                                <!-- Chart's container -->
                    <div id="" style="height: 300px;">
                    <canvas id="me"></canvas>
                </div>
                <div id="" style="height: 300px;">
                    <canvas id="me"></canvas>
                </div>
                    <!-- Charting library -->
                    <scrip src="https://unpkg.com/echarts/dist/echarts.min.js"></scrip>
                    <!-- Chartisan -->
                    <!-- Chartisan -->
                    <scrip src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></scrip>
                    <!-- Your application script -->
                    
                </div>
            </div>
        </div>
    </div>

    </div>
<br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">My graphs</div>

                <div class="card-body">
                    
                                <!-- Chart's container -->
                    <div id="" style="height: 300px;">
                    <canvas id="line"></canvas>
                </div>
                <div id="" style="height: 300px;">
                    <canvas id="line"></canvas>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Graph Key
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">1 : Low</button>
                            <button class="dropdown-item" type="button">2 : Medium</button>
                            <button class="dropdown-item" type="button">3 : High</button>
                        </div>
                    </div>
                </div>
                    <!-- Charting library -->
                    <scrip src="https://unpkg.com/echarts/dist/echarts.min.js"></scrip>
                    <!-- Chartisan -->
                    <!-- Chartisan -->
                    <scrip src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></scrip>
                    <!-- Your application script -->
                    
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">My graphs</div>

                <div class="card-body">
                    
                                <!-- Chart's container -->
                    <div id="" style="height: 300px;">
                    <canvas id="cool"></canvas>
                </div>
                <div id="" style="height: 300px;">
                    <canvas id="cool"></canvas>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Graph Key
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">1 : Open</button>
                            <button class="dropdown-item" type="button">2 : Closed </button>
                            <button class="dropdown-item" type="button">3 : In-progress</button>
                        </div>
                    </div>
                </div>
                    <!-- Charting library -->
                    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
                    <!-- Chartisan -->
                    <!-- Chartisan -->
                    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
                    <!-- Your application script -->
                    
                </div>
            </div>
        </div>
    </div>
    <br>

@endsection

@push('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
{{-- pie chart --}}
<script type="text/javascript">
  var analytics = <?php echo $users; ?>

  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart()
  {
      var data = google.visualization.arrayToDataTable(analytics);
      var options = {
          title : 'Last 7 Days registered user'
      };
      var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
      chart.draw(data, options);
  }
</script>
  {{-- line chart --}}
  <script type="text/javascript">
    const url = "{{route('product.order.income')}}";
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    function number_format(number, decimals, dec_point, thousands_sep) {
      // *     example: number_format(1234.56, 2, ',', ' ');
      // *     return: '1 234,56'
      number = (number + '').replace(',', '').replace(' ', '');
      var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function(n, prec) {
          var k = Math.pow(10, prec);
          return '' + Math.round(n * k) / k;
        };
      // Fix for IE parseFloat(0.55).toFixed(0) = 0;
      s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
      if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
      }
      if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
      }
      return s.join(dec);
    }

      // Area Chart Example
      var ctx = document.getElementById("myAreaChart");

        axios.get(url)
              .then(function (response) {
                const data_keys = Object.keys(response.data);
                const data_values = Object.values(response.data);
                var myLineChart = new Chart(ctx, {
                  type: 'line',
                  data: {
                    labels: data_keys, // ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                      label: "Earnings",
                      lineTension: 0.3,
                      backgroundColor: "rgba(78, 115, 223, 0.05)",
                      borderColor: "rgba(78, 115, 223, 1)",
                      pointRadius: 3,
                      pointBackgroundColor: "rgba(78, 115, 223, 1)",
                      pointBorderColor: "rgba(78, 115, 223, 1)",
                      pointHoverRadius: 3,
                      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                      pointHitRadius: 10,
                      pointBorderWidth: 2,
                      data:data_values,// [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000],
                    }],
                  },
                  options: {
                    maintainAspectRatio: false,
                    layout: {
                      padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                      }
                    },
                    scales: {
                      xAxes: [{
                        time: {
                          unit: 'date'
                        },
                        gridLines: {
                          display: false,
                          drawBorder: false
                        },
                        ticks: {
                          maxTicksLimit: 7
                        }
                      }],
                      yAxes: [{
                        ticks: {
                          maxTicksLimit: 5,
                          padding: 10,
                          // Include a dollar sign in the ticks
                          callback: function(value, index, values) {
                            return '$' + number_format(value);
                          }
                        },
                        gridLines: {
                          color: "rgb(234, 236, 244)",
                          zeroLineColor: "rgb(234, 236, 244)",
                          drawBorder: false,
                          borderDash: [2],
                          zeroLineBorderDash: [2]
                        }
                      }],
                    },
                    legend: {
                      display: false
                    },
                    tooltips: {
                      backgroundColor: "rgb(255,255,255)",
                      bodyFontColor: "#858796",
                      titleMarginBottom: 10,
                      titleFontColor: '#6e707e',
                      titleFontSize: 14,
                      borderColor: '#dddfeb',
                      borderWidth: 1,
                      xPadding: 15,
                      yPadding: 15,
                      displayColors: false,
                      intersect: false,
                      mode: 'index',
                      caretPadding: 10,
                      callbacks: {
                        label: function(tooltipItem, chart) {
                          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                          return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                        }
                      }
                    }
                  }
                });
              })
              .catch(function (error) {
              //   vm.answer = 'Error! Could not reach the API. ' + error
              console.log(error)
              });

  </script>


  <!-- Javascript for Graphs -->
  <script src="{{asset('/js/jquery.js')}}"></script>
<script src="{{asset('/js/chart.js')}}"></script>
<script>
// bar chart for users 

function renderChart(data, labels) {
    var ctx = document.getElementById("chart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Users of the System',
                data: data,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 1,
            },
            {
               label: 'moderate',
               data: data,
               backgroundColor: '#FAEBCC'
            },

            {
               label: 'High',
               data: data,
               backgroundColor: '#EBCCD1'
            }
            ]
        },
        options: {
            scales: {
                xAxes:[{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true,
                    ticks: {
                        beginAtZero: true                        
                    }
                }]
            },
            title: {
                display: true,
                text: "User Name Against User ID"
            },
        }
        
    });
}

//line chart for tickets and categories 

function renderLineChart(data, labels) {
    var ctx = document.getElementById("charts").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'tickets',
                data: data,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 1,
                fill:false
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true                        
                    }
                }]
            },
            title: {
                display: true,
                text: "Category_ID Against Ticket Title"
            },
        }
    });
}

// another line chart for status against title

function renderMeChart(data, labels) {
    var ctx = document.getElementById("cool").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'tickets',
                data: data,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 1,
                fill:false
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true                        
                    }
                }]
            },
            title: {
                display: true,
                text: "Status+Id Against Ticket Title"
            },
        }
    });
}

//line chart for tickets created on a specific date.

function renderMeeChart(data, labels) {
    var ctx = document.getElementById("me").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'horizontalBar',
        data: {
            labels: labels,
            datasets: [
                {
                label: 'tickets',
                data: data,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 1,
                fill:false

                }    
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true                        
                    }
                }]
            },
            title: {
                display: true,
                text: "Total number of Tickets"
            },
        }
    });
}

function renderDateChart(data, labels) {
    var ctx = document.getElementById("line").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'tickets',
                data: data,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 1,
                fill:false
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true                        
                    }
                }]
            },
            title: {
                display: true,
                text: "Tickets against Priority_ID"
            },
        }
    });
}

function getMeeData() {   

$.ajax({
    url: '/me',
    type: 'GET',
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
    dataType: 'json',
    success: function (res) {

       // console.log(data);
        var data = [];
        var labels = [];



        for (var i in res) {
            data.push(res[i].id);
            labels.push(res[i].title);

        }

        renderMeeChart(data, labels);
    },
    error: function (data) {

        console.log(data);
    }
});
}


function getDeeData() {   

$.ajax({
    url: '/date',
    type: 'GET',
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
    dataType: 'json',
    success: function (res) {

       // console.log(data);
        var data = [];
        var labels = [];



        for (var i in res) {
            data.push(res[i].priority_id);
            labels.push(res[i].title);

        }

        renderDateChart(data, labels);
    },
    error: function (data) {

        console.log(data);
    }
});
}


function getMeData() {   

$.ajax({
    url: '/status',
    type: 'GET',
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
    dataType: 'json',
    success: function (res) {

       // console.log(data);
        var data = [];
        var labels = [];



        for (var i in res) {
            data.push(res[i].status_id);
            labels.push(res[i].title);

        }

        renderMeChart(data, labels);
    },
    error: function (data) {

        console.log(data);
    }
});
}

function getChartData() {   

    $.ajax({
        url: '/testdata',
        type: 'GET',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        dataType: 'json',
        success: function (res) {

           // console.log(data);
            var data = [];
            var labels = [];



            for (var i in res) {
                data.push(res[i].id);
                labels.push(res[i].name);

            }

            renderChart(data, labels);
        },
        error: function (data) {

            console.log(data);
        }
    });
}

function getLineData() {   

$.ajax({
    url: '/tk',
    type: 'GET',
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
    dataType: 'json',
    success: function (res) {

       // console.log(data);
        var data = [];
        var labels = [];



        for (var i in res) {
            data.push(res[i].category_id);
            labels.push(res[i].title);

        }

        renderLineChart(data, labels);
    },
    error: function (data) {

        console.log(data);
    }
});
}
$(document).ready(function(){
    getChartData();
    getLineData();
    getMeData();
    getDeeData();
    getMeeData();
    
});
// $("#renderBtn").click(
//     function () {
//         getChartData();
//     }
// );

// $(function () {
//   $('.example-popover').popover({
//     container: 'body'
//   })
// })

    </script>
@endpush

                    <!-- <div class="row">
                        <div class="col-md-4">
                            <div class="card text-white bg-dark">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($totalTickets) }}</div>
                                    <div>Total tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-white bg-info">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($openTickets) }}</div>
                                    <div>Open tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-white bg-danger">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($closedTickets) }}</div>
                                    <div>Closed tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-white bg-success">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($In_progressTickets) }}</div>
                                    <div>In-progress Tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div>
                            
                    </div> -->