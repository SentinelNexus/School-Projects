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
                            <th>NumeroForm</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Primera Calle</th>
                            <th>Segunda Calle</th>
                            <th>Ciudad</th>
                            <th>Estado</th>
                            <th>Codigo Postal</th>
                            <th>Genero</th>
                            <th>Edades</th>
                            <th>¿Tiene alguna condición preexistente como enfermedad cardiaca, diabetes, 
                    hipertensión o enfermedad pulmonar?</th>
                            <th>¿Tiene un sistema inmunitario debilitado debido a una enfermedad 
                    o medicamento?</th>
                            <th>¿Es alergico de algun medicamento?</th>
                            <th>Si puso "Si", por favor menciona cual o cuales son:</th>
                            <th>Sintomas</th>
                            <th>Cuándo empezaron los sintomas?</th>
                            <th>Doctor</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            foreach ($formularios as $key => $formulario) {
                                echo "<tr>";
                                echo "<td>".$formulario['ID_Formulario']."</td>";
                                echo "<td>".$formulario['NombrePacientes']."</td>";
                                echo "<td>".$formulario['ApellidosPacientes']."</td>";
                                echo "<td>".$formulario['Telefono']."</td>";
                                echo "<td>".$formulario['Calle1']."</td>";
                                echo "<td>".$formulario['Calle2']."</td>";
                                echo "<td>".$formulario['Ciudad']."</td>";
                                echo "<td>".$formulario['Estado']."</td>";
                                echo "<td>".$formulario['CodigoPostal']."</td>";
                                echo "<td>".$formulario['Genero']."</td>";
                                echo "<td>".$formulario['Edades']."</td>";
                                echo "<td>".$formulario['EnfePrexi']."</td>";
                                echo "<td>".$formulario['SisInmunitario']."</td>";
                                echo "<td>".$formulario['AlergiaMedic']."</td>";
                                echo "<td>".$formulario['MedicamentoAlergia']."</td>";
                                echo "<td>".$formulario['Sintomas']."</td>";
                                echo "<td>".$formulario['FechaIniSintomas']."</td>";
                                echo "<td>".$formulario['ID_Doctor']."</td>";?>
                                
                                <td> <a href="<?php echo site_url('Home_controller/editar_formulario/'),$formulario['ID_Formulario'] ?>" class='btn btn-primary'>Editar</a>
                                <td> <a href="<?php echo site_url('Home_controller/eliminar_formulario/'),$formulario['ID_Formulario'] ?>" class='btn btn-primary'>Eliminar</a>
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