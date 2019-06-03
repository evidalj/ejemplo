<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo</title>
</head>
<body>
    <h1>El proyecto funciona correctamente</h1>
    <div id="app">
        <example-component></example-component>
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