<?php
	require('conexion.php');

	$query = "SELECT * FROM sistemapuntaje";

	$resultado = $mysqli->query($query);


?>





<div class="container">

<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sistema de puntaje
                    
                </h1>
            </div>
        </div>


<div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Posición</th>                                            
                                            <th>Puntos</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($row=$resultado->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $row['id'];?>
                                            </td>
                                            <td><?php echo $row['puntaje'];?>
                                            </td>                                                                                     
                                        </tr>
                                       <?php } ?> 
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->


</div>

<hr>