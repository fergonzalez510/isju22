    <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
                    </a>
                    <span class="brand" href="#"><a href="https://www.facebook.com/isjujuy"> Isj </a> | BIENVENIDO ALUMNO</span>
                    <div id="coll" class="nav-collapse collapse">
                        <ul class="nav pull-right">
						
                      

                            <li class="dropdown">
                                <a href="#" id="name123" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php echo $row['nombre']." ".$row['apellido'];  ?> <i class="caret"></i></a>
                                <ul class="dropdown-menu">
									<!--  <li><a class="jkl" tabindex="-1" href="#">Profile</a></li> -->
									<li>
                                        <a tabindex="-1" href="cambio_contraseña.php" class="jkl">Cambiar Contrase&#241;a</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a  class="jkl" tabindex="-1" href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Cerrar Sesi&#243;n</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
    </div>