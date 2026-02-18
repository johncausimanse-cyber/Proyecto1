
<html>

<head>
  <title>Base de datos</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "univalle") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into alumnos(nombre,correo,codigocurso) values 
                       ('$_REQUEST[nombre]','$_REQUEST[correo]',$_REQUEST[codigocurso])")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El alumno fue dado de alta.";
  header("location:index.html");
  ?>
</body>

</html>