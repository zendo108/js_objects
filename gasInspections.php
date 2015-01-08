<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="js/libs/angular.js/angular.js"></script>
        <title>Angular Form</title>
    </head>
    <body>
        <div data-ng-app="gasInspections" data-ng-controller="unitController">
        <form novalidate>
            Unidad:<br>
            <input type="tel" data-ng-model="unit.number"><br>
            Test select:<br>
            <select data-ng-model="unit.test">
                <option value="1">first</option>
                <option value="2">second</option>
                <option value="3">third</option>
            </select>
            Tipo de Unidad:<br>
            <select data-ng-model="unit.unitTypes" ng-options="u.value as u.name  for u in unitTypes">
                
            </select>
            <br />Tipo de Gas:<br>
            <select data-ng-model="unit.gasTypes" ng-options="g.value as g.name for g in gasTypes">
                
            </select>
            <br><br>
            <button data-ng-click="reset()">RESET</button>
        </form>
        <p>unit = {{unit | json}}</p>
        <p>master = {{master}}</p>
        </div>

        <script>
            var unit = null;
            var app = angular.module("gasInspections", []);
            app.controller('unitController',function($scope){
//                alert(JSON.stringify($scope.unit));
                $scope.master = {number: "100", unitTypes: 2, gasTypes: 1};
                $scope.reset = function() {
                    $scope.unit = angular.copy($scope.master);
                
                }
                $scope.reset();
                
                $scope.unitTypes = [
                                    {name:'departamento', value:1},
                                    {name:'casa', value:2},
                                    {name:'otro', value:100}
                                ];
                $scope.unit.unitTypes = $scope.unitTypes[1].value;
//                alert($scope.unitTypes[1].name);
                
                $scope.gasTypes = [
                                    {name:'licuado', value:1},
                                    {name:'natural', value:2},
                                    {name:'ciudad', value:3},
                                    {name:'glp', value:4},
                                    {name:'otro', value:100}
                                ];
                $scope.unit.gasTypes = $scope.gasTypes[1].value;
                $scope.unit.test = 2;
                $scope.toObject = function(string){
                    JSON.parse(string);
                }
//                alert($scope.gasTypes[1].name);
                unit = $scope.unit;
            });
            
        </script>
    </body>
</html>
