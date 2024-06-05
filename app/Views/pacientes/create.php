<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Paciente</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/css/adminlte.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Añadir Paciente</h1>
        <form action="<?= base_url('pacientes/store'); ?>" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" name="edad" class="form-control">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="<?= base_url('pacientes'); ?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
