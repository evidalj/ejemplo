<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" />
    <title>Ejemplo</title>
  </head>
  <body>
    <h1 class="center-align">El proyecto funciona correctamente</h1>
    <div class="contenedor">
      <div class="fila">
        <div class="col s1-pos1 center-align">col 1</div>
        <div class="col s1-pos2 center-align">col 1</div>
        <div class="col s1-pos3 center-align">col 1</div>
        <div class="col s1-pos4 center-align">col 1</div>
        <div class="col s1-pos5 center-align">col 1</div>
        <div class="col s1-pos6 center-align">col 1</div>
        <div class="col s1-pos7 center-align">col 1</div>
        <div class="col s1-pos8 center-align">col 1</div>
        <div class="col s1-pos9 center-align">col 1</div>
        <div class="col s1-pos10 center-align">col 1</div>
        <div class="col s1-pos11 center-align">col 1</div>
        <div class="col s1-pos12 center-align">col 1</div>
      </div>
      <div class="fila">
        <div class="col s2-pos1">col 2</div>
        <div class="col s2-pos2">col 2</div>
        <div class="col s2-pos3">col 2</div>
        <div class="col s2-pos4">col 2</div>
        <div class="col s2-pos5">col 2</div>
        <div class="col s2-pos6">col 2</div>
      </div>
      <div class="fila">
        <div class="col s3-pos1">col 3</div>
        <div class="col s3-pos2">col 3</div>
        <div class="col s3-pos3">col 3</div>
        <div class="col s3-pos4">col 3</div>
      </div>
      <div class="fila">
        <div class="col s4-pos1">col 4</div>
        <div class="col s4-pos2">col 4</div>
        <div class="col s4-pos3">col 4</div>
      </div>
      <div class="fila">
        <div class="col s5-pos1">col 5</div>
        <div class="col s7-pos2">col 7</div>
      </div>
      <div class="fila">
        <div class="col s6-pos1">col 6</div>
        <div class="col s6-pos2">col 6</div>
      </div>
      <div class="fila">
        <div class="col s7-pos1">Col 7</div>
        <div class="col s5-pos2">col 5</div>
      </div>
      <div class="fila">
        <div class="col s8-pos1">col 8</div>
        <div class="col s4-pos3">col 4</div>
      </div>
      <div class="fila">
        <div class="col s9-pos1">col 9</div>
        <div class="col s3-pos4">col 3</div>
      </div>
      <div class="fila">
        <div class="col s10-pos1">col 10</div>
        <div class="col s2-pos6">col 2</div>
      </div>
      <div class="fila">
        <div class="col s11-pos1">col 11</div>
        <div class="col s1-pos12">col 1</div>
      </div>
      <div class="fila">
        <div class="col s12-pos1">col 12</div>
      </div>
    </div>
    <script src="js/app.js"></script>
    <script>
      fetch("personas/all")
        .then(r => {
          console.log(r);
        })
        .catch(e => {
          console.log(e);
        });
    </script>
  </body>
</html>
