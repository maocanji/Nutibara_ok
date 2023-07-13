
        
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Formulario  <small>productos</small></h5>
                <div class="ibox-tools">
                </div>
            </div>
            <div class="ibox-content">
                <form name="Form_products">
                  
                      <div class="mb-3">
                        <label for="nombre" class="form-label">Valor</label>
                        <input type="numeric" class="form-control" id="product_value"  ng-model="Form_products.product_value" ng-value="Form_products.product_value" placeholder="$ ...." data-mask="0000.00" required="required" >
                      </div>

                      <div class="mb-3">
                        <label for="nombre" class="form-label">Cantidad</label>
                        <input type="numeric" class="form-control" id="product_amount"  ng-model="Form_products.product_amount" ng-value="Form_products.product_amount" placeholder="$ ...." data-mask="00" required="required" >
                      </div>
                      
                      <div class="mb-3">
                        <label for="nombre" class="form-label">Estado</label>
                        <input type="numeric" class="form-control" id="product_status"  ng-model="Form_products.product_status" ng-value="Form_products.product_status" placeholder="...."  required="required" >
                      </div>
                
                      <div class="mb-3">
                        <label for="nombre" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="product_description"  ng-model="Form_products.product_description" ng-value="Form_products.product_description" ng-init="Form_products.product_description" placeholder="Dirección ...." required="required" >
                        <small class="text-muted">Caracteres # <p class=text-success text-right>límite : 999 - <span class=text-danger><%Form_products.product_description.length%></span></p></small>
                      </div>

        <li class="dropdown-divider"></li>
        <div class="clearfix"></div>
        <div class="alert alert-danger alert-dismissable" ng-repeat="error in producterrors" >
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <%error[0]%>
        </div>

        <div class="clearfix"></div>
                    <button class="btn btn-white btn-sm" ng-click="cancelar()">Cancelar</button>
                    <button class="btn btn-primary btn-sm" ng-click='submit_GuardarProductos(Form_products)' >Guardar </button>
                  </form>
            </div>
        </div>
        
        <div class="row">

            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Registros de los Pedidios</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#" class="dropdown-item">Config option 1</a>
                                </li>
                                <li><a href="#" class="dropdown-item">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                   
                        <div class="table-responsive">
                            <table  class="table dataTables-example">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Descripción  </th>
                                    <th>Cantidad </th>
                                    <th>Valor </th>
                                    <th>Estado </th>

                                </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="list in productos track by $index">
                                        <td> <strong class="text-capitalize"><%$index +1%> </strong></td>
                                        <td><small><span class="text-success"> <%list.product_description %> </span></small></td>
                                        <td> <strong class="text-capitalize"><%list.product_amount%> </strong></td>
                                        <td> <strong class="text-capitalize"><%list.product_value %> </strong></td>
                                        <td> <strong class="text-capitalize"><%list.product_status%> </strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div><?php /**PATH D:\DEV\Prueba_tecnica\gitLocal\Nutibara\Nutibara_ok\resources\views/layouts/formularios/Products.blade.php ENDPATH**/ ?>