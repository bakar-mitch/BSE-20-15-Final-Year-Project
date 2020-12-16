@extends('layouts.app')

@section('content')
<!--<div class="container">-->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">My graphs</div>

                <div class="card-body">
                    
                                <!-- Chart's container -->
                    <div id="" style="height: 300px;">
                    <canvas id="chart"></canvas>
                </div>
                <div id="" style="height: 300px;">
                    <canvas id="chart"></canvas>
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
    <div class="row ">
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
    </div>

   
    
</div>
@endsection
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
