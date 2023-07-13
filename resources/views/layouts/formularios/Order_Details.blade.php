
        {{-- formuarios --}}
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Formulario  <small>Detalles</small></h5>
                <div class="ibox-tools">
                </div>
            </div>
            <div class="ibox-content">
                <form name="Form_detalles">
                   
                    <div class="mb-3 form-group">
                        <strong>Productos </strong><span class="text-danger">*</span>
                        <select  class="form-control" ng-options="item as item.product_description for item in productos track by item.product_id" ng-model="Form_detalles.product_id"></select>
                        <small class="text-muted">Obligatorio</small>
                    </div>
                      <li class="dropdown-divider"></li>
                      <div class="mb-3 form-group">
                        <strong>Ordenes </strong><span class="text-danger">*</span>
                        <select  class="form-control" ng-options="item as item.customers_status for item in order track by item.order_id" ng-model="Form_detalles.order_id"></select>
                        <small class="text-muted">Obligatorio</small>
                    </div>
        <li class="dropdown-divider"></li>
        <div class="clearfix"></div>
        <div class="alert alert-danger alert-dismissable" ng-repeat="error in detallerErrors" >
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <%error[0]%>
        </div>
        <div class="clearfix"></div>
                    <button class="btn btn-white btn-sm" ng-click="cancelar()">Cancelar</button>
                    <button class="btn btn-primary btn-sm" ng-click='submit_GuardarDetail(Form_detalles)' >Guardar </button>
                  </form>
            </div>
        </div>
        {{-- tablas de registros --}}
        <div class="row">

            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Registros de Ciudades</h5>
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
                                    <th>Datos del producto </th>
                                    <th>Datos del Pedido </th>

                                </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="list in detalles track by $index">
                                        <td> <strong class="text-capitalize"><%$index +1%> </strong></td>
                                        <td><small><span class="text-success"> Descripción  :<%list.rel_producto['product_description'] %> - Valor : <%list.rel_producto.product_value %> </span></small></td> 
                                        <td> <strong class="text-capitalize">Fecha de orden <%list.rel_order.order_date  |date:'dd/MM/yyyy'%> - <%list.rel_order.customers_status%> </strong></td>
                                  
                                    </tr>
                            
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>