<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rgistro</title>
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url('css/Sing.css')); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body  style="background-color: honeydew;">
    <div class="container">
        <div class="row m-5 no-gutters shadow-lg">
            <div class="col-md-6 d-none d-md-block">
                <img src="<?php echo(base_url('imagenes/conocimienrto.jpg')); ?>" width="550px" height="920px">
            </div>
            <div class="col-md-6 bg.white p-5">
                <center>
                <h3 class="pb-3">Edicion de protocolo de registro</h3>
                </center>
                <div class="form-style">
                    <form action="<?php echo(site_url('Home_controller/edita_usuario')); ?>" method="POST">
                        <div class="form-group pb-3">
                            <input type="hidden" name="id" value="<?php echo $formularios->ID_Usuario; ?>">
                            <label for="fecha1">Nombre</label><br>
                            <input type="text" placeholder="Primer Nombre" name="nombres" class="form-control" id="exampleInputName" required="True" value="<?php echo $formularios->NombrePaciente ?>">
                            <span class="error"><?php echo form_error('nombres'); ?></span>
                            <label for="fecha1">Apellido</label><br>
                            <input type="text" placeholder="Primer Apellido" name="apellidos" class="form-control" id="exampleInputName" required="True" value="<?php echo $formularios->ApellidosPaciente ?>">
                            <span class="error"><?php echo form_error('apellidos'); ?></span>
                            
                        </div>
                        <!--<div class="form-group pb-3">
                            <center>
                            <label for="fecha1">Fecha de nacimiento</label><br>
                            <input max="<?php echo date('Y-m-d'); ?>" type="date" id="fecha1" name="fecha1" required="True" value="<?php echo $formularios->FechaNacimiento ?>"><br>
                            <span class="error"><?php echo form_error('fecha1'); ?></span>
                            </center>
                        </div>-->
                        <div class="form-group pb-3">
                            <label for="fecha1">Edad</label><br>
                            <input type="Age" placeholder="Edad" name="anios" class="form-control" id="exampleInputAge" required="True" value="<?php echo $formularios->Edad ?>">
                            <span class="error"><?php echo form_error('anios'); ?></span>
                        </div>
                        <div class="form-group pb-3">
                            <label for="fecha1">Selecciona tu Tipo de Sangre</label><br>
                            <!--<input type="Blood" placeholder="Tipo sanguinio" name="sangre" class="form-control" id="exampleInputBlood" required="True" value="<?php echo $formularios->TipoSanguineo ?>">-->
                            <select id="tacos" class="form-control" name="sangre" required="True" placeholder="Tipo sanguinio">
                                <option <?php if(($formularios->TipoSanguineo) == 'O+'){echo("selected");}?>>O+</option>
                                <option <?php if(($formularios->TipoSanguineo) == 'O-'){echo("selected");}?>>O-</option>
                                <option <?php if(($formularios->TipoSanguineo) == 'AB+'){echo("selected");}?>>AB+</option>
                                <option <?php if(($formularios->TipoSanguineo) == 'AB-'){echo("selected");}?>>AB-</option>
                                <option <?php if(($formularios->TipoSanguineo) == 'A+'){echo("selected");}?>>A+</option>
                                <option <?php if(($formularios->TipoSanguineo) == 'A-'){echo("selected");}?>>A-</option>
                                <option <?php if(($formularios->TipoSanguineo) == 'B+'){echo("selected");}?>>B+</option>
                                <option <?php if(($formularios->TipoSanguineo) == 'B-'){echo("selected");}?>>B-</option>
                            </select>
                        </div>
                        <div class="form-group pb-3">
                            <label for="fecha1">Peso (kilogramos)</label><br>
                            <input type="Weight" placeholder="Ingrese su peso" name="peso" class="form-control" id="exampleInputWeight" required="True" value="<?php echo $formularios->Peso ?>">
                            <span class="error"><?php echo form_error('peso'); ?></span>
                        </div>
                        <div class="form-group pb-3">
                            <label for="fecha1">Estatura (metros)</label><br>
                            <input type="Height" placeholder="Ingrese su estatura" name="altura" class="form-control" id="exampleInputHeight" required="True" value="<?php echo $formularios->Estatura ?>">
                        </div>
                        <div class="form-group pb-3">
                            <label for="fecha1">E-mail</label><br>
                            <input type="email" placeholder="Correo electroncico" name="correo" class="form-control" id="exampleInputEmail" required="True" value="<?php echo $formularios->email ?>">
                        </div>
                        <div class="form-group pb-3">
                            <label for="fecha1">Password</label><br>
                            <input type="password" placeholder="Contraseña" name="contra" class="form-control" id="exampleInputPassword1" required="True" value="<?php echo $formularios->cve ?>">
                        </div>
                        <div class="pb-2">
                            <center>
                            <button type="submit" name="save" class="btn-primary w-100 fotn-weight-bold mt-2">Enviar</button>
                            </center>
                        </div>
                    </form>
                    </div>
            </div>
        </div>
    </div>
    <?php if (isset($_GET['error'])) {     echo "<script>alert('Ingresaste datos invalidos - Revisa bien la informacion')</script>"; };?>
</body>
</html>