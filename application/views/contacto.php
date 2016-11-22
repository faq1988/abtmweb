




<div class="container">

<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contacto
                    
                </h1>
            </div>
        </div>

<center>

<?php 
echo form_open('principal/insertar');

$nom = array(
		'name' => 'nom',
		'id'	=> 'nom',
		'value'	=> '',
		'maxlength'	=> '30',
		'size'	=>	'30',
		'style' => 	'width:50%',
		'class' => 'form-control',

	);

$ap = array(
		'name' => 'ap',
		'id'	=> 'ap',
		'value'	=> '',
		'maxlength'	=> '30',
		'size'	=>	'30',
		'style' => 	'width:50%',
		'class' => 'form-control',

	);


$corelec = array(
		'name' => 'corelec',
		'id'	=> 'corelec',
		'value'	=> '',
		'maxlength'	=> '30',
		'size'	=>	'30',
		'style' => 	'width:50%',
		'class' => 'form-control',

	);


$tel = array(
		'name' => 'tel',
		'id'	=> 'tel',
		'value'	=> '',
		'maxlength'	=> '30',
		'size'	=>	'30',
		'style' => 	'width:50%',
		'class' => 'form-control',

	);


echo form_label('Nombre', 'nom');

echo form_input($nom);
echo '</br>';
echo form_label('Apellido', 'ap');
echo form_input($ap);
echo '</br>';
echo form_label('Correo electrónico', 'corelec');

echo form_input($corelec);
echo '</br>';
echo form_label('Teléfono', 'tel');
echo form_input($tel);

echo '</br>';
echo form_submit('enviar','Enviar consulta');


echo form_close();


?>
</center>

</div>

<hr>