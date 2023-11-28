<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/styles3.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/Style4.css'); ?>">
    <title>Datos</title>
</head>
<body>
    <nav class="nav" id="nvar">
        <div class="brand">
            <h3><?php echo $this->session->userdata('nombre');  ?></h3>
        </div>

        <div class="navigation">
            <ul class="menu">
                <li><a href="<?php echo site_url('Home_controller/index'); ?>">Inicio</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1>Formularios</h1>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Tipo Sanguineo</th>
                            <th>Peso</th>
                            <th>Estatura</th>
                            <th>Email</th>
                            <th>Contraseña</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            foreach ($formularios as $key => $formulario) {
                                echo "<tr>";
                                echo "<td>".$formulario['ID_Usuario']."</td>";
                                echo "<td>".$formulario['NombrePaciente']."</td>";
                                echo "<td>".$formulario['ApellidosPaciente']."</td>";
                                echo "<td>".$formulario['Edad']."</td>";
                                echo "<td>".$formulario['TipoSanguineo']."</td>";
                                echo "<td>".$formulario['Peso']."</td>";
                                echo "<td>".$formulario['Estatura']."</td>";
                                echo "<td>".$formulario['email']."</td>";
                                echo "<td>".$formulario['cve']."</td>";
                               	?>
                                
                                <td> <a href="<?php echo site_url('Home_controller/editar_usuario/'),$formulario['ID_Usuario'] ?>" class='btn btn-primary'>Editar</a>
                                <td> <a href="<?php echo site_url('Home_controller/eliminar_usuario/'),$formulario['ID_Usuario'] ?>" class='btn btn-primary'>Eliminar</a>
                           <?php
                         echo ("</td>");
                         echo "</tr>";
                    }
                   ?>     
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</body>
</html>