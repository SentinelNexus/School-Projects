<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="<?php echo base_url('css/estilos.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/estilos2.css'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <nav class="nav" id="nvar">
        <div class="brand">
            <h3>Modifica Consulta</h3>
        </div>

        <div class="navigation">
            <ul class="menu">
                <li><a href="<?php echo(site_url('Home_controller/index')); ?>">Inicio</a></li>
                <li><a href="#">Consultas</a></li>
            </ul>
            <div class="search">
                <button class="search-button"><i class="fa fa-search"></i></button>
                <input type="text" class="search-input" placeholder="Searche here..">
            </div>

            <div class="user">
                <button class="search-button"><i class="fa fa-user"></i></button>
            </div>
        </div>
    </nav>
    <form action="<?php echo(site_url('Home_controller/update_formularios')); ?>" method="POST">
        <h1 class="tittle" style="padding-bottom: 40px">Sintomas</h1>
        <label>*Required</label><br/>
        <div class="form_div">
            <input type="hidden" name="id" value="<?php echo $formularios->ID_Formulario; ?>">
            <label for="nombre"><b>Nombre</b></label><br/>
            <input class="controls" type="text" id="nombre" name="nombre" placeholder="Nombre(s)" aria-label="Apellido" value="<?php echo $formularios->NombrePacientes ?>">
            <input class="controls" type="text" id="apellido" name="apellido" placeholder="Apellidos" value="<?php echo $formularios->ApellidosPacientes ?>">
        </div>
        <div class="telefono_div">
            <label for="Numero de Telefono"><b>Numero de Telefono a 12 caracteres<span style="color: red;">*</span></b></label><br/>
            <input class="controls" type="text" name="telefono" id="telefono" value="<?php echo $formularios->Telefono ?>">
        </div>
        <div class="direccion_div">
            <label for="Direccion"><b>Direccion<span style="color: red;">*</span></b></label><br/>
            <input class="controls" type="text" name="calle1" id="calle1" placeholder="Calle 1" value="<?php echo $formularios->Calle1 ?>">
            <input class="controls" type="text" name="calle2" id="calle2" placeholder="Calle 2" value="<?php echo $formularios->Calle2 ?>">
            <input class="controls" type="text" name="city" id="cuidad" placeholder="Cuidad" value="<?php echo $formularios->Ciudad ?>">
            <input class="controls" type="text" name="state" id="estado" placeholder="Estado" value="<?php echo $formularios->Estado ?>">
             <label for="Numero de Telefono"><b>Codigo Postal a 5 caracteres<span style="color: red;">*</span></b></label><br/>
            <input class="controls" type="text" name="cp" id="cp" placeholder="Codigo Postal" value="<?php echo $formularios->CodigoPostal ?>">

        </div>
        <div class="form_div">
            <label for="genero"><b>Genero<span style="color: red;">*</span></b></label><br/>
            <?php 
                if (($formularios->Genero)=="Mujer") {
                   echo '<input type="radio" id="femenino" name="genero" value="Mujer" checked="checked"> <label for="femenino">Femenino</label><br/´>'; 
                   echo '<input type="radio" id="masculino" name="genero" value="Hombre"> <label for="masculino">Masculino</label><br/>';
                }
                else{
                    echo '<input type="radio" id="femenino" name="genero" value="Mujer"> <label for="femenino">Femenino</label><br/´>'; 
                    echo '<input type="radio" id="masculino" name="genero" value="Hombre" checked="checked"> <label for="masculino">Masculino</label><br/>';
                }
            ?>
            
            
        </div>

        <div class="form_div"> 
            <label>Edad</label><br/>
            <input type="radio" name="edad" id="0a9" value="0 a 9 años" <?php if(($formularios->Edades) == '0 a 9 años'){echo("checked");}?>>
            <label><b>0-9 años de edad</b></label><br/>
            <input type="radio" name="edad" id="10a19" value="10 a 19 años" <?php if(($formularios->Edades) == '10 a 19 años'){echo("checked");}?>>
            <label><b>10-19 años de edad</b></label><br/>
            <input type="radio" name="edad" id="20a29" value="20 a 29 años" <?php if(($formularios->Edades) == '20 a 29 años'){echo("checked");}?>>
            <label><b>20-29 años de edad</b></label><br/>
            <input type="radio" name="edad" id="30a39" value="30 a 39 años" <?php if(($formularios->Edades) == '30 a 39 años'){echo("checked");}?>>
            <label><b>30-39 años de edad</b></label><br/>
            <input type="radio" name="edad" id="40a49" value="40 a 49 años" <?php if(($formularios->Edades) == '40 a 49 años'){echo("checked");}?>>
            <label><b>40-49 años de edad</b></label><br/>
            <input type="radio" name="edad" id="50a59" value="50 a 59 años" <?php if(($formularios->Edades) == '50 a 59 años'){echo("checked");}?>>
            <label><b>50-59 años de edad</b></label><br/>
            <input type="radio" name="edad" id="60a69" value="60 a 69 años" <?php if(($formularios->Edades) == '60 a 69 años'){echo("checked");}?>>
            <label><b>60-69 años de edad</b></label><br/>
            <input type="radio" name="edad" id="70a79" value="70 a 79 años" <?php if(($formularios->Edades) == '70 a 79 años'){echo("checked");}?>>
            <label><b>70-79 años de edad</b></label><br/>
            <input type="radio" name="edad" id="80" value="mas de 80 años" <?php if(($formularios->Edades) == 'mas de 80 años'){echo("checked");}?>>
            <label><b>80 o mayor</b></label><br/>
        </div>

        <div class="form_div">
            <label>¿Tiene alguna condición preexistente como enfermedad cardiaca, diabetes, 
                hipertensión o enfermedad pulmonar?<span style="color: red">*</span>
            </label><br/>
            <input type="radio" name="enfermedad" id="1" value="Si" <?php if(($formularios->EnfePrexi) == 'Si'){echo("checked");}?>>
            <label><b>Si</b></label><br/>
            <input type="radio" name="enfermedad" id="1" value="No" <?php if(($formularios->EnfePrexi) == 'No'){echo("checked");}?>>
            <label><b>No</b></label><br/>
        </div>

        <div class="form_div">
            <label>¿Tiene un sistema inmunitario debilitado debido a una enfermedad 
                o medicamento?<span style="color: red">*</span>
            </label><br/>
            <input type="radio" name="inmunitario" id="1" value="Si" <?php if(($formularios->SisInmunitario) == 'Si'){echo("checked");}?>>
            <label><b>Si</b></label><br/>
            <input type="radio" name="inmunitario" id="1" value="No" <?php if(($formularios->SisInmunitario) == 'No'){echo("checked");}?>>
            <label><b>No</b></label><br/>
        </div>

        <div class="form_div">
            <label>¿Es alergico de algun medicamento?<span style="color: red">*</span>
            </label><br/>
            <input type="radio" name="alergia" id="1" value="Si" <?php if(($formularios->AlergiaMedic) == 'Si'){echo("checked");}?>>
            <label><b>Si</b></label><br/>
            <input type="radio" name="alergia" id="1" value="No" <?php if(($formularios->AlergiaMedic) == 'No'){echo("checked");}?>>
            <label><b>No</b></label><br/>
        </div>

        <div class="medic_div">
            <label for="Medic"><b>Si puso "Si", por favor menciona cual o cuales son:</b></label><br/>
            <input class="controls" type="text" name="medic" id="medic" value="<?php echo $formularios->MedicamentoAlergia ?>">

        <div class="form_div">
            <label>¿Cuáles son todos sus sintomas?<span style="color: red">*</span></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Fiebre" <?php if(str_contains( $formularios->Sintomas, 'Fiebre')){echo("checked");}?>><b>Fiebre (arriba de los 37°C)</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Tos" <?php if(str_contains( $formularios->Sintomas, 'Tos')){echo("checked");}?>><b>Tos</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Dificultad para respirar" <?php if(str_contains( $formularios->Sintomas, 'Dificultad para respirar')){echo("checked");}?>><b>Dificultad para respirar</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Dolor de cabeza" <?php if(str_contains( $formularios->Sintomas, 'Dolor de cabeza')){echo("checked");}?>><b>Dolor de cabeza</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Escalofríos" <?php if(str_contains( $formularios->Sintomas, 'Escalofríos')){echo("checked");}?>><b>Escalofríos</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Dolores corporales (dolor en articulaciones, dolores musculares)" <?php if(str_contains( $formularios->Sintomas, 'Dolores corporales (dolor en articulaciones, dolores musculares)')){echo("checked");}?>><b>Dolores corporales (dolor en articulaciones, dolores musculares)</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Flujo nasal" <?php if(str_contains( $formularios->Sintomas, 'Flujo nasal')){echo("checked");}?>><b>Flujo nasal</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Dolor de garganta" <?php if(str_contains( $formularios->Sintomas, 'Dolor de garganta')){echo("checked");}?>><b>Dolor de garganta</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Nauseas" <?php if(str_contains( $formularios->Sintomas, 'Nauseas')){echo("checked");}?>><b>Nauseas</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Vómito" <?php if(str_contains( $formularios->Sintomas, 'Vómito')){echo("checked");}?>><b>Vómito</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Diarrea" <?php if(str_contains( $formularios->Sintomas, 'Diarrea')){echo("checked");}?>><b>Diarrea</b></label><br/>
            <label style="font-size: 10px">Marque todo lo que corresponda</label>
        </div>

        <div class="form_div">
            <label>¿Cuándo empezaron los sintomas?<span style="color: red">*</span></label><br/>
            <input max="<?php echo date('Y-m-d'); ?>" type="date" name="fecha" id="fecha" value="<?php echo $formularios->FechaIniSintomas ?>">
        </div>
        
        <input id="Doctor" name="doctor" type="hidden" value="<?php $d=mt_rand(0,3); ?>">
        
        <div class="div-buttom">
            <input class="boton-submit" type="submit" value="Enviar">
            <p>¡¡¡¡Recordar el formulario debe ser llenado con los datos de manera correcta!!!!</p>
            <p>¡¡¡¡Si no el formulario no se podra modificar!!!!</p>
        </div>
    </form>
    <?php if (isset($_GET['error'])) {     echo "<script>alert('Ingresaste datos invalidos - Revisa bien la informacion')</script>"; };?>
</body>
</html>