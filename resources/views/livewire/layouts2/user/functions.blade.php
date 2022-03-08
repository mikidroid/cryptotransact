
</div>
</div>

<div id="p_loading" class="container p_loading" >
<!--<div class="row">-->
<!--  <div class="col-md-4"></div>-->
<!--  <div class="col-md-4" style="margin-top: 25%; color: #FFF;" align="Center">-->
<!--    <img src="/img/loader.gif" style="height: 30px; width: 30px;">-->
<!--    <br>-->
<!--  </div>-->
<!--</div>-->
</div>

<div id="err" class="alert alert-danger popup_alert_err" ></div>
<div id="suc" class="alert alert-success popup_alert_suc"></div>

<div id="succ" class="container popmsgContainer">
<div class="row wd_row_pad">
<div class="col-md-4">&emps;</div>
<div class="col-md-4 popmsg-mobile pop_msg_col" align="Center">
<div class="panel-heading">
<h3>Message</h3>
<hr>
</div>
<div class="pop_msg_contnt">
<p align="center" class="textd-success">
  <i class="fa fa-check-circle fa-4x"></i><br>
  <span id="succ_msg"></span>
  <br>
</p>
</div>

<div>
<span style="">
<a id="succ_close" href="javascript:void(0)" class="btn btn-success">Okay</a>
</span>
<br><br><br><br>
</div>
<!-- close btn -->
<script type="text/javascript">
$('#succ_close').click( function(){
$('#succ').hide();
});
</script>
<!-- end close btn -->
</div>

</div>
</div>

<div id="errr" class="container popmsgContainer" >
<div class="row wd_row_pad" >
<div class="col-md-4">&emps;</div>
<div class="col-md-4 popmsg-mobile pop_msg_col"  align="Center">
<div class="panel-heading" style="">
<h3>Message</h3>
<hr>
</div>
<div class="pop_msg_contnt">
<p align="center" class="text-danger">
    <i class="fa fa-ban fa-4x"></i><br>
    <span id="errr_msg"></span>
    <br>
</p>
</div>

<div>
<span style="">
<a id="errr_close" href="javascript:void(0)" class="btn btn-danger">Okay</a>
</span>
<br><br><br><br>
</div>
<!-- close btn -->
<script type="text/javascript">
$('#errr_close').click( function(){
$('#errr').hide();
});
</script>
<!-- end close btn -->
</div>

</div>
</div>

<div id="readmsg" class="container popmsgContainer" >
<div class="row wd_row_pad">
<div class="col-md-4">&emps;</div>
<div class="col-md-4 popmsg-mobile pop_read_msg"  align="Center">
<span class="">
    <a id="readmsg_close" href="javascript:void(0)" class="btn btn-danger">X</a>
</span>
<div class="sparkline8-list shadow-reset mg-tb-30" >
  <div class="sparkline8-hd" >
      <div class="main-sparkline8-hd">
          <h1>Read Messages</h1>
      </div>
  </div>
  <div class="">
      <div class="" >
          <div class="scroll pop_scroll_height" >
              <p id="msgC" align="justify">

              </p>
          </div>

      </div>

  </div>

</div>

<!-- close btn -->
<script type="text/javascript">
$('#readmsg_close').click( function(){
$('#readmsg').hide();
});
</script>
<!-- end close btn -->

</div>

</div>
</div>

<!--   Core JS Files   -->


<script src="/atlantis/js/core/popper.min.js"></script>
<script src="/atlantis/js/core/bootstrap.min.js"></script>
<script src="/atlantis/js/core/jquery.3.2.1.min.js"></script>

<!-- jQuery UI -->
<script src="/atlantis/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="/atlantis/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="/atlantis/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="/atlantis/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="/atlantis/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="/atlantis/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="/atlantis/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="/atlantis/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="/atlantis/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="/atlantis/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="/atlantis/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="/atlantis/js/atlantis.min.js"></script>


<script src="/atlantis/js/moment.js"></script>
 <script src="/atlantis/main.js"></script>

