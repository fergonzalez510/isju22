<?php include('header.php'); ?>
<?php include('sesion.php'); ?>
    <body >
		<?php include('navbar.php'); ?>
                <center><img src="images/logoISJU.png"></center>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_fees.php'); ?>
                <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
						<?php
							$query= mysqli_query($connection,"select * from students where status != 'exempted'")or die(mysql_error());
							$count = mysqli_num_rows($query);
						 	
						?>
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i>  Lista de Pagos de Estudiantes</div>
                                <div class="muted pull-right">
									Numero de Estudiantes: <span class="badge badge-info"><?php  echo $count;  ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
								<h2 id="noch">Lista de Pagos de Estudiantes</h2>
									<?php include('fees_table.php'); ?>
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