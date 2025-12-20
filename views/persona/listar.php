<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"</link>
</head>
<body>
     <!-- container = centro l contenido -->
    <div class="container">
        <h1>Listar rescatistas</h1>
        <a href="#" class="btn btn-sm btn-primary">Registrar</a>
        <hr>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>DNI</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Condición</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contenido dinámico, viene desde la BD -->
                
            </tbody>
        </table>
    </div>

    <script>
        //Verificar que toda la pagina esté cargada (lista)
        document.addEventListener("DOMContentLoaded", function(){
            console.log("Página lista");
        })
    </script>
</body>
</html>