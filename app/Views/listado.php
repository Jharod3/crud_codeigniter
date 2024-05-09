<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

    <title>Crud Codeigniter</title>
</head>

<body>

    <div class="container">
        <h1> CRUD con Codeigniter</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/crear' ?> ">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <label for="paterno">Primer apellido</label>
                    <input type="text" name="paterno" id="paterno" class="form-control">
                    <label for="materno">Segundo apellido</label>
                    <input type="text" name="materno" id="materno" class="form-control">
                    <br>
                    <button class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
        <hr>
                <h2>Listado de personas</h2>
              
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table  table-responsive">
                            <table class="table table-hover table-bordered">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Primer apellido</th>
                                    <th>Segundo apellido</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                                
                                <?php foreach($datos as $key):  ?>
                                    <tr>
                                        <td><?php echo $key->nombre  ?> </td>
                                        <td><?php echo $key->paterno ?> </td>
                                        <td><?php echo $key->materno ?> </td>
                                        <td> 
                                            <a href="<?php echo base_url().'/obtenerNombre/'.$key->id_nombre ?>" class="btn btn-warning  btn-sm">Editar</a>
                                        </td>
                                        <td>
                                            <a href=" <?php echo base_url().'/eliminar/'.$key->id_nombre ?> " class="btn btn-danger btn-sm">Eliminar</a>    
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>

                </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        let mensaje = '<?php echo $mensaje ?>';

        if (mensaje == '0') {
          swal('😁', 'Agregado con exito!', 'success');
           
        }else if(mensaje == '1'){
          swal('😥', 'No pudo agregarse', 'error');
            
        }else if(mensaje == '2'){
          swal('😁', 'Se actualizó con exito!', 'success');
            
        }else if(mensaje == '3'){
          swal('😥', 'No pudo actualizar', 'error');
            
        }else if(mensaje == '4'){
          swal('😁', 'Eliminado con exito!', 'success');
            
        }else if(mensaje == '5'){
          swal('😥', 'No se pudo eliminar', 'error');
            
        }
    </script>
    
</body>

</html>