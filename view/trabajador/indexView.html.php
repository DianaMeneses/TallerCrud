<?php

use DianaCrud\configuracion\configuracion as config ?>
<?php echo include_once config::getPath() . 'view/parcial/head.php'; ?>
<div class="container container-fluid">
    <h1>Trabajador</h1>
    <p>
        <a href="<?php echo config::getUrl()?>index.php/trabajador/nuevo" class="btn btn-danger">Nuevo</a>
    </p>
    <table class="table">
        <thead>
            <tr>Id<th>
            <tr>Nombre<th>
            <tr>Apellidos<th> 
              </tr>            
        </thead>
        <tbody>
            <?php foreach ($objTrabajador as $trabajador): {
                
            } ?>
            <tr>
                <td><?php echo $trabajador->id ?></td>
                <td><?php echo $trabajador->nombre ?></td>
                <td><?php echo $trabajador->apellido ?></td>
                 <td><?php echo $trabajador->telefono ?></td>                <td>
                    <a href="<?php echo config::getUrl() ?>index.php/trabajador/ver?id=<?php echo $trabajador->id ?>" class="btn btn-warning btn-xs">ver</a>
                    <a href="<?php echo config::getUrl() ?>index.php/trabajador/editar?id=<?php echo $trabajador->id ?>" class="btn btn-warning btn-xs">ediar</a>
                    <a href="#" data-toggle='modal' data-target='#myModal<?php echo $trabajador->id?>'>eliminar</a>
                <?php include config::getPath() . 'view/parcial/eliminar.php'; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="<?php echo config::getUrl() ?>js/eliminar.js"></script>
<?php include_once config::getPath() . 'view/parcial/foot.php'; ?>