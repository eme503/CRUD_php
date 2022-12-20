<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CRUD php y Mysql</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="">
    </head>
    <style>
        h3{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .formData{
            position: relative;
            left: 15px;
        }
    </style>
    <body>
        <h3 class="text-center p-3">Registro de empleados</h3>
        <div class="formData">
        <div class="container-fluid row">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Dui</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Cargo</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
        <div class="col-8 p-4">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Dui</th>
      <th scope="col">Cargo</th>
      <th scope="col">Modificar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>  
    </tr>
  </tbody>
</table>
    </div>
</div>
     </div>
        <script src="" async defer></script>
    </body>
</html>