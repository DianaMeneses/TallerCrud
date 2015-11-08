<?php

use DianaCrud\configuracion\configuracion as config ?>
<?php include_once config::getPath() . 'view/parcial/head.php'; ?>
<h1>Modifiar trabajador</h1>
<div class="container container-fluid"> 
    <form class="form-inline" action="<?php echo config::getUrl() ?>index.php/trabajador/actualizar" method="post">
        <input type="hidden" name="trabajador[id]" value="<?php echo $objTrabajador[0]->id ?>">
        <div class="form-group">
            <label for="nombres">NOmbre</label>
            <input value="<?php echo $objTrabajador[0]->nombre ?>" type="text" class="form-control" id="nombre" name="trabajador[nombre]" placeholder="nombre">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input value="<?php echo $objTrabajador[0]->apellido ?>" type="text" class="form-control" id="apellidos" name="trabajador[apellidos]" placeholder="apellidos">
        </div>
        <div>
        <label for="telefono">telefono</label>
        <input value="<?php echo $objTrabajador[0]->telefono ?>" type="text" class="form-control" id="telefono" name="trabajador[telefono]" placeholder="telefono">
        </div>
        <div class="form-group">
            <label for="extencion">extencion</label>
            <input value="<?php echo $objTrabajador[0]->extencion ?>" type="text" class="form-control" id="extencion" name="trabajador[extencion]" placeholder="extencion">
        </div>
        <div>
        <label for="cargo">cargo</label>
        <input value="<?php echo $objTrabajador[0]->cargo ?>" type="text" class="form-control" id="cargo" name="trabajador[cargo]" placeholder="cargo">
        </div>
        <div class="form-group">
            <label for="sueldo">sueldo basico</label>
            <input value="<?php echo $objTrabajador[0]->sueldo_basico ?>" type="text" class="form-control" id="sueldo" name="trabajador[sueldo]" placeholder="sueldo">
        </div>
        <button type="submit" class="btn btn-default">Actualizar</button>
    </form>
</div>
<?php include_once config::getPath() . 'view/parcial/foot.php'; ?>
