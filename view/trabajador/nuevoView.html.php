<?php

use DianaCrud\configuracion\configuracion as config ?>
<?php include_once config::getPath() . 'view/parcial/head.php'; ?>
<h1>Nuevo trabajador</h1>
<div class="container container-fluid"> 
    <form class="form-inline" action="<?php echo config::getUrl() ?>index.php/trabajador/crear" method="post">
        <div class="form-group">
            <label for="nombres">NOmbre</label>
            <input type="text" class="form-control" id="nombre" name="trabajador[nombre]" placeholder="nombre">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="trabajador[apellidos]" placeholder="apellidos">
        </div>
        <div>
        <label for="telefono">telefono</label>
        <input type="text" class="form-control" id="telefono" name="trabajador[telefono]" placeholder="telefono">
        </div>
        <div class="form-group">
            <label for="extencion">extencion</label>
            <input type="text" class="form-control" id="extencion" name="trabajador[extencion]" placeholder="extencion">
        </div>
        <div>
        <label for="cargo">cargo</label>
        <input type="text" class="form-control" id="cargo" name="trabajador[cargo]" placeholder="cargo">
        </div>
        <div class="form-group">
            <label for="sueldo">sueldo basico</label>
            <input type="text" class="form-control" id="sueldo" name="trabajador[sueldo]" placeholder="sueldo">
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
    </form>
</div>
<?php include_once config::getPath() . 'view/parcial/foot.php'; ?>
