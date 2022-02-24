<?php include('header.php'); ?>
<?php include('sesion.php'); ?>
 <?php       require_once 'dbcon.php';?>
    <body >
		<?php include('navbar.php') ?>
                <center><img src="images/logoISJU.png"></center>
        <div class="container-fluid" id="">
            <div class="row-fluid">
					<?php include('barra_lateral_tablero.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <!--sentencia de conteo " class where students.class = class.class_name AND class.category ='Secondary'"-->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">ESTADISTICAS PARA EL ALUMNO</div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
								<?php 
								    $query_students = mysqli_query($connection,"select * from carrera");
								    $count_students = mysqli_num_rows($query_students);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_students; ?>"><?php echo $count_students; ?></div>
                                    <div class="chart-bottom-heading"><strong>ESTUDIANTES AMBAS CARRERAS</strong>
                                </div>
                                </div>
								
								<?php 
								    $query_class = mysqli_query($connection,"select * from carrera where carrera_nombre = 'software'");
								    $count_class = mysqli_num_rows($query_class);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_class; ?>"><?php echo $count_class; ?></div>
                                    <div class="chart-bottom-heading"><strong>TEC. SUP. EN DES. DE SOFT.</strong>

                                    </div>
                                </div>
								
                                <?php 								
								    $query_nursery = mysqli_query($connection," select * from estudiantes");
								    $count_nursery = mysqli_num_rows($query_nursery);
								?>
								
                                 <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_nursery; ?>"><?php echo $count_nursery; ?></div>
                                    <div class="chart-bottom-heading"><strong>INICIAL</strong>

                                    </div>
                                </div>
								
								<?php 
								    $query_primary = mysqli_query($connection," select * from estudiantes");
								    $count_primary = mysqli_num_rows($query_primary);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_primary; ?>"><?php echo $count_primary; ?></div>
                                    <div class="chart-bottom-heading"><strong>PRIMARIA</strong>

                                    </div>
                                </div>
								
								<?php 
								    $query_secondary = mysqli_query($connection," select * from estudiantes");
								    $count_secondary = mysqli_num_rows($query_secondary);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_secondary ?>"><?php echo $count_secondary ?></div>
                                    <div class="chart-bottom-heading"><strong>SECUNDARIA</strong>

                                </div>
                                </div>
								
								<?php 
								    $query_admin = mysqli_query($connection," select * from usuarios where estado='administrador' ");
								    $count_admin = mysqli_num_rows($query_admin);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_admin ?>"><?php echo $count_admin ?></div>
                                    <div class="chart-bottom-heading"><strong>ADMINISTRADORES</strong>

                                </div>
                                </div>
								
								<?php 
								    $query_normal = mysqli_query($connection," select * from usuarios where estado='normal'");
								    $count_normal = mysqli_num_rows($query_normal);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_normal; ?>"><?php echo $count_normal; ?></div>
                                    <div class="chart-bottom-heading"><strong>USUARIOS</strong>
                                </div>
                                </div>
								
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                
                </div>
            </div>
    
         <?php include('footer.php'); ?>
		 
        </div>
	<?php include('script.php'); ?>
    </body>
</html>