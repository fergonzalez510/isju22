<?php include('header.php'); ?>
<?php include('sesion.php'); ?>
<?php include('notificaciones2/php/conexion.php'); ?>
<?php include('notificaciones2/php/agregarnotificacion.php'); ?>
<?php include('dbcon.php'); ?>



    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://collectivecloudperu.com/blogdevs/wp-content/uploads/2017/09/cropped-favicon-1-32x32.png">
    <link href="css/starter-template.css" rel="stylesheet">
    <link href="notificaciones2/css/estilos.css" rel="stylesheet">


    <body >

		<?php include('navbar.php'); ?>
        <center><img src="images/logoISJU.png"></center>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('barra_lateral_estudiantes.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
                         require_once 'dbcon.php';
							$query= mysqli_query($connection,"select * from estudiantes")or die(mysqli_error());
							$count = mysqli_num_rows($query);
						 	
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Mensajes </div>
                                <!--<div class="muted pull-right">
									Numero de Estudiantes: <span class="badge badge-info"><?php  echo $count;  ?></span>
								</div> -->
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch">Lista de Estudiantes</h2>
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
                            Nuevas Tecnoligias <a href="https://www.facebook.com/profile.php?id=1412177478" target="_blank"> ISJ 2022</a>
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
                            url: "sistematpfinaisju/notificaciones2.php",
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
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>	
</html>