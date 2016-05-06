var app = angular.module('methotels', []);

app.controller('MainCtrl', function($scope , $window) {
 $scope.greet = function() {
    ($window.mockWindow || $window).alert('Dobrodošli na MetHotels veb-sajt!');
  }
});

app.directive('greeting', function() {
  
 return {
    link: function(scope, element, attr, ctrl) {    
      if(scope.greet){
        scope.greet()
        
      }
    }
   
 }
});