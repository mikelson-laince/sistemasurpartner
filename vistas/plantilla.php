<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SurPartner | Tablero</title>
  <link rel="icon" href="vistas/img/plantilla/icono-dark.png" alt="icono SurPartner">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="vistas/plugins/jqvmap/jqvmap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vistas/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="vistas/plugins/summernote/summernote-bs4.min.css">
</head>
  <body class="hold-transition sidebar-mini">  
    <?php
      if (isset($_SESSION["iniciarSession"]) && $_SESSION["iniciarSession"] == "ok"){
          echo '<div class="wrapper">';
            echo '<!-- Preloader -->
                  <div class="preloader flex-column justify-content-center align-items-center">
                    <img class="animation__shake" src="vistas/dist/img/dark_logo_surpartner.jpg" alt="SurPartner Distribución" width="250">
                  </div>';
              /* Cabecera */
              include "modulos/cabecera.php";

              /* Menu Latera */
              include "modulos/menu.php";

              /* Contenido Principal */

              if (isset($_GET["ruta"])) {

                if ($_GET["ruta"] == "principal" ||
                    $_GET["ruta"] == "usuarios" ||
                    $_GET["ruta"] == "clientes" ||
                    $_GET["ruta"] == "vendedores" ||
                    $_GET["ruta"] == "familias" ||
                    $_GET["ruta"] == "subfamilias" ||
                    $_GET["ruta"] == "productos" ||
                    $_GET["ruta"] == "salir"){
                  include "modulos/".$_GET["ruta"].".php";

                }else{
                  include "modulos/404.php";
                }
              }else{
                include "modulos/principal.php";
              }

              /* footer */
              include "modulos/footer.php";           
          echo '</div>';
        }else{
          include "modulos/login.php"; 
      }
    ?>
    <!-- jQuery -->
    <script src="vistas/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="vistas/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="vistas/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="vistas/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="vistas/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="vistas/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="vistas/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="vistas/plugins/moment/moment.min.js"></script>
    <script src="vistas/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="vistas/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="vistas/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="vistas/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- SurPartner -->
    <script src="vistas/dist/js/adminlte.js"></script>
    <!-- purposes -->
    <script src="vistas/dist/js/demo.js"></script>
    <!-- Tablero -->
    <script src="vistas/dist/js/pages/dashboard.js"></script>
    <script src="vistas/dist/js/pages/plantilla.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="vistas/plugins/jszip/jszip.min.js"></script>
    <script src="vistas/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="vistas/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  </body>
</html>
