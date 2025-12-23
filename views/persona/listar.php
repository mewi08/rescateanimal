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

        <table class="table table-striped" id="tabla-persona">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>DNI</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
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
            fetch('../../app/controllers/persona.controller.php',{
                method: "POST",
                body: datos
            })
            .then(response => response.json())
            .then(data =>{
                const tabla = document.querySelector("#tabla-persona tbody")
                data.forEach(element => {
                    tabla.innerHTML +=`
                    <tr>
                        <td> ${element.idpersona} </td>    
                        <td> ${element.dni} </td>   
                        <td> ${element.nombres} </td>    
                        <td> ${element.apellidos} </td>  
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