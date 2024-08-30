<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $titulo ?> </h3>
    </div>
    <?php if ($this->session->flashdata('eok') <> '') : ?>
        <div class="alert alert-success">
            <i class="fa fa-check" aria-hidden="true"></i> <?php echo $this->session->flashdata('eok'); ?>
        </div>
    <?php endif ?>

    <?php if ($this->session->flashdata('eerror') <> '') : ?>
        <div class="alert alert-dismissable alert-danger">
            <i aria-hidden="true"></i>
            <ion-icon name="close-outline"></ion-icon> <?php echo $this->session->flashdata('eerror'); ?>
        </div>
    <?php endif ?>
    <!-- /.box-header -->

    <form action="<?php echo $accion ?>" method="post">

        <div class="form-group">
            <label for=""><b class="text-danger">*</b>Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?= isset($alumno->nombre) ? $alumno->nombre : '' ?>" required="true">
        </div>
        <div class="form-group">
            <label for=""><b class="text-danger">*</b>Apellidos:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="<?= isset($alumno->apellido) ? $alumno->apellido : '' ?>" required="true">
        </div>
        <div class="form-group">
            <label for=""><b class="text-danger">*</b>Dirección:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="<?= isset($alumno->direccion) ? $alumno->direccion : '' ?>" required="true">
        </div>
        <div class="form-group">
            <label for="">Telefono:</label>
            <input type="text" name="movil" id="movil" class="form-control" value="<?= isset($alumno->movil) ? $alumno->movil : '' ?>" required="true">
        </div>
        <div class="form-group">
            <label for="">Correo electronico:</label>
            <input type="text" name="email" id="email" class="form-control" value="<?= isset($alumno->email) ? $alumno->email : '' ?>" required="true">
        </div>
        <div class="form-group">
            <label for="">Estado:</label>
            <select name="inactivo" id="inactivo" class="form-control chosen-select" required>
                <option value="">Seleccionar una opcion...</option>
                <option value="0" <?= isset($alumno->inactivo) && $alumno->inactivo == 0 ? 'selected' : '' ?>>Activa</option>
                <option value="1" <?= isset($alumno->inactivo) && $alumno->inactivo == 1 ? 'selected' : '' ?>>Inactiva</option>
            </select>
        </div>
        <br>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <ion-icon name="save-outline"></ion-icon> Guardar
            </button>
            <button type="button" class="btn btn-default" onclick="location.href='<?= site_url('AlumnosController/') ?>'">
                <ion-icon name="exit-outline"></ion-icon>
                Regresar
            </button>
        </div>
</div>

</form>
</div>
