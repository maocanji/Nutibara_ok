
        
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Formulario  <small>Pedidos</small></h5>
                <div class="ibox-tools">
                </div>
            </div>
            <div class="ibox-content">
                <form name="Form_order">
                  

                 
                      <div class="mb-3">
                        <label for="nombre" class="form-label">Fecha del pedido</label>
                        <input type="text" class="form-control" id="order_date"  ng-model="Form_order.order_date" ng-value="Form_order.order_date" data-mask="0000-00-00"  placeholder="fecha del pedido ...Año/Mes/Dia." required="required" >
                        <span class="form-text">Año/Mes/Dia</span>
                      </div>
                     

                      <div class="mb-3">
                        <label for="nombre" class="form-label">Valor</label>
                        <input type="numeric" class="form-control" id="order_total"  ng-model="Form_order.order_total" ng-value="Form_order.order_total" placeholder="$ ...." data-mask="0000.00" required="required" >
                      </div>

                      <div class="mb-3">
                        <label for="nombre" class="form-label">Fecha de entrega </label>
                        <input type="text" class="form-control" id="order_date_delivery"  ng-model="Form_order.order_date_delivery" ng-value="Form_order.order_date_delivery" data-mask="0000-00-00"  placeholder="fecha de entrega ...Año/Mes/Dia." required="required" >
                        <span class="form-text">Año/Mes/Dia</span>
                      </div>
                     
                

                      <div class="mb-3">
                        <label for="nombre" class="form-label">Estado del pedido</label>
                        <input type="text" class="form-control" id="customers_status"  ng-model="Form_order.customers_status" ng-value="Form_order.customers_status"  placeholder=".. ...." required="required" >
                      </div>

                      <li class="dropdown-divider"></li>
                      <div class="form-group">
                        <strong>Nombre del Cliente </strong><span class="text-danger">*</span>
                        <select  class="form-control" ng-options="item as item.customers_name for item in clientes track by item.customers_id" ng-model="Form_order.customers_id"></select>
                        <small class="text-muted">Obligatorio</small>
                    </div>
        <li class="dropdown-divider"></li>
        <div class="clearfix"></div>
        <div class="alert alert-danger alert-dismissable" ng-repeat="error in orders_error" >
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <%error[0]%>
        </div>
        <div class="clearfix"></div>
                    <button class="btn btn-white btn-sm" ng-click="cancelar()">Cancelar</button>
                    <button class="btn btn-primary btn-sm" ng-click='submit_GuardarOrder(Form_order)' >Guardar </button>
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
                                    <th>Nombre del Cliente  </th>
                                    <th>Estado </th>
                                    <th>Fecha del pedido </th>
                                    <th>Fecha del Domicilio </th>
                                    <th>Total </th>


                                </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="list in order track by $index">
                                        <td> <strong class="text-capitalize"><%$index +1%> </strong></td>
                                        <td><small><span class="text-success"> <%list.rel_custumers['customers_name'] %> </span></small></td>
                                        <td> <strong class="text-capitalize"><%list.customers_status%> </strong></td>
                                        <td> <strong class="text-capitalize"><%list.order_date  |date:'dd/MM/yyyy' %> </strong></td>
                                        <td> <strong class="text-capitalize"><%list.order_date_delivery  |date:'dd/MM/yyyy' %> </strong></td>
                                        <td> <strong class="text-capitalize"><%list.order_total%> </strong></td>
                                  
                                    </tr>
                            
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
<?php /**PATH D:\DEV\Prueba_tecnica\gitLocal\Nutibara\Nutibara_ok\resources\views/layouts/formularios/Orders.blade.php ENDPATH**/ ?>