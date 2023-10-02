<!--
<script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>

</body>
</html>
-->


            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                All Rights Reserved by Freedash. Designed and Developed by <a
                    href="https://adminmart.com/">Adminmart</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/assets/libs/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="<?php echo base_url(); ?>/dist/js/app-style-switcher.js"></script>
    <script src="<?php echo base_url(); ?>/dist/js/feather.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/dist/js/sidebarmenu.js"></script>
    <script src="<?php echo base_url(); ?>/dist/js/custom.min.js"></script>

    <!-- C3.js and Chartist.js -->
    <script src="<?php echo base_url(); ?>/assets/extra-libs/c3/d3.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/extra-libs/c3/c3.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- jQuery VectorMap -->
    <script src="<?php echo base_url(); ?>/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Dashboard JavaScript -->
    <script src="<?php echo base_url(); ?>/dist/js/pages/dashboards/dashboard1.min.js"></script>

    <!-- Popper.js -->
    <script src="<?php echo base_url(); ?>/assets/libs/popper.js/dist/umd/popper.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>/assets/extra-libs/sparkline/sparkline.js"></script>

    <!-- Knob -->
    <script src="<?php echo base_url(); ?>/assets/extra-libs/knob/jquery.knob.min.js"></script>
    <script>
        $(function () {
            $('[data-plugin="knob"]').knob();
        });
    </script>

    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>/dist/js/pages/datatable/datatable-basic.init.js"></script>

    <!-- Morris.js 
    <script src="<?php echo base_url(); ?>/assets/libs/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/libs/morris.js/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>/dist/js/pages/morris/morris-data.js"></script> -->

    <!--
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'bar',
                data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
                },
                options: {
                scales: {
                    y: {
                    beginAtZero: true
                    }
                }
                }
            });
            
    </script> -->

    <!-- En tu vista graficas.php -->
    <!-- ... Código anterior ... -->

    <script>
        // Obtén los datos de PHP y conviértelos a un array JavaScript
        var datos = <?php echo json_encode($datos); ?>;
        
        // Prepara los datos para el gráfico
        var fechas = [];
        var temperaturas = [];
        var humedades = [];

        for (var i = 0; i < datos.length; i++) {
            // Formatea la fecha para mostrar solo la hora y los minutos (HH:mm)
            var fecha = new Date(datos[i].fechaHoraMedición);
            var horaMinutos = fecha.getHours() + ':' + (fecha.getMinutes() < 10 ? '0' : '') + fecha.getMinutes();
            fechas.push(horaMinutos);
            
            temperaturas.push(datos[i].temperatura);
            humedades.push(datos[i].humedad);
        }

        // Crea un contexto para el canvas
        var ctx = document.getElementById('grafico').getContext('2d');

        // Crea un gráfico de línea
        var grafico = new Chart(ctx, {
            type: 'line',
            data: {
                labels: fechas, // Etiquetas en el eje X
                datasets: [
                    {
                        label: 'Temperatura',
                        data: temperaturas, // Datos de temperatura
                        borderColor: 'rgba(95,118,232,255)', // Color de la línea
                        borderWidth: 2 // Ancho de la línea
                    },
                    {
                        label: 'Humedad',
                        data: humedades, // Datos de humedad
                        borderColor: 'rgba(1,202,241,255)',
                        borderWidth: 2
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>