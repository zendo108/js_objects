<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="js/libs/angular.js/angular.js"></script>
        <title></title>
    </head>
    <body  ng-app="" ng-controller="customersController">
        <p id="demo"></p>
        <script>
            var co = {'time':2,'status':'on','reading':0};
            var cou = {'time':2,'reading':0};
            var tiro = {'min':'-2-2-2','max':'-3-3-3'};
            var app_test = {'observations':null};
            var glp = {'observations':null};
            var vent = {'loc':'inferior','tipo':'directa','area':150};
            
            var app = {'brand':'Mademsa','model':'md-1212','pot':15,'class':'a','tests':[]};
            
            var space = {'type':'cocina','vol':10,'tests':[],'apps':[]};
            
            var unit = {'type':'departamento','gas_type':'licuado','tests':[],'spaces':[]};
            
            
        </script>
        
        <script>
            function customersController($scope,$http) {
                $scope.names = response;
            }
        </script>
    </body>
</html>
