var app = angular.module('myapplication', []);
app.controller('angularController', function($scope,$http) {
	$scope.save = function(){
        var data = {
            name : $scope.name,
            address : $scope.address,
            age : $scope.age,
        }
        console.log(data)
        $http.post('/angularjs/postreq',data)
        .then(function(d){            
            $scope.name = ""
            $scope.address = ""
            $scope.age = ""
            $scope.$apply()
            console.log(d)            
        })


    }
});

// app.directive('loadingButton', ['$parse',function ($parse) {
//     return {
//         link: function ($scope, element, attrs) { 
                            	
//         }
//     };
// }]);
