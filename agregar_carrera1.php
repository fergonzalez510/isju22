   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"></i> Agregar Curso</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" id="add_class1">
										<div class="control-group">
                                          <div class="controls">
										  <label>Categoria de Curso</label>
										  <select name="curso" placeholder = "Curso">
												<option></option>
												<option value ="primer_año">1er Año </option>
												<option value ="segundo_año">2do Año </option>
												<option value ="tercer_año">3er Año </option>
										  </select>
                                            
                                          </div>
                                        </div>
										 
										<div class="control-group">
                                          <div class="controls">
										  <label>Curso</label>
                                           <input class="input focused"  name="carrera_nombre" id="focusedInput" type="text" placeholder = "Nombre Carrera" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
										  <label>Cuota mes</label>
                                            <input class="input focused"  name="fee" id="focusedInput" type="text" placeholder = "Cuota" required>
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
				$("#agregar_carrera1").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "guardar_carrera.php",
						data: formData,
						success: function(html){
							$.jGrowl("Class Successfully  Added", { header: 'Class Added' });
							window.location = 'agregar_carrera.php';  
						}
					});
				});
			});
			</script>
					