        
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Formulario  <small>Ciudades</small></h5>
                <div class="ibox-tools">
                </div>
            </div>
            <div class="ibox-content">
                <form name="Form_ciudades">
                    <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre ciudades</label>
                      <input type="text" class="form-control" id="nombre"  ng-model="Form_ciudades.ciudades" placeholder="Registra ...." required="required" >
                    </div>

                    
        <li class="dropdown-divider"></li>
        <div class="clearfix"></div>
        <div class="alert alert-danger alert-dismissable" ng-repeat="error in errorsciudades" >
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <%error[0]%>
        </div>
        <div class="clearfix"></div>
                    <button class="btn btn-white btn-sm" ng-click="cancelarPublicacion()">Cancelar</button>
                    <button class="btn btn-primary btn-sm" ng-click='submit_GuardarCiudades(Form_ciudades)' >Guardar </button>
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
                                    <th>Ciudades </th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="list in ciudades track by $index">
                                        <td> <strong class="text-capitalize"><%$index +1%> </strong></td>
                                        <td><small><span class="text-success"> <%list.city_name %> </span></small></td>
                                  
                                    </tr>
                            
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
<?php /**PATH D:\DEV\Prueba_tecnica\gitLocal\Nutibara\Nutibara_ok\resources\views/layouts/formularios/Cities.blade.php ENDPATH**/ ?>