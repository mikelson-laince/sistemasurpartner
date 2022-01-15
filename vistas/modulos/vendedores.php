<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrar vendedores</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">administrar vendedores</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header" id=" example1">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar vendedor</button>
        </div>
        <div class="card-body">
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Listado de vendedores</h3>
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
                          <th>Estado</th>
                          <th>Ultimo login</th>
                          <th>Cargo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <td>14.156.090</td>
                          <td>0</td>
                          <td>Juan</td>
                          <td>Mansilla</td>
                          <td>juanito</td>
                          <td>inactivo</td>
                          <td>10/01/2022</td>
                          <td>Vendedores</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Rut</th>
                          <th>DV</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>
                          <th>Usuario</th>
                          <th>Estado</th>
                          <th>Ultimo login</th>
                          <th>Cargo</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </section>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Pie de pagina
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->