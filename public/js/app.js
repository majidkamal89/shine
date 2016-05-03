var app = angular.module('myApp', ['ui.bootstrap']);

app.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});
app.controller('customersCrtl', function ($scope, $http, $timeout) {
    $http.get('/getData').success(function(data){
        $scope.list = angular.copy(data);
        $scope.currentPage = 1; //current page
        $scope.entryLimit = 5; //max no of items to display in a page
        $scope.filteredItems = $scope.list.length; //Initially for no filter  
        $scope.totalItems = $scope.list.length;
		$scope.list.selected = {};
        $scope.success = false;
        $scope.error = false;
        $scope.message = '';
    });
    $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
    };
    $scope.filter = function() {
        $timeout(function() {
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };
    $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };
	$scope.perPage = function(perpage, event) {
		$scope.entryLimit = perpage;
		//event.preventDefault();
	};
	$scope.openEditModel = function(data) {
		$scope.list.selected = angular.copy(data);
		$("#editModel").modal("show");
	};
	$scope.updateRecord = function(id) {
		$http.post('/updateData', $scope.list.selected).success(function(data){
			if(data.success){
				var index = getIndex(id);
				$scope.list[index].country_name = $scope.list.selected.country_name;
				$scope.list.selected = {};
				$("#editModel").modal("hide");
				$scope.success = true;
				$scope.message = data.success;
                refresh();
			} else {
				$scope.error = true;
				$scope.message = data.error;
                refresh();
			}
		});
		
	};
	$scope.openAddModel = function() {
		$("#modalDefault").modal("show");
	};
	$scope.addRecord = function() {
		$http.post('/getData', {'country_name':$scope.country_name}).success(function(data){
			if(data.error) {
				alert(data.error);
				return;
			} else {
				$scope.list = angular.copy(data);
				$scope.currentPage = 1; //current page
				$scope.entryLimit = 5; //max no of items to display in a page
				$scope.filteredItems = $scope.list.length; //Initially for no filter
				$scope.totalItems = $scope.list.length;
				$scope.list.selected = {};
			}
		});

		//$scope.list.push({ 'id':4, 'country_name':$scope.country_name });
		$scope.id='';
		$scope.country_name='';
		$("#modalDefault").modal("hide");
		$scope.filteredItems = $scope.list.length;
	};
	$scope.removeRow = function(id, status){
		$http.post('/deleteData', {'id':id, 'status':status}).success(function(data){
			if(data.success){
				var index = -1;
				var comArr = eval( $scope.list );
				for( var i = 0; i < comArr.length; i++ ) {
					if( comArr[i].id === id ) {
						index = i;
						break;
					}
				}
				if( index === -1 ) {
					alert( "Something gone wrong" );
				}
				$scope.list.splice( index, 1 );
				$scope.filteredItems = $scope.list.length;
				alert(data.success);
				return;
			} else {
				alert(data.error);
				return;
			}
		});
   };
    function getIndex(id) {
	   for(var i=0; i<$scope.list.length; i++)
	   if($scope.list[i].id == id)
	   return i;
	   return -1;
    }
    function refresh() {
        $timeout(function() {
            $scope.success = false;
            $scope.error = false;
            $scope.message = '';
        }, 5000);
    }
});