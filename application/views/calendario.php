
<style type="text/css">
.event .panel-body {
  background: #BBDEFB;
  border: 1px solid #448AFF;
  padding:0;
  margin:0;
  height:70px;
  
}
.event .panel-body > div {
  padding: 0 10px;
}
.event .panel-body .rsvp {
  border-left: none;
  padding: 0;
  text-align: center;
  position: relative;
  background: #64B5F6;
  color: white;
  height: 100%;
}

.event .rsvp > div {
  font-size: 12px;
  position: absolute;
  bottom: 0;
  background: #42A5F5;
  width: 100%;
}

.event .rsvp i {
  font-size: 2em;
  display: block;
  position:relative;
  top:17%;
  margin-bottom:5px;
}
.event .rsvp i:last-of-type{
    font-size:1.5em;
    margin-top:-23px;
}

.event .rsvp span {
  cursor: pointer;
  padding: 0 5px;
  margin: 5px 0;
  width:45%;
}
.event .rsvp span:first-of-type{
  border-right: 1px solid white;
}
.event .rsvp span:hover{
  color: #1565C0;
}

.event .info{
  font-size: 28px;
}

.event .info > div, .event .info > ul{
  font-size: 12px;
}

.event .author .profile-image {
  position: absolute;
  background: white;
  padding: 3px;
  width: 5em;
  border-radius: 50%;
  border: 1px solid #CCC;
  box-sizing: content-box;
  z-index: 1;
  top:4px;
}

.event .author img {
    width:100%;
    border-radius:50%;
}

/* Overwrites */
.nav-tabs a {
  background: #90CAF9;
  color: white;
}
.info .nav-tabs li.active a {
  background-color: #448AFF;
  color: white;
}
.info .nav-tabs li:hover a, .info .nav-tabs li.active:hover a {
  background: #00BCD4;
  color: white;
}
.tab-content {
  background: white;
  border-radius: 0 10px;
  padding: 10px;
}

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) { 
    .event .panel-body {
        height:158px;
    }
    
    .event .rsvp {
        min-height:100%;
    }
    
    .event .rsvp i {
        font-size:4em;
        top:5%;
    }
    
    .event .panel-body .author {
      position: relative;
      color: #2196F3;
      padding:10px;
      height:100%;
    }
    .event .profile {
      position: relative;
      z-index: 0;
      border-left: 2px solid white;
      top: -5px;
      padding-left: 55px;
      height: 100%;
      left: 10%;
    }
    .event .profile strong {
      display: block;
      color: white;
      font:20px bold 'Fredoka One', serif;
      -webkit-text-stroke-width: .6px;
      -webkit-text-stroke-color: #448AFF;
      margin-bottom: 5px;
    }
    .event .author .profile i {
      color:  #448AFF;
      padding-left: 0;
    }
    .event .profile .links {
      position: absolute;
      bottom: 0;
    }
    .event .profile article {
        padding:0 41px 0 0;
    }
    .event .author .profile i:hover{
      color:  #00BCD4;
    }
    .event .author .profile-image {
      position: absolute;
      background: white;
      padding: 3px;
      width: 30%;
      border-radius: 50%;
      border: 1px solid #CCC;
      box-sizing: content-box;
      z-index: 1;
      top:13px;
    }
    .event .author img {
      width: 100%;
      border-radius: 50%;
    }
}

/* Medium devices (desktops, 992px and up) */
@media (min-width: 992px) { 
    .event .profile {
      left: 17%;
    }
}

/* Large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {  }

</style>



<?php
  require('conexion.php');

  $query = "SELECT * FROM calendario";

  $resultado = $mysqli->query($query);

  $num = 0;
?>



<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
<!-- Start your code here -->

<div class="container">
<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Calendario
                    
                </h1>
            </div>
        </div>

<?php while($row=$resultado->fetch_assoc()){ ?>
<center>
 
<div class="panel panel-default event">
  <div class="panel-body">


   
                                                                              

    <div class="rsvp col-xs-2 col-sm-2">
      <i><?php echo $row['dia'];?></i>
      <i><?php echo $row['mes'];?></i>
      
    </div>
    <div class="info col-xs-8 col-sm-7">
      <?php echo $row['titulo'];?>
      <div class="visible-xs"></div>
      <div class="hidden-xs">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#<?php echo $row['location'];?>" aria-controls="location" role="tab" data-toggle="tab">Lugar</a></li>
            <li role="presentation"><a href="#<?php echo $row['profile'];?>" aria-controls="profile" role="tab" data-toggle="tab">Contacto</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="<?php echo $row['location'];?>"><?php echo $row['lugar'];?></div>
            <div role="tabpanel" class="tab-pane" id="<?php echo $row['profile'];?>">
                <?php echo $row['contacto'];?>
            </div>
          </div>
        </div>
    </div>
    
</div>
</div>


</br>
<?php } ?> 







