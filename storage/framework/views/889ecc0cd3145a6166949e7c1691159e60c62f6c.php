
        
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Formulario  <small>Clientes</small></h5>
                <div class="ibox-tools">
                </div>
            </div>
            <div class="ibox-content">
                <form name="Form_customers">
                    <div class="mb-3">
                      <label for="nombre" class="form-label">Cliente id Number</label>
                      <input type="numeric" class="form-control" id="customers_id_number"  ng-model="Form_customers.customers_id_number" ng-value="Form_customers.customers_id_number"  data-mask="00 0000" placeholder="Registra ...." required="numeric" >
                      <span class="form-text">00 0000</span>
                    </div>

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre cliente</label>
                        <input type="text" class="form-control" id="customers_name"  ng-model="Form_customers.customers_name" placeholder="Registra ...." required="required" >
                      </div>

                      <div class="mb-3">
                        <label for="nombre" class="form-label">Fecha de cumpleños</label>
                        <input type="text" class="form-control" id="customers_birth_date"  ng-model="Form_customers.customers_birth_date" ng-value="Form_customers.customers_birth_date" data-mask="0000-00-00" 2002-02-02 placeholder="fecha de cumpleaños ...Año/Mes/Dia." required="required" >
                        <span class="form-text">Año/Mes/Dia</span>
                      </div>
                      
                      <div class="mb-3">
                        <label for="nombre" class="form-label">Dirección cliente</label>
                        <input type="text" class="form-control" id="customers_address"  ng-model="Form_customers.customers_address" ng-value="Form_customers.customers_address" ng-init="Form_customers.customers_address" placeholder="Dirección ...." required="required" >
                        <small class="text-muted">Caracteres # <p class=text-success text-right>límite : 999 - <span class=text-danger><%Form_customers.customers_address.length%></span></p></small>
                      </div>


                      <div class="mb-3">
                        <label for="nombre" class="form-label">Telefono</label>
                        <input type="numeric" class="form-control" id="customers_phone"  ng-model="Form_customers.customers_phone" ng-value="Form_customers.customers_phone"  data-mask="000 000 0000" placeholder="Telefono ...." required="required" >
                      </div>

                      <li class="dropdown-divider"></li>
                      <div class="form-group">
                        <strong>Ciudades </strong><span class="text-danger">*</span>
                        <select  class="form-control" ng-options="item as item.city_name for item in ciudades track by item.city_id" ng-model="Form_customers.ciudad_id"></select>
                        <small class="text-muted">Obligatorio</small>
                    </div>
        <li class="dropdown-divider"></li>
        <div class="clearfix"></div>
        <div class="alert alert-danger alert-dismissable" ng-repeat="error in errors" >
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <%error[0]%>
        </div>
        <div class="clearfix"></div>
                    <button class="btn btn-white btn-sm" ng-click="cancelar()">Cancelar</button>
                    <button class="btn btn-primary btn-sm" ng-click='submit_GuardarClientes(Form_customers)' >Guardar </button>
                  </form>
            </div>
        </div>
        
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
                                    <th>Ciudad  </th>
                                    <th>Id Number </th>
                                    <th>Cumpleños </th>
                                    <th>Dirección </th>
                                    <th>Nombre </th>
                                    <th>Telefono </th>


                                </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="list in clientes track by $index">
                                        <td> <strong class="text-capitalize"><%$index +1%> </strong></td>
                                        <td><small><span class="text-success"> <%list.rel_city['city_name'] %> </span></small></td>
                                        <td> <strong class="text-capitalize"><%list.customers_id_number%> </strong></td>
                                        <td> <strong class="text-capitalize"><%list.customers_birth_date  |date:'dd/MM/yyyy' %> </strong></td>
                                        <td> <strong class="text-capitalize"><%list.customers_address%> </strong></td>
                                        <td> <strong class="text-capitalize"><%list.customers_name%> </strong></td>
                                        <td> <strong class="text-capitalize"><%list.customers_phone%> </strong></td>
                                  
                                    </tr>
                            
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
<?php /**PATH D:\DEV\Prueba_tecnica\gitLocal\Nutibara\Nutibara_ok\resources\views/layouts/formularios/Customers.blade.php ENDPATH**/ ?>