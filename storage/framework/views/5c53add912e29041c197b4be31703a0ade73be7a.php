


<?php $__env->startSection('content'); ?>

<div class="wrapper wrapper-content animated fadeInRight" ng-app="listApp" ng-controller="ListController">
    <div class="container">
        
        <div class="tabs-container">
            <ul class="nav nav-tabs" role="tablist">
                <li><a class="nav-link active" data-toggle="tab" href="#tab-cities"> Ciudades</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-customers">Clientes</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-orders">Ordenes </a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-details">Detalles  </a></li>
                <li><a class="nav-link" data-toggle="tab" href="#tab-products">Productos</a></li>
                
            </ul>
            <div class="tab-content">
                <div role="tabpanel" id="tab-cities" class="tab-pane active">
                    <div class="panel-body">
                            <?php echo $__env->make('layouts.formularios.Cities', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div role="tabpanel" id="tab-customers" class="tab-pane">
                    <div class="panel-body">
                        <?php echo $__env->make('layouts.formularios.Customers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div role="tabpanel" id="tab-orders" class="tab-pane">
                    <div class="panel-body">
                        <?php echo $__env->make('layouts.formularios.Orders', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div role="tabpanel" id="tab-details" class="tab-pane">
                    <div class="panel-body">
                        <?php echo $__env->make('layouts.formularios.Order_Details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div role="tabpanel" id="tab-products" class="tab-pane">
                    <div class="panel-body">
                        <?php echo $__env->make('layouts.formularios.Products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>


        </div>

    </div>

</div>
       


<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts_page'); ?>


    
   <!-- JS -->
<script>

  
          // Upgrade button class name
          $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-white btn-sm';
          $(document).ready(function(){
              /*active de menu*/
  
      $('.collapse-link').collapse('hide');
  
              $('.dataTables-example').DataTable({
              pageLength: 5,
                  responsive: true,
                  //dom: '<"html5buttons"B>lTfg<"top"i>rttp',
                  //dom: 'i<"html5buttons"B>lftp',
                  dom: 'i<"html5buttons"B>lftp',
               
                  "oLanguage": {
                      "sEmptyTable":     "No hay datos disponibles en la tabla",
                      "sInfo":           "Mostrando _START_ a _END_ of _TOTAL_ Registros",
                      "sInfoEmpty":      "Showing 0 to 0 of 0 entries",
                      "sInfoFiltered":   "(filtrado de _MAX_ entradas totales)",
                      "sInfoPostFix":    "",
                      "sInfoThousands":  ",",
                      "sLengthMenu":     "Ver _MENU_ Registros",
                      "sLoadingRecords": "Cargando...",
                      "sProcessing":     "Procesando...",
                      "sSearch":         "Buscar:",
                      "sZeroRecords":    "No matching records found",
                      "oPaginate": {
                          "sFirst":    "Primero",
                          "sLast":     "Último",
                          "sNext":     "Siguiente",
                          "sPrevious": "Anterior"
                      },
                      "oAria": {
                          "sSortAscending":  ": activar para ordenar columna ascendente",
                          "sSortDescending": ": activar para ordenar la columna descendente"
                      }
                  }
  
              });
  
             
  
          });
          // Upgrade button class name
  
  
      </script>
    <script>
        'use strict';
        var listApp = angular.module('listApp', ['ui.bootstrap','ngMessages','ngRoute']);
        listApp.config(function ($interpolateProvider, $httpProvider) {
            $interpolateProvider.startSymbol('<%');
            $interpolateProvider.endSymbol('%>');
            $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
        });

        listApp.controller('ListController',function ListController($scope,$uibModal,$http,$timeout, $location, $log, $filter,$rootScope) {
            
            // $scope.ciudades = 0; 
             $rootScope.ciudades = <?php echo $ciudades; ?>; 
             $rootScope.clientes = <?php echo $clientes; ?>; 

            $scope.submit_GuardarCiudades= function (Form_ciudades) {
            $scope.Form_ciudades =Form_ciudades;
             console.log( Form_ciudades);
            $scope.ruta = '<?php echo route( "GuardarCiudades" ); ?>';
            /*Se envían los datos del formulario por ajax*/
            $http.post( $scope.ruta ,
                {
                    ciudades :  Form_ciudades['ciudades'] ,
                }).then( function( responsive) {
                // $scope.data = responsive.data;
                $scope.ciudades.push(responsive.data.ciudades);
                $scope.resetForm(Form_ciudades);
            }).catch( function( data ){
                $scope.errorsciudades = data.data.errors; 
                return $scope.errorsciudades;
            });

            $scope.resetForm = function(Form_ciudades) {
                //Even when you use form = {} it does not work
                Form_ciudades.ciudades = null;
                Form_ciudades.clientes = null;
              
                } ;
            } ;


          
            
            //Form_clientes
            $scope.submit_GuardarClientes= function (Form_customers) {
            $scope.Form_customers =Form_customers;
             console.log( Form_customers);
            $scope.ruta = '<?php echo route( "GuardarClientes" ); ?>';
            /*Se envían los datos del formulario por ajax*/
            $http.post( $scope.ruta ,
                {
                    customers_id_number :  Form_customers['customers_id_number'] ,
                    customers_name :  Form_customers['customers_name'] ,
                    customers_birth_date :  Form_customers['customers_birth_date'] ,
                    customers_address :  Form_customers['customers_address'] ,
                    customers_phone :  Form_customers['customers_phone'] ,
                    ciudad_id :  Form_customers['ciudad_id'] ,
                }).then( function( responsive) {
                // $scope.data = responsive.data;
                $scope.clientes.push(responsive.data.clientes);
                $scope.resetForm(Form_customers);
            }).catch( function( data ){
                $scope.errors = data.data.errors; 
                return $scope.errors;
            });

            $scope.resetForm = function(Form_customers) {
                //Even when you use form = {} it does not work
                Form_customers.customers_id_number = '';
                Form_customers.customers_name = '';
                Form_customers.customers_birth_date = '';
                Form_customers.customers_address = '';
                Form_customers.customers_phone = '';
                Form_customers.ciudad_id = '';
              
                } ;
            } ;
        



        });
     


        angular.bootstrap( document.getElementById( "listApp" ) ,['listApp'] );




    </script>

<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\DEV\Prueba_tecnica\gitLocal\Nutibara\resources\views/inicio.blade.php ENDPATH**/ ?>