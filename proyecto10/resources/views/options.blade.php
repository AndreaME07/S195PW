
  
  <!-- Modal Actualizar -->
  
  <div class="modal fade" id=""  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content fw-bold">
        
        <div class="modal-header">
          <h1 class="modal-title fs-4 fw-bold text-danger" id="staticBackdropLabel">Actualizar Cliente </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body text-primary">

            <form method="POST" action="">
                
                @csrf 
                @method() 
                
                <div class="mb-3">
                  <label  class="form-label">Nombre: </label>
                  <input type="text" class="form-control" name="nombre" value="">
                </div>

                <div class="mb-3">
                <label class="form-label">Apellido: </label>
                <input type="text" class="form-control" name="apellido" value="">
                </div>

                <div class="mb-3"> 
                <label class="form-label">Correo: </label>
                <input type="text" class="form-control" name="correo" value="">
                </div>

                <div class="mb-3"> 
                  <label class="form-label">Telefono: </label>
                  <input type="number" class="form-control" name="telefono" value="">
                  </div>
   
        </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-warning"> <i class="bi bi-pencil-square"></i>  Actualizar Cliente </button>
        </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <i class="bi bi-x-square"></i> Close</button>
        </div>

      </div>
    </div>
  </div>


  

  
  <!-- Modal Para Eliminar  -->

  <div class="modal fade" id=""  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
        <div class="modal-header">
          <h1 class="modal-title fs-4 fw-semibold fw-bold" id="staticBackdropLabel">Eliminar Cliente </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <form method="POST" action="">
                @csrf 
                @method('')   
                <div class="text-danger fs-4 fw-semibold">
                  ¿Seguro que borraras al cliente   ?
                </div>           

   
        </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-danger"> <i class="bi bi-trash"></i> Si, Borralo </button>
        </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No,Salir</button>
        </div>

      </div>
    </div>
  </div>
  



  <!-- disparadores para la vista Clientes -->

  <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-list-stars"></i> Opciones
            </button>
            <ul class="dropdown-menu">
                <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#update{{$cliente->id}}">
                    <i class="bi bi-pencil-square"></i>Editar 
                  </button>
                <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#destroy{{$cliente->id}}">
                    <i class="bi bi-trash"></i> Borrar 
                  </button>
            </ul>
          </div> 