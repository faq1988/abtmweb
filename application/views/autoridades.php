<?php
	require('conexion.php');

	$query = "SELECT * FROM autoridades";

	$resultado = $mysqli->query($query);


?>





<div class="container">

<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Autoridades
                    
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
                                            <th>Cargo</th>                                            
                                            <th>Titular</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($row=$resultado->fetch_assoc()){ ?>
                                        <tr>
                                            <td><?php echo $row['cargo'];?>
                                            </td>
                                            <td><?php echo $row['titular'];?>
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