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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Configuracion</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Perfil</li>
                                    <li class="breadcrumb-item text-muted" aria-current="page">Configuracion</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Mi Perfil</h4>
                                                

                                <form class="mt-4" method="POST" action="">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <td class="border-top-0 px-2 py-4">
                                                <div class="d-flex no-block align-items-center">
                                                    <div class="me-3"><img
                                                        src="<?php echo base_url(); ?>/assets/images/users/widget-table-pic1.jpg"
                                                        alt="user" class="rounded-circle" width="45"
                                                        height="45" /></div>
                                                    <div class="">
                                                        <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna
                                                                Gover</h5>
                                                        <span class="text-muted font-14">hgover@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <br>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label>Usuario</label>
                                                <input name="" id="" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label>Contraseña</label>
                                                <input name="password" id="password" class="form-control" type="password" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label>Confirmar Contraseña</label>
                                                <input name="confirm_password" id="confirm_password" class="form-control" type="password" placeholder="">
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Mi Perfil</h4>
                                <form class="mt-4" method="POST" action="<?php echo site_url('usuario/guardarusuario2'); ?>">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label>Nombres</label>
                                                <input name="name" id="name" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label>Primer Apellido</label>
                                                <input name="firstName" id="firstName" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label>Segundo Apellido</label>
                                                <input name="lastName" id="lastName" class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label>Email</label>
                                                <input name="email" id="email" class="form-control" type="email" placeholder="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

