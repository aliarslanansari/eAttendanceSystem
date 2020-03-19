app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){
	 
      $scope.displayDat = function(){  
           $http.get("select.php")  
           .success(function(data){  
                $scope.attend = data;		
           }); 
      }  
 });