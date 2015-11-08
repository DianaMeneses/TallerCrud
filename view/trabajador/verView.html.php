<?php

use DianaCrud\configuracion\configuracion as config ?>
<?php include_once config::getPath() . 'view/parcial/head.php'; ?>
<h1>Nuevo trabajador</h1>
<div class="container container-fluid"> 
    <h1>Trabajador <?php echo $objTrabajador[0]->nombre ?></h1>
<div class="list-group">
  <div class="list-group-item ">
    <h4 class="list-group-item-heading">Id</h4>
    <p class="list-group-item-text"><?php echo $objTrabajador[0]->id  ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">Nombre</h4>
    <p class="list-group-item-text"><?php echo $objTrabajador[0]->nombre  ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">Apellidos</h4>
    <p class="list-group-item-text"><?php echo $objTrabajador[0]->apellidos  ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">Telefono</h4>
    <p class="list-group-item-text"><?php echo $objTrabajador[0]->telefono  ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">Cargo</h4>
    <p class="list-group-item-text"><?php echo $objTrabajador[0]->cargo  ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">EXtencion</h4>
    <p class="list-group-item-text"><?php echo $objTrabajador[0]->extencion  ?></p>
  </div>
      <div class="list-group-item ">
    <h4 class="list-group-item-heading">sueldo basico</h4>
    <p class="list-group-item-text"><?php echo $objTrabajador[0]->sueldo_basico  ?></p>
  </div>
</div>
    <div class="text-right">
        <a href="<?php echo config::getUrl()?>index.php/trabajador/index" class="btn btn-default">Volver</a>
    </div>

</div>
<?php include_once config::getPath() . 'view/parcial/foot.php'; ?>