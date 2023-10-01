    <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Basic Initialisation</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-end">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 23</option>
                                <option value="1">July 23</option>
                                <option value="2">Jun 23</option>
                            </select>
                        </div>
                    </div>
                    <?php echo "Hola: ".$this->session->userdata('nombre'); ?>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Humedad y Temperatura</h4>
                                <!--
                                <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                                    need to do to use it with your own tables is to call the construction
                                    function:<code> $().DataTable();</code>. You can refer full documentation from here
                                    <a href="https://datatables.net/">Datatables</a></h6>-->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Nro.</th>
                                                <th>Humedad</th>
                                                <th>Temperatura</th>
                                                <th>Fecha y Hora</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <?php
                                            $indice=1; //le damos valor al indice para no mostrar el id

                                            foreach($medicion->result() as $row){  //$estudiante se rescata del controlador estudiante con el mismo nombre que esta en el array asociativo $row solo es una variable que almacena datos 
                                            ?>

                                            <tr>
                                                <th scope="row"><?php echo $indice; ?></th>
                                                <td><?php echo $row->temperatura; ?></td>   <!--nombre es el parametro de BD y debe ser escrito como en la BD y $row es el dato almacenado momentaneamente-->
                                                <td><?php echo $row->humedad; ?></td>
                                                <td><?php echo formatearFecha($row->fechaHoraMedición); ?></td>
                                                <!--<td>
                                                    
                                                <?php
                                                    echo form_open_multipart('estudiante/modificar');
                                                ?>
                                                <input type="hidden" name="idEstudiante" value="<?php echo $row->idEstudiante; ?>">
                                                <button type="submit" class="btn btn-primary btn-xs">Modificar</button>
                                                <?php
                                                    echo form_close();
                                                ?>
                                                </td>
                                                <td>
                                                <?php
                                                    echo form_open_multipart('estudiante/eliminarbd');
                                                ?>
                                                <input type="hidden" name="idEstudiante" value="<?php echo $row->idEstudiante; ?>">
                                                <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                                                <?php
                                                    echo form_close();
                                                ?>
                                                </td>-->
                                            </tr>

                                            <?php
                                            $indice++;
                                            }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nro.</th>
                                                <th>Humedad</th>
                                                <th>Temperatura</th>
                                                <th>Fecha y Hora</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            