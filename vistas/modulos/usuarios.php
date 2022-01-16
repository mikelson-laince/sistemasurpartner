<div class="wrapper">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrar usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">administrar usuarios</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar usuario</button>
        </div>
        <div class="card-body">
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Listado de usuarios</h3>
                    </div>                    
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Rut</th>
                          <th>DV</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>
                          <th>Usuario</th>
                          <th>Imagen</th>
                          <th>Estado</th>
                          <th>Último login</th>
                          <th>Cargo</th>
                          <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>19.256.895</td>
                          <td>5</td>
                          <td>Mikelson Junior</td>
                          <td>Laince</td>
                          <td>Jayprog</td>
                          <td><img src="vistas/dist/img/avatar.png" class="img-circle" width="40px"></td>
                          <td><button class="btn btn-success btn-xs">Activado</button></td>
                          <td>12/01/2022 12:05:30</td>
                          <td>Administrador</td>
                          <td>
                            <div class="btn-group"> 
                                <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                            </div>
                          </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Rut</th>
                          <th>DV</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>
                          <th>Usuario</th>
                          <th>Imagen</th>
                          <th>Estado</th>
                          <th>Último login</th>
                          <th>Cargo</th>
                          <th>Acciones</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Pie de pagina surpartner
        </div>
        <!-- /.card-footer-->
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- Modal para agregar formulario -->
<div class="modal fade" id="modalAgregarUsuario">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
          <div class="modal-header" style="background:#f8f9fa">
          <h4 class="modal-title">Agregar usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
            <!-- Input addon -->
              <div class="card card-info">
                <div class="card-body">

                  <!-- iniput para el nombre -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="email" class="form-control" placeholder="nombre" name="nombre" required>
                  </div>

                  <!-- iniput para el usuario -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Usuario" name="usuario" required>
                  </div>

                  <!-- iniput para el nombre -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="password" name="password" required>
                  </div>

                  <!-- Select para asignar cargo o funccion  -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                      <select class="form-control input-lg" name="cargo">
                        <option value="Administrador">Administrador</option>
                        <option value="Jefe Bodega">Jefe Bodega</option>
                        <option value="Supervisor Ventas">Supervisor Ventas</option>
                        <option value="Bodeguero">Bodeguero</option>
                        <option value="vendedor">Vendedor</option>
                      </select>
                    </div>
                  </div>

                  <!-- Subir foto  -->
                  <div class="form-group">
                    <div class="panel">SUBIR IMAGEN</div>

                    <input type="file" id="imagen" name="imagen">

                    <p class="help-block">Peso máximo de la imagen 200 MB</p>
                    <img src="vistas/dist/img/avatar.png" class="img-circle" width="64px">
                  </div>           
                </div>
              </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
      </form>
    </div>
  </div>
</div>