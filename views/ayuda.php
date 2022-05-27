<?php include('../db.php'); ?>

<?php include('../fijos/header.php'); ?>

<?php include("../includes/user_basic/pannel_left_user_basic.php") ?>

<?php include('../fijos/Pannel_right_header.php'); ?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 style="text-align:center;">Mis Tickets</h3>
        </div>
        <div class="card-body">
            <div class="table-reponsive dataTables_info" id="bootstrap-data-table_info" role="status" aria-live="polite">                        
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead style="text-align:center;">
                        <tr>
                            <th>Fecha</th>
                            <th>Titulo </th>
                            <th>Area</th>
                            <th>Dead Line</th>
                            <th>Status</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            $usuario = $_SESSION['user']; 
                            $conn_builit = mysqli_connect(
                                '31.170.161.22',
                                'u101685278_buildit',
                                'Pachiman2020',
                                'u101685278_buildit'
                              );

                            $query = "SELECT * FROM `ticket_ttl`  WHERE `user` = '$usuario'";
                            $result = mysqli_query($conn_builit, $query);    
                            while($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                            <td style=" font-size: 0.7rem;"><?php echo $row['Created_at']; ?></td>
                            <td style=" font-size: 0.8rem;"><?php echo $row['title']; ?></td>
                            <td style=" font-size: 0.8rem;"><?php echo $row['area']; ?></td>
                            <td style=" font-size: 0.8rem;"><?php echo $row['dead_line'];?></td>
                            <td style=" font-size: 0.8rem;"><?php echo $row['status']; ?></td>
                            <td style=" width:15%;">
                                <div style="margin: 0 10% 0 10%;" class="row">
                                    <a title="Marcar como Resulto" style="margin: 0% 0% 0% 5%;" href="../views/resuelto.php?id=<?php echo $row['id']?>" class="btn btn-success">
                                        <i class="fa fa-check"></i>
                                    </a>
                                    <a  style="margin: 0% 0% 0% 5%;" href="../views/detalle_ticket.php?id=<?php echo $row['id']?>" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 style="text-align:center;">Tickets</h3>
        </div>
        <div class="card-body">
        <p style="text-align: center;">Describa con detalle su problema.</p>
            <form action="ayuda_enviar.php" method="post" class="form-horizontal">
                <div class="row form-group" style="text-align: center;">
                    <div class="col-sm-2">
                        <label for="selectSm" class=" form-control-label">Seleccionar Area</label>
                    </div>
                    <div class="col-sm-3">
                        <select name="area[]" id="selectSm" class="form-control-sm form-control">
                            <option value="">Area:</option>
                            <option value="Instructivos">Instructivos</option>
                            <option value="Base de Datos">Base de Datos</option>
                            <option value="Formularios">Formularios</option>
                            <option value="Reportes">Reportes</option>
                            <option value="Asignaciones">Asignaciones</option>
                            <option value="Documentacion">Documentación</option>

                        </select>
                    </div>
                    <div class="col-sm-2">
                        <label for="selectSm" class="form-control-label">Dead Line:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="date" name="deadline" class="form-control">
                    </div>
                </div>
                <div class="row form-group" style="text-align: center;">
                    
                    <div class="col-sm-2">
                        <label for="text" class="form-control-label">Título:</label>
                    </div>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="title" placeholder="Descripcion rápida del problema">
                    </div>
                </div>
                <div class="row form-group" style="text-align: center;">
                    
                    <div class="col-sm-2">
                        <label for="textarea-input" class="form-control-label">Mensaje</label>
                    </div>
                    <div class="col-sm-8">
                        <textarea name="description"  placeholder="Contenido del Problema" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                        <button type="submit" name="enviar" class="btn btn-primary col-sm-2 mx-auto">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="//code.tidio.co/64clap1geeskjukzxzptkrvxi9xvooro.js" async></script>

<footer class="site-footer">
    <div class="footer-inner">
        <div class="d-flex">
            <div style="text-align:center;" class="col-sm-7 mx-auto">
               
                <hr style="color:black; width:80%;">
                <h6> <small> Tecnología programada por </small><a href="https:/rail.ar" target="_blank">RailCode</a><small> para BOTZero :: Software de Logística.</small> </h6>
            </div>
        </div>
    </div>
</footer>

</div><!-- /#right-panel -->

 
<!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/lib/data-table/datatables.min.js"></script>
    <script src="../assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="../assets/js/lib/data-table/jszip.min.js"></script>
    <script src="../assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="../assets/js/init/datatables-init.js"></script>

    <script type="text/javascript">
            $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script>
            var jwt = require("jsonwebtoken");

            var METABASE_SITE_URL = "http://localhost:3000";
            var METABASE_SECRET_KEY = "c20f7f538f103266735ea91f2d5208fbc4bf80c1110dc280cd76882a10e45e58";

            var payload = {
            resource: { question: 1 },
            params: {},
            exp: Math.round(Date.now() / 1000) + (10 * 60) // 10 minute expiration
            };
            var token = jwt.sign(payload, METABASE_SECRET_KEY);

            var iframeUrl = METABASE_SITE_URL + "/embed/question/" + token + "#bordered=true&titled=true";
    </script>


    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="../assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="../assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function ($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [
                { label: "Desktop visits", data: [[1, 32]], color: '#5c6bc0' },
                { label: "Tab visits", data: [[1, 33]], color: '#ef5350' },
                { label: "Mobile visits", data: [[1, 35]], color: '#66bb6a' }
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [
                { label: "Direct Sell", data: [[1, 65]], color: '#5b83de' },
                { label: "Channel Sell", data: [[1, 35]], color: '#00bfa5' }
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                }, grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2, 4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'), [{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
                {
                    series: {
                        lines: {
                            show: true,
                            lineColor: '#fff',
                            lineWidth: 2
                        },
                        points: {
                            show: true,
                            fill: true,
                            fillColor: "#ffffff",
                            symbol: "circle",
                            radius: 3
                        },
                        shadowSize: 0
                    },
                    points: {
                        show: true,
                    },
                    legend: {
                        show: false
                    },
                    grid: {
                        show: false
                    }
                });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    series: [
                        [0, 18000, 35000, 25000, 22000, 0],
                        [0, 33000, 15000, 20000, 15000, 300],
                        [0, 15000, 28000, 15000, 30000, 5000]
                    ]
                }, {
                    low: 0,
                    showArea: true,
                    showLine: false,
                    showPoint: false,
                    fullWidth: true,
                    axisX: {
                        showGrid: true
                    }
                });

                chart.on('draw', function (data) {
                    if (data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById("TrafficChart");
                ctx.height = 150;
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
                        datasets: [
                            {
                                label: "Visit",
                                borderColor: "rgba(4, 73, 203,.09)",
                                borderWidth: "1",
                                backgroundColor: "rgba(4, 73, 203,.5)",
                                data: [0, 2900, 5000, 3300, 6000, 3250, 0]
                            },
                            {
                                label: "Bounce",
                                borderColor: "rgba(245, 23, 66, 0.9)",
                                borderWidth: "1",
                                backgroundColor: "rgba(245, 23, 66,.5)",
                                pointHighlightStroke: "rgba(245, 23, 66,.5)",
                                data: [0, 4200, 4500, 1600, 4200, 1500, 4000]
                            },
                            {
                                label: "Targeted",
                                borderColor: "rgba(40, 169, 46, 0.9)",
                                borderWidth: "1",
                                backgroundColor: "rgba(40, 169, 46, .5)",
                                pointHighlightStroke: "rgba(40, 169, 46,.5)",
                                data: [1000, 5200, 3600, 2600, 4200, 5300, 0]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13], [8, 5], [10, 7], [12, 4], [14, 6], [16, 15], [18, 9], [20, 17], [22, 7], [24, 4], [26, 9], [28, 11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>
    
</body>
</html>