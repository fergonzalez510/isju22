   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Agregar Usuario</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" id="add_user">
										<div class="control-group">
                                          <div class="controls">
										  <label>Estado</label>
										  <select name="estado" placeholder = "Categoria">
												<option></option>
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
										  <label>Primer Nombre</label>
                                           <input class="input focused"  name="nombre" id="focusedInput" type="text" placeholder = "Primer Nombre" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
										  <label>Apellidos</label>
                                            <input class="input focused"  name="apellido" id="focusedInput" type="text" placeholder = "Apellido" required>
                                          </div>
                                        </div>
										

											<div class="control-group">
                                          <div class="controls">
												<button  data-placement="right" title="Click para Salvar" id="save" name="save" class="btn btn-inverse"><i class="icon-save icon-large"></i> Guardar</button>
														<script type="text/javascript">
														$(document).ready(function(){
															$('#save').tooltip('show');
															$('#save').tooltip('hide');
														});
														</script>
                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
		<script>
			jQuery(document).ready(function($){
				$("#add_user").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "guardar_usuario.php",
						data: formData,
						success: function(html){
							$.jGrowl("Class Successfully  Added", { header: 'User Added' });
							window.location = 'usuarios.php';  
						}
					});
				});
			});
			</script>
					