<script>
Circles.create({
id:'circles-1',
radius:45,
value:'{{$user->investments}}',
maxValue:100,
width:7,
text:'{{$user->investments}}' ,
colors:['#f1f1f1', '#FF9E27'],
duration:400,
wrpClass:'circles-wrp',
textClass:'circles-text',
styleWrapper:true,
styleText:true
})

Circles.create({
id:'circles-2',
radius:45,
value:'{{$user->withdrawals}}',
maxValue:100,
width:7,
text: '{{$user->withdrawals}}',
colors:['#f1f1f1', '#2BB930'],
duration:400,
wrpClass:'circles-wrp',
textClass:'circles-text',
styleWrapper:true,
styleText:true
})

Circles.create({
id:'circles-3',
radius:45,
value:'{{$user->downlines}}',
maxValue:100,
width:7,
text: '{{$user->downlines}}',
colors:['#f1f1f1', '#F25961'],
duration:400,
wrpClass:'circles-wrp',
textClass:'circles-text',
styleWrapper:true,
styleText:true
})

Circles.create({
id:'circles-logs',
radius:45,
value:'{{$user->activities}}',
maxValue:100,
width:7,
text: '{{$user->activities}}',
colors:['#f1f1f1', '#F25961'],
duration:400,
wrpClass:'circles-wrp',
textClass:'circles-text',
styleWrapper:true,
styleText:true
})

var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

var mytotalIncomeChart = new Chart(totalIncomeChart, {
type: 'bar',
data: {
    labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
    datasets : [{
        label: "Total Income",
        backgroundColor: '#ff9e27',
        borderColor: 'rgb(23, 125, 255)',
        data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
    }],
},
options: {
    responsive: true,
    maintainAspectRatio: false,
    legend: {
        display: false,
    },
    scales: {
        yAxes: [{
            ticks: {
                display: false //this will remove only the label
            },
            gridLines : {
                drawBorder: false,
                display : false
            }
        }],
        xAxes : [ {
            gridLines : {
                drawBorder: false,
                display : false
            }
        }]
    },
}
});

$('#lineChart').sparkline([105,103,123,100,95,105,115], {
type: 'line',
height: '70',
width: '100%',
lineWidth: '2',
lineColor: '#ffa534',
fillColor: 'rgba(255, 165, 52, .14)'
});

</script>

<script type="text/javascript">

    var inv_dates = [];
    var inv_vals = [];

    var inv = '[]' ;
    var js_inv = JSON.parse(inv);

    $.each( js_inv, function( k, val ) {
    // $('#prnt').append(', ' +ky+": "+val['created_at']);
    var dt = moment(new Date(val['created_at'])).format('MM/YY'); //new Date(val['created_at']);
    inv_dates[k] = dt; // dt.getMonth() + '/'+ dt.getFullYear();
    inv_vals[k] = val['capital'];
    });

    var ctx2 = document.getElementById('statisticsChart2').getContext('2d');

    var statisticsChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: inv_dates, //["Jan", "Feb", "Mar"],
        datasets:
        [
            {
                label: "Investment Stats",
                borderColor: '#08C',
                pointBackgroundColor: 'rgba(0, 84, 180, 0.6)',
                pointRadius: 0,
                backgroundColor: 'rgba(0, 84, 220, 0.4)',
                legendColor: '#08C',
                fill: true,
                borderWidth: 2,
                data: inv_vals //[154, 184, 175]
            }

        ]
    },
    options : {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        tooltips: {
            bodySpacing: 4,
            mode:"nearest",
            intersect: 0,
            position:"nearest",
            xPadding:10,
            yPadding:10,
            caretPadding:10
        },
        layout:{
            padding:{left:5,right:5,top:15,bottom:15}
        },
        scales: {
            yAxes: [{
                ticks: {
                    fontStyle: "500",
                    beginAtZero: false,
                    maxTicksLimit: 5,
                    padding: 10,
                },
                gridLines: {
                    drawTicks: false,
                    display: false
                }
            }],
            xAxes: [{
                gridLines: {
                    zeroLineColor: "transparent"
                },
                ticks: {
                    padding: 10,
                    fontStyle: "500"
                }
            }]
        },
        legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="' + chart.id + '-legend html-legend">');
            for (var i = 0; i < chart.data.datasets.length; i++) {
                text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>');
                if (chart.data.datasets[i].label) {
                    text.push(chart.data.datasets[i].label);
                }
                text.push('</li>');
            }
            text.push('</ul>');
            return text.join('');
        }
    }
    });

    var inv_dates = [];
    var inv_vals = [];

    var inv = '[]' ;
    var js_inv = JSON.parse(inv);

    $.each( js_inv, function( k, val ) {
    // $('#prnt').append(', ' +ky+": "+val['created_at']);
    var dt = moment(new Date(val['created_at'])).format('MM/YY'); //new Date(val['created_at']);
    inv_dates[k] = dt; // dt.getMonth() + '/'+ dt.getFullYear();
    inv_vals[k] = val['amount'];
    });

    var ctx = document.getElementById('wd_stats').getContext('2d');

    var wd_stats = new Chart(ctx, {
    type: 'line',
    scaleFontColor: '#CCC',
    data: {
        labels: inv_dates, //["Jan", "Feb", "Mar"],
        datasets:
        [
            {
                label: "Withdrawal Stats",
                borderColor: '#FFF',
                pointBackgroundColor: 'rgba(243, 84, 93, 0.6)',
                pointRadius: 0,
                backgroundColor: 'rgba(243, 84, 93, 0.4)',
                legendColor: '#CCC',
                fill: true,
                borderWidth: 2,
                data: inv_vals //[154, 184, 175]
            }

        ]
    },
    options : {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: false
        },
        tooltips: {
            bodySpacing: 4,
            mode:"nearest",
            intersect: 0,
            position:"nearest",
            xPadding:10,
            yPadding:10,
            caretPadding:10
        },
        layout:{
            padding:{left:5,right:5,top:15,bottom:15}
        },
        scales: {
            yAxes: [{
                ticks: {
                    fontStyle: "500",
                    beginAtZero: false,
                    maxTicksLimit: 5,
                    padding: 10,
                    fontColor: "#CCC",
                },
                gridLines: {
                    drawTicks: false,
                    display: false,
                    color:"rgba(255,255,255,0.5)",
                }
            }],
            xAxes: [{
                gridLines: {
                    zeroLineColor: "#FFF",
                    color:"rgba(255,255,255,0.5)",

                },
                ticks: {
                    padding: 10,
                    fontStyle: "500",
                    fontColor: "#CCC",
                }
            }]
        },
        legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="' + chart.id + '-legend html-legend">');
            for (var i = 0; i < chart.data.datasets.length; i++) {
                text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>');
                if (chart.data.datasets[i].label) {
                    text.push(chart.data.datasets[i].label);
                }
                text.push('</li>');
            }
            text.push('</ul>');
            return text.join('');
        }
    }
    });


    </script>

<script >
$(document).ready(function() {
$('#basic-datatables').DataTable({
});

$('#multi-filter-select').DataTable( {
    "pageLength": 5,
    initComplete: function () {
        this.api().columns().every( function () {
            var column = this;
            var select = $('<select class="form-control"><option value=""></option></select>')
            .appendTo( $(column.footer()).empty() )
            .on( 'change', function () {
                var val = $.fn.dataTable.util.escapeRegex(
                    $(this).val()
                    );

                column
                .search( val ? '^'+val+'$' : '', true, false )
                .draw();
            } );

            column.data().unique().sort().each( function ( d, j ) {
                select.append( '<option value="'+d+'">'+d+'</option>' )
            } );
        } );
    }
});

// Add Row
$('#add-row').DataTable({
    "pageLength": 5,
});

var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

$('#addRowButton').click(function() {
    $('#add-row').dataTable().fnAddData([
        $("#addName").val(),
        $("#addPosition").val(),
        $("#addOffice").val(),
        action
        ]);
    $('#addRowModal').modal('hide');

});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
$('#pay_with_bank_dep').on('click', function(){
    $('#bank_dets').toggle(1000);
});

$('#bank_deposit_cont').on('click', function(){
    $('#bank_deposit_cont_dets').show(1000);
});

});
</script>

</body>

</html>
