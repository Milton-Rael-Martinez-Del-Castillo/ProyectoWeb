<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>../assets/css/adminlte.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Pacientes</h1>
        <a href="<?php echo base_url('pacientes/create'); ?>" class="btn btn-primary mb-3">Añadir Paciente</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pacientes as $paciente): ?>
                <tr>
                    <td><?= $paciente->id; ?></td>
                    <td><?= $paciente->nombre; ?></td>
                    <td><?= $paciente->apellido; ?></td>
                    <td><?= $paciente->edad; ?></td>
                    <td><?= $paciente->direccion; ?></td>
                    <td><?= $paciente->telefono; ?></td>
                    <td>
                        <a href="<?= base_url('pacientes/edit/' . $paciente->id); ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="<?= base_url('pacientes/delete/' . $paciente->id); ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
