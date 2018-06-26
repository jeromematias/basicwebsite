var app = angular.module('myApp', []);
app.controller('LandingController', function($scope,$http) {

    $scope.jobLists = [];
    $scope.jobsList = function(){
        $http.get('/landing/jobList',{})
        .then(function(d){
            console.log(d)
            console.log(d.data)
            $scope.jobLists = d.data                        
        })
    }

	$scope.fileChanged = function(element){
    	$scope.file = element.files
    	$scope.$apply();    	
    	console.log($scope.file)
    }
    
    $scope.JobPost = function(){        
        
        var data = {
            jobTitle : $scope.jobTitle,
            companyName : $scope.companyName,
            jobDescription : $scope.jobDescription,
            jobLocation : $scope.jobLocation,            
        }        
        $http.post('/landing/JobPost',data)
            .then(function(d){
                console.log(d)
                $scope.jobTitle = "" 
                $scope.companyName = ""
                $scope.jobDescription = ""
                $scope.jobLocation = ""
                $scope.jobsList();
                $('.modal#modalNewPost').modal('hide')
                
            })
    }
    
    $scope.jobsList();
    $scope.postJob = function(){
        var formData = new FormData();
        formData.append("file", $scope.file[0]); 
        
        var data = {
            jobTitle : $scope.jobTitle,
            companyName : $scope.companyName,
            jobDescription : $scope.jobDescription,
            jobLocation : $scope.jobLocation,
            file : $scope.file[0],
        }        

        console.log(data.file)
        $http({
            method : "POST",
            url : '/landing/postJob',
            data: data,
            headers: { 'Content-Type': undefined},
            transformRequest: function(data) {
                var formData = new FormData();
                formData.append("file", $scope.file[0]);
                return formData;
            },
        }).then(function mySuccess(response) {
            console.log(response)
            $scope.jobsList();
        }, function myError(response) {
            console.log(response)
        });
    }

    $scope.uploadFile = function(){

    	var formData = new FormData();
        formData.append("file", $scope.file[0]);        
    	
    	$http.post('/landing/upload',formData,
    	{
    		headers : {'content-type':undefined},
    		transformRequest: angular.identity,
    	})
    	.then(function(d){
    		console.log(d)
    	})
    }    
});

app.directive('loadingButton', ['$parse',function ($parse) {
    return {
        link: function ($scope, element, attrs) { 
                            	
        }
    };
}]);
