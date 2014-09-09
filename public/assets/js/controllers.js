var styleModule = angular.module('style', ['ngCookies']);

styleModule.controller('StyleController', ['$scope', '$cookieStore', function($scope, $cookieStore) {
	$scope.styles = [
		{title: 'amelia', selected: false},
		{title: 'cerulean', selected: false},
		{title: 'cosmo', selected: false},
		{title: 'cyborg', selected: false},
		{title: 'darkly', selected: false},
		{title: 'flatly', selected: false},
		{title: 'journal', selected: false},
		{title: 'lumen', selected: false},
		{title: 'paper', selected: false},
		{title: 'readable', selected: false},
		{title: 'sandstone', selected: true},
		{title: 'simplex', selected: false},
		{title: 'slate', selected: false},
		{title: 'spacelab', selected: false},
		{title: 'superhero', selected: false},
		{title: 'united', selected: false},
		{title: 'yeti', selected: false} 
	];

	$scope.selectStyle = function (style) {
		// deselect current style
		for (var i = $scope.styles.length - 1; i >= 0; i--) {
		if ($scope.styles[i].title == $scope.currentStyle) $scope.styles[i].selected = false;
		};
		//console.log($scope.currentstyle)
		//select clicked style
		for (var i = $scope.styles.length - 1; i >= 0; i--) {
		if ($scope.styles[i].title == style) {
			$scope.styles[i].selected = true;
			};
		};
		//console.log(style);
		for (var i = $scope.styles.length - 1; i >= 0; i--) {
			if ($scope.styles[i].selected) {
				$scope.currentStyle = $scope.styles[i].title;
				$cookieStore.put('saveStyle', $scope.currentStyle);
				$scope.currentStyle = $cookieStore.get('saveStyle');
			};
		};
	}

	for (var i = $scope.styles.length - 1; i >= 0; i--) {
		if ($scope.styles[i].selected) {
			$scope.currentStyle = $scope.styles[i].title;
			$cookieStore.put('saveStyle', $scope.currentStyle);
			$scope.currentStyle = $cookieStore.get('saveStyle');
		};
	};



}]);