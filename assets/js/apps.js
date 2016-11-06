//define angular
var kir = angular.module('kirapp',[]);

//variable url
var urlhome = 'http://localhost/kir/';

//variable error
var errorloading = 'Mohon maaf, tidak bisa memproses data anda';

//module angular
kir.controller('front',function($scope,$http,$window,$location){
	//blank data
	$scope.formData = {};
	//process the form
	$scope.prosesForm = function(){
		//hide modal
	}
});