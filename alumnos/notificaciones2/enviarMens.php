
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://collectivecloudperu.com/blogdevs/wp-content/uploads/2017/09/cropped-favicon-1-32x32.png">

    <title>Sistema de Notificaciones Instituto Superior Jujuy </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados para esta plantilla  -->
    <link href="css/starter-template.css" rel="stylesheet">

    <link href="css/estilos.css" rel="stylesheet">

  </head>
  
  <?php include('header.php'); ?>
  <?php include('dbcon.php'); ?>

  <body>

    <div class="container">

      <div class="starter-template">

      <?php include('navbar.php'); ?>
      
      <br>
      <br>

          <h1>Sistema de Notificaciones Insituto Superior Jujuy </h1>

          <p class="lead">

              <form name="frmNotification" id="frmNotification" action="php/agregarnotificacion.php" method="post" >
                <div class="form-group">
                  <label for="autor">Autor </label>
                  <input type="text" class="form-control" name="autor" id="autor" placeholder="Ingresa Autor" required>
                </div>
                <div class="form-group">
                  <label for="mensaje">Mensaje </label>
                  <textarea class="form-control" name="mensaje" id="mensaje" rows="3" placeholder="Mensaje" required></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" name="add" id="btn-send" value="Enviar">
                </div>

              </form>

          </p>

        </div>

    </div><!-- /.container -->

    <section class="credito">
      <div align="center">
          Desarrollado por <a href="https://www.facebook.com/profile.php?id=1412177478" target="_blank">Alumno Fernando Daniel Gonzalez</a>
      </div>
    </section>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      function myFunction() {
        $.ajax({
          type: "POST",
          url: "php/notificaciones2.php",
          processData:false,
          success: function(data){
            $("#notification-count").remove();
            $("#notification-latest").show();
            $("#notification-latest").html(data);
          },
          error: function(){}
        });
      }

      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });

      <?php include('footer_index.php'); ?>


    </script>

  </body>
</html>