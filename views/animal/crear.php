<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Animal</title>
</head>
<body>
  <div class="container mt-3">
   <h1>Registro de animales rescatados</h1>
   <form action="" id="formulario-animal">
    <div  class="card">
      <div class="card-header">Complete el formulario</div>
       <!-- formulario de registro -->
      <div class="card-body">
        <div class="form-floating mb-2">
          <input type="number" min="1" value="1" id="rescatista" class="form-control" required>
          <label for="rescatista">Id Rescatista</label>
        </div>

        <div class="form-floating mb-2">
          <input type="text" id="especie" class="form-control" required>
          <label for="especie">Especie</label>
        </div>
        
        <div class="form-floating mb-2">
         <select name="" id="sexo" class="form-select" required>
          <option value="F">F</option>
          <option value="M">M</option>
         </select>
          <label for="especie">sexo</label>
        </div>
        
        <div class="form-floating mb-2">
          <select id="condicion" class="form-select">
            <option value="">Selecciona</option>
            <option value="Critico">Critico</option>
            <option value="Grave">Grave</option>
            <option value="Estable">Estable</option>
            <option value="Bueno">Bueno</option>
          </select>
          <label for="condicion">Condicion</label>
        </div>
        <div class="form-floating mb-2">
          <input type="date" id="fecharescate" class="form-control" required>
          <label for="fecharescate">Fecha rescate</label>
        </div>
        <div class="form-floating mb-2">
          <input type="text" id="lugar" class="form-control">
          <label for="lugar">Lugar</label>
        </div>
      </div>
      <div class="card-footer text-end">
        <button class="btn btn-primary" type="submit">Guardar</button>
        <button class="btn btn-outline-secondary" type="reset">Cancelar</button>
      </div>
    </div>
   </form>
  </div>
  <script>
     document.addEventListener("DOMContentLoaded", function(){
      function registrarPersona(){
        const datos = new FormData()
        datos.append("operacion","registrar")
      }
      registrarPersona()
     })
  </script>
</body>
</html>