<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"</link>
</head>
<body>
     <!-- container = centro l contenido -->
    <div class="container">
        <h1>Listar animales rescatados</h1>
        <a href="crear.php" class="btn btn-sm btn-primary">Registrar</a>
        <hr>

        <table class="table table-striped" id="tabla-animal">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Rescatista</th>
                    <th>Especie</th>
                    <th>Sexo</th>
                    <th>Condición</th>
                    <th>Fecha Rescate</th>
                    <th>Lugar</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contenido dinámico, viene desde la BD -->
                
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function(){
           function obtenerDatos(){
            const datos = new FormData()
            datos.append("operacion","listar")
            fetch('../../app/controllers/animal.controller.php', {
                method: "POST",
                body: datos
            })
            .then( response => response.json())
            .then(data =>{
                const tabla = document.querySelector("#tabla-animal tbody")
                data.forEach(element => {
                     tabla.innerHTML += `
                     <tr>
                        <td>${element.idanimal}</td>
                        <td>${element.idpersona}</td>
                        <td>${element.especie}</td>
                        <td>${element.sexo}</td>
                        <td>${element.condicion}</td>
                        <td>${element.rescate}</td>
                        <td>${element.lugar}</td>
                        <td>
                            <a href='#' class='btn btn-sm btn-danger'>Eliminar</a>
                            <a href='#' class='btn btn-sm btn-info'>Editar</a>
                        </td>
                     </tr>`;

                });
    
            })
            }
           obtenerDatos()
        })
    </script>
</body>
</html>