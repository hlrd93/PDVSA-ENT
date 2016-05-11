
	<?php include_once('../template/cabecera.php'); ?>

	<?php include_once('../template/navegador.php'); ?> 

	<?php include_once('../template/sidebar.php'); ?> 

	<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Pizarra <small>Resumen de Estadisticas</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Inicio
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /#wrapper -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <canvas id="myChart" width="200" height="200"></canvas>
                    </div>
                </div>
            </div>

        <script type="text/javascript" src="../bower_components/Chart.js/Chart.js"></script>
        <script>
            
            $(document).ready(function() {

                    var chuto = "";
                    var cisterna = "";
                    var conductor = "";

                    $.getJSON('../pizarra/estadisticas.php', function(data) {
                        /* data will hold the php array as a javascript object */
                        $.each(data, function(clave, valor) {

                                chuto = valor.chuto; 
                                cisterna = valor.cisterna;
                                conductor = valor.conductor;
                        
                        });

                    var ctx = $("#myChart");

                    var data = {
                        labels: [
                            chuto       +" Chutos",
                            cisterna    +" Cisternas",
                            conductor   +" Conductores"
                        ],
                        datasets: [
                            {
                                data: [chuto, cisterna, conductor],
                                backgroundColor: [
                                    "#FF002C",
                                    "#36A2EB",
                                    "#FFBE00"
                                ],
                                hoverBackgroundColor: [
                                    "#F93135",
                                    "#36A2EB",
                                    "#FFCE56"
                                ]
                            }]
                    };
                
                    var myDoughnutChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: data
                    });
        
                    });
            });
        </script>
    
    <?php include_once('../template/footer.php'); ?>