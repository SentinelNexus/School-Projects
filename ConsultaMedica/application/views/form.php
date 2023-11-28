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
            <h3>Consultas clinicas</h3>
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
    <form action="<?php echo(site_url('Home_controller/guarda_formulario')); ?>" method="POST">
        <h1 class="tittle" style="padding-bottom: 40px">Sintomas</h1>
        <label>*Required</label><br/>
        <div class="form_div">
            <label for="nombre"><b>Nombre</b></label><br/>
            <input class="controls" type="text" id="nombre" name="nombre" placeholder="Nombre(s)" aria-label="Apellido"/>
            <input class="controls" type="text" id="apellido" name="apellido" placeholder="Apellidos"/>
        </div>
        <div class="telefono_div">
            <label for="Numero de Telefono"><b>Numero de Telefono a 12 caracteres<span style="color: red;">*</span></b></label><br/>
            <input class="controls" type="text" name="telefono" id="telefono">
        </div>
        <div class="direccion_div">
            <label for="Direccion"><b>Direccion<span style="color: red;">*</span></b></label><br/>
            <input class="controls" type="text" name="calle1" id="calle1" placeholder="Calle 1">
            <input class="controls" type="text" name="calle2" id="calle2" placeholder="Calle 2">
            <input class="controls" type="text" name="city" id="cuidad" placeholder="Cuidad">
            <input class="controls" type="text" name="state" id="estado" placeholder="Estado">
             <label for="Numero de Telefono"><b>Codigo Postal a 5 caracteres<span style="color: red;">*</span></b></label><br/>
            <input class="controls" type="text" name="cp" id="cp" placeholder="Codigo Postal a 5 caracteres">

        </div>
        <div class="form_div">
            <label for="genero"><b>Genero<span style="color: red;">*</span></b></label><br/>
            <input type="radio" id="femenino" name="genero" value="Mujer">
            <label for="femenino">Femenino</label><br/>
            <input type="radio" id="masculino" name="genero" value="Hombre">
            <label for="masculino">Masculino</label><br/>
        </div>

        <div class="form_div"> 
            <label>Edad</label><br/>
            <input type="radio" name="edad" id="0a9" value="0 a 9 años">
            <label><b>0-9 años de edad</b></label><br/>
            <input type="radio" name="edad" id="10a19" value="10 a 19 años">
            <label><b>10-19 años de edad</b></label><br/>
            <input type="radio" name="edad" id="20a29" value="20 a 29 años">
            <label><b>20-29 años de edad</b></label><br/>
            <input type="radio" name="edad" id="30a39" value="30 a 39 años">
            <label><b>30-39 años de edad</b></label><br/>
            <input type="radio" name="edad" id="40a49" value="40 a 49 años">
            <label><b>40-49 años de edad</b></label><br/>
            <input type="radio" name="edad" id="50a59" value="50 a 59 años">
            <label><b>50-59 años de edad</b></label><br/>
            <input type="radio" name="edad" id="60a69" value="60 a 69 años">
            <label><b>60-69 años de edad</b></label><br/>
            <input type="radio" name="edad" id="70a79" value="70 a 79 años">
            <label><b>70-79 años de edad</b></label><br/>
            <input type="radio" name="edad" id="80" value="mas de 80 años">
            <label><b>80 o mayor</b></label><br/>
        </div>

        <div class="form_div">
            <label>¿Tiene alguna condición preexistente como enfermedad cardiaca, diabetes, 
                hipertensión o enfermedad pulmonar?<span style="color: red">*</span>
            </label><br/>
            <input type="radio" name="enfermedad" id="1" value="Si">
            <label><b>Si</b></label><br/>
            <input type="radio" name="enfermedad" id="1" value="No">
            <label><b>No</b></label><br/>
        </div>

        <div class="form_div">
            <label>¿Tiene un sistema inmunitario debilitado debido a una enfermedad 
                o medicamento?<span style="color: red">*</span>
            </label><br/>
            <input type="radio" name="inmunitario" id="1" value="Si">
            <label><b>Si</b></label><br/>
            <input type="radio" name="inmunitario" id="1" value="No">
            <label><b>No</b></label><br/>
        </div>

        <div class="form_div">
            <label>¿Es alergico de algun medicamento?<span style="color: red">*</span>
            </label><br/>
            <input type="radio" name="alergia" id="1" value="Si">
            <label><b>Si</b></label><br/>
            <input type="radio" name="alergia" id="1" value="No">
            <label><b>No</b></label><br/>
        </div>

        <div class="medic_div">
            <label for="Medic"><b>Si puso "Si", por favor menciona cual o cuales son:</b></label><br/>
            <input class="controls" type="text" name="medic" id="medic">

        <div class="form_div">
            <label>¿Cuáles son todos sus sintomas?<span style="color: red">*</span></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Fiebre"><b>Fiebre (arriba de los 37°C)</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Tos"><b>Tos</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Dificultad para respirar"><b>Dificultad para respirar</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Dolor de cabeza"><b>Dolor de cabeza</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Escalofríos"><b>Escalofríos</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Dolores corporales (dolor en articulaciones, dolores musculares)"><b>Dolores corporales (dolor en articulaciones, dolores musculares)</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Flujo nasal"><b>Flujo nasal</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Dolor de garganta"><b>Dolor de garganta</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Nauseas"><b>Nauseas</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Vómito"><b>Vómito</b></label><br/>
            <label><input type="checkbox" id="sintoma" name="sintoma[]" value="Diarrea"><b>Diarrea</b></label><br/>
            <label style="font-size: 10px">Marque todo lo que corresponda</label>
        </div>

        <div class="form_div">
            <label>¿Cuándo empezaron los sintomas?<span style="color: red">*</span></label><br/>
            <input  max="<?php echo date('Y-m-d'); ?>" type="date" name="fecha" id="fecha">
        </div>
        
        <input id="Doctor" name="doctor" type="hidden" value="<?php $d=mt_rand(0,3); ?>">
        
        <div class="div-buttom">
            <input class="boton-submit" type="submit" value="Enviar">
            <p>¡¡¡¡Recordar el formulario debe ser llenado con los datos de manera correcta!!!!</p>
            <p>¡¡¡¡Si no el formulario no se podra enviar!!!!</p>
        </div>
    </form>
</body>
</html>