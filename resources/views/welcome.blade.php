<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <title>Ejemplo</title>
</head>
<body>
    <h1 class="center-align">El proyecto funciona correctamente</h1>
    <div class="contenedor">
        <div class="fila">
            <div class="col s1-pos1 center-align">Hola mundo</div>
            <div class="col s1-pos2 center-align">Hola mundo</div>
            <div class="col s1-pos3 center-align">Hola mundo</div>
            <div class="col s1-pos4 center-align">Hola mundo</div>
            <div class="col s1-pos5 center-align">Hola mundo</div>
            <div class="col s1-pos6 center-align">Hola mundo</div>
            <div class="col s1-pos7 center-align">Hola mundo</div>
            <div class="col s1-pos8 center-align">Hola mundo</div>
            <div class="col s1-pos9 center-align">Hola mundo</div>
            <div class="col s1-pos10 center-align">Hola mundo</div>
            <div class="col s1-pos11 center-align">Hola mundo</div>
            <div class="col s1-pos12 center-align">Hola mundo</div>
        </div>
    </div>
    <script src="js/app.js"></script>
    <script>
        fetch('personas/all').then(r=>{
            console.log(r);
        }).catch(e=>{
            console.log(e);
        });
    </script>
</body>
</html>