   <div class="row-fluid">
       <!--ESTE BOTON COMENTADO ES PARA AGREGAR USUARIOS-->     
       <!--<a href="usuarios.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Agregar Usuario</a>-->
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Editar Usuario </div>
                            </div>
							<?php
							$query = mysqli_query($connection,"select * from usuarios where usuarioid = '$get_id'");
							$row = mysqli_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                        <div class="controls">
                          <label>Estado</label>
                          <select name="estado" placeholder = "Categoria">
                            <option><?php echo $row['estado'];?></option>
                            <option value ="administrator">Administrador</option>
                            <option value ="secretaria">Secretaria</option>
                            <option value ="preceptor">Preceptor</option>
                            <option value ="profesor">Profesor</option>
                            <option value ="alumno">Alumno</option>
                          </select>
                                            
                        </div>
                     </div>
										<div class="control-group">
                          <div class="controls">
                          <label>Nombre</label>
                              <input name="nombre" value="<?php echo $row['nombre']; ?>" class="input focused" id="focusedInput" type="text" required>
                           </div>
                    </div>
										
										<div class="control-group">
                            <div class="controls">
                            <label>Apellido</label>
                              <input name="apellido" value="<?php echo $row['apellido']; ?>" class="input focused" id="focusedInput" type="text" required>
                            </div>
                    </div>

											<div class="control-group">
                          <div class="controls">
                          <button  data-placement="right" title="Click para Salvar" id="save" name="actualizar" class="btn btn-inverse"><i class="icon-save icon-large"></i> Guardar</button>
                           </div>
                      </div>
                    
              </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                        <?php
                           if (isset($_POST['actualizar'])){
                                 $estado= $_POST['estado'];
                                 $nombre = $_POST['nombre'];
                                 $apellido = $_POST['apellido'];
                                 $nombreusuario = $nombre.'.'.$apellido;

                                   mysqli_query($connection,"update usuarios set nombreusuario = '$nombreusuario',nombre ='$nombre', apellido='$apellido',estado='$estado' where usuarioid = '$get_id' ");

                        ?>

                                  <script>
                                   window.location = "usuarios.php";
                                  </script>
                        <?php
                          }
                          ?>