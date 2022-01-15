<div class=" m-0 vh-100 row justify-content-center align-items-center" style="background: #e9ecef;">
  <div class="login-box">
    <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a  class="h1"><img src="vistas/dist/img/light_logo_surpartner.jpg" alt="Surpartner Logo" class="brand-image" style="width: 200px;" style="opacity: .8"></a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Iniciar Sesión</p>

          <form method="post">

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="contraseña" name="ingPassword" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              
              <!-- /.col -->
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
              </div>
              <!-- /.col -->
            </div>
            <?php 
              $login = new ControladorUsuarios();
              $login -> ctrIngresoUsuario();
            ?>
          </form>

          <!-- /.social-auth-links -->

          <!--
            <div class="social-auth-links text-center mt-2 mb-3">
                <a href="#" class="btn btn-block btn-primary">
                  <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                  <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div> 
          -->
          
          <p class="mb-1">
            <a href="forgot-password.html">¿Has olvidado la contraseña?</a>
          </p>
          <!--
            <p class="mb-0">
              <a href="register.html" class="text-center">Register a new membership</a>
            </p>
          -->
        </div>
        <!-- /.card-body -->
      </div>
    <!-- /.card -->
  </div>
</div>
