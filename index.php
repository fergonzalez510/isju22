<?php include('header.php'); ?>
  <body id="login">
    <div class="container">
  <?php include('navbar_index.php'); ?>
<br/><br/><br/><br/>
       
       <center>
        <form>
           <img width="40%" src="default/img/logoISJU.png"/>
          <h1 style="font-size: 60px; color: white;">SISTEMA ISJ</h1>
        </form>
        
        <?php
            $Object = new DateTime();  
            $Object->setTimezone(new DateTimeZone("America/Argentina/Buenos_Aires"));
            $DateAndTime = $Object->format("d-m-Y h:i:s a");  
            echo " $DateAndTime.\n";
        ?>

       </center>

    <form id="login_form" class="form-signin" method="post">
        <h3 class="form-signin-heading"><i class="icon-lock"></i> Iniciar Sesion</h3>
        <input type="text" class="input-block-level" id="nombreusuario" name="nombreusuario" placeholder="Usuario" required>
        <input type="password" class="input-block-level" id="contraseña" name="contraseña" placeholder="Contraseña" required>
        
        <div class="g-recaptcha" data-sitekey="6LfpgWAeAAAAAADUCtByJMuro5s1qvyXOxhvBNKI"></div>
        
        <br>

        <button data-placement="top" title="Click para iniciar sesion" id="login1" name="login" class="btn btn-success" type="submit"><i class="icon-signin icon-large"></i> Ingresar</button>
                                <script type="text/javascript">
                    $(document).ready(function(){
                      $('#login1').tooltip('show');
                      $('#login1').tooltip('hide');
                    });
                  </script>
  </form>
                  <script>
                        jQuery(document).ready(function(){
                        jQuery("#login_form").submit(function(e){
                            e.preventDefault();
                            var formData = jQuery(this).serialize();
                            $.ajax({
                              type: "POST",
                              url: "login.php",
                              data: formData,
                              success: function(html){
                               if (html == 'true_admin'){
                                $.jGrowl("Cargando por favor espere......", { sticky: true });
                                $.jGrowl("bienvenido al Sistema ", { header: 'Acceso Permitido' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'tablero.php'  }, delay);  
                              }else
                              if (html == 'true_prec'){
                                $.jGrowl("Cargando por favor espere......", { sticky: true });
                                $.jGrowl("Bienvenido al Sistema", { header: 'Acceso Permitido' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'preceptor/tablero.php'  }, delay);  
                              }else
                              if (html == 'true_serc'){
                                $.jGrowl("Cargando por favor espere......", { sticky: true });
                                $.jGrowl("Bienvenido al Sistema", { header: 'Acceso Permitido' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'secretaria/tablero.php'  }, delay);  
                              }else
                              if (html == 'true_prof'){
                                $.jGrowl("Cargando por favor espere......", { sticky: true });
                                $.jGrowl("Bienvenido al Sistema", { header: 'Acceso Permitido' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'profesor/tablero.php'  }, delay);  
                              }else
                              if (html == 'true_alum'){
                                $.jGrowl("Cargando por favor espere......", { sticky: true });
                                $.jGrowl("Bienvenido al Sistema", { header: 'Acceso Permitido' });
                              var delay = 1000;
                                setTimeout(function(){ window.location = 'alumno/tablero.php'  }, delay);  
                              }else
                              {
                              $.jGrowl("Por favor revise su Usuario y Contraseña", { header: 'Inicio de Sesion fallido' });
                              }
                              }
                            });
                            return false;
                          });
                  });

                  </script>
                  <div class="s-background animated fadeIn">

  <!-- Efecto degradado
  ============================================= -->
  <div class="gradients">
        <div class="blue"></div>
  </div>
      <img class="slider" src="default/img/isj1.jfif">
    <img class="slider" src="default/img/isj3.jfif">
    <img class="slider" src="default/img/4.jpg">
    <img class="slider" src="default/img/5.jpg">
  <img class="slider" src="default/img/isj2.jfif">
</div>
<?php include('footer_index.php'); ?>
    </div> <!-- /container -->
<?php include('script.php'); ?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

  </body>
</html>