<?php
	require('conexion.php');

	$query = "SELECT * FROM rankingsegunda";

	$resultado = $mysqli->query($query);


?>





<div class="container">

<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Ranking
                    
                </h1>
            </div>
        </div>


<div class="panel panel-default">
                        <div class="panel-heading">
                            Segunda
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Posición</th>
                                            <th>Jugador</th>
                                            <th>Puntos</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($row=$resultado->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $row['posicion'];?>
                                            </td>
                                            <td><?php echo $row['jugador'];?>
                                            </td>
                                            <td><?php echo $row['puntos'];?>
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