<div class="app-title">
    <div>
      <h1><i class="fas fa-book-alt pr-3"></i>Lista de Clientes</h1>
    </div>
</div>

<div class="container">

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="row justify-content-end">
              <div class="col-sm-12 col-md-2">
                <button 
                <?php echo "onclick='mdlnuevoCliente()'"?>
                class="btn btn-primary btn-block m-0">
                  <i class="fas fa-plus pr-3"></i>Añadir
                </button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="datatable">
                <thead class="text-center">
                  <tr>
                    <th scope="col">N° ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Plan de Cuentas</th>
                    <th scope="col">Dia de Pago</th>
                    <th scope="col">Deuda</th>
                    <th scope="col">estado</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>
                        <span class="badge badge-pill badge-danger p-2">Netflix</span>
                        <span class="badge badge-pill badge-primary p-2">PrimeVideo</span>
                        <span class="badge badge-pill badge-primary p-2">Disney</span>
                    </td>
                    <td>18-10-2022</td>
                    <td>20.00</td>
                    <td><span class="badge badge-pill badge-warning p-2">Moroso</span></td>
                    <td><button class="btn btn-success"><i class="fas fa-eye pr-2"></i>Detalle</button></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td><span class="badge badge-pill badge-primary p-2">PrimeVideo</span></td>
                    <td></td>
                    <td>0.00</td>
                    <td><span class="badge badge-pill badge-success p-2">Al dia</span></td>
                    <td><button class="btn btn-success"><i class="fas fa-eye pr-2"></i>Detalle</button></td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!--Modal Agregar Cliente-->
<div id="modalAgregar" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-users pr-3"></i>Nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times pr-3"></i>Cancelar</button>
        <button type="button" class="btn btn-success"><i class="fas fa-save pr-3"></i>Guardar</button>
      </div>
    </div>
  </div>
</div>







<!--Scripts-->
<script>
  function mdlnuevoCliente()
  {
    $('#modalAgregar').modal('show');
  }
</script>