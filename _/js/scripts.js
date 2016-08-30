var app = angular.module('app', ['ngRoute', 'ngSanitize']);

//Config the route
app.config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {
	$locationProvider.html5Mode(true);

	$routeProvider
	.when('/personal', {
		templateUrl: myLocalized.partials + 'home.php',
		controller: 'Home',
		caseInsensitiveMatch: true
	})	
	.when('/personal/work', {
		templateUrl: myLocalized.partials + 'home.php',
		controller: 'Home',
		caseInsensitiveMatch: true
	})
	.when('/personal/work/:slug', {
		templateUrl: myLocalized.partials + 'work.php',
		controller: 'Work',
		caseInsensitiveMatch: true
	})	
	.when('/personal/contact', {
		templateUrl: myLocalized.partials + 'contact.php',
		controller: 'Contact',
		caseInsensitiveMatch: true
	});
}]);



//Home controller
app.controller('Home', ['$scope', '$http', function($scope, $http) {
	$http.get('/personal/wp-json/wp/v2/pages?filter[name]=home').success(function(res){
		$scope.posts = res;
	});

	$scope.$on('$routeChangeSuccess', function () {
	  initAllFunctions();
	});

}]);

//Work controller
app.controller('Work', ['$scope', '$http', '$routeParams', function($scope, $http, $routeParams) {
	$http.get('/personal/wp-json/wp/v2/pages?filter[name]='+ $routeParams.slug).success(function(res){
		$scope.post = res[0];
		initAllFunctions();
	});
}]);

//Contact controller
app.controller('Contact', ['$scope', '$http', function($scope, $http) {
	$http.get('/personal/wp-json/wp/v2/pages?filter[name]=contact').success(function(res){
		$scope.posts = res;
		initAllFunctions();
	});
}]);

app.directive('numbersOnly', function () {
    return {
        require: 'ngModel',
        link: function (scope, element, attr, ngModelCtrl) {
            function fromUser(text) {
                if (text) {
                    var transformedInput = text.replace(/[^0-9]/g, '');

                    if (transformedInput !== text) {
                        ngModelCtrl.$setViewValue(transformedInput);
                        ngModelCtrl.$render();
                    }
                    return transformedInput;
                }
                return undefined;
            }            
            ngModelCtrl.$parsers.push(fromUser);
        }
    };
});


function metaFunct(res){
	if(res == 'Project Gallery' || res == 'News & Press' || res == 'Portfolio'){

		var saveSETitle = $(".se-fix[data-index='"+res+"']").attr('data-title');
		var saveSEDesc = $(".se-fix[data-index='"+res+"']").attr('data-desc');
		var saveSEImg = $(".se-fix[data-index='"+res+"']").attr('data-img');
		var saveSELink = $(".se-fix[data-index='"+res+"']").attr('data-link');

		$('title').html(saveSETitle);
		$('meta[name="title"]').attr('content' , saveSETitle);
		$('meta[name="description"]').attr('content' , saveSEDesc);
		$('meta[property="og:title"]').attr('content' , saveSETitle);
		$('meta[property="og:description"]').attr('content' , saveSEDesc);
		$('meta[property="og:url"]').attr('content' , saveSELink);
		$('meta[name="twitter:card"]').attr('content' , saveSETitle);
		$('meta[name="twitter:description"]').attr('content' , saveSEDesc);
		$('meta[name="twitter:title"]').attr('content' , saveSETitle);
		$('meta[property="twitter:image"]').attr('content' , saveSEImg);
		$('meta[property="og:image"]').attr('content' , saveSEImg);

	}else{
		if(res[0].acf.seo[0]){
			$('title').html(res[0].acf.seo[0].seo_title);
			$('meta[name="title"]').attr('content' , res[0].acf.seo[0].seo_title);
			$('meta[name="description"]').attr('content' , res[0].acf.seo[0].seo_description);
			$('meta[property="og:title"]').attr('content' , res[0].acf.seo[0].seo_title);
			$('meta[property="og:description"]').attr('content' , res[0].acf.seo[0].seo_description);
			$('meta[property="og:url"]').attr('content' , res[0].link);
			$('meta[property="og:image"]').attr('content' , res[0].acf.seo[0].seo_image);
			$('meta[name="twitter:card"]').attr('content' , res[0].acf.seo[0].seo_title);
			$('meta[name="twitter:description"]').attr('content' , res[0].acf.seo[0].seo_description);
			$('meta[name="twitter:title"]').attr('content' , res[0].acf.seo[0].seo_title);
			$('meta[property="twitter:image"]').attr('content' , res[0].better_featured_image.source_url);
		}else{
			$('title').html(siteShort+' - '+res[0].title.rendered);
			$('meta[name="title"]').attr('content' , siteShort+' - '+res[0].title.rendered);
			$('meta[name="description"]').attr('content' , siteShort+' - '+res[0].title.rendered);
			$('meta[property="og:title"]').attr('content' , siteShort+' - '+res[0].title.rendered);
			$('meta[property="og:description"]').attr('content' , siteShort+' - '+res[0].title.rendered);
			$('meta[property="og:url"]').attr('content' , res[0].link);
			$('meta[property="og:image"]').attr('content' , siteShort+' - '+res[0].better_featured_image.source_url);
			$('meta[name="twitter:card"]').attr('content' , siteShort+' - '+res[0].title.rendered);
			$('meta[name="twitter:description"]').attr('content' , siteShort+' - '+res[0].title.rendered);
			$('meta[name="twitter:title"]').attr('content' , siteShort+' - '+res[0].title.rendered);
			$('meta[property="twitter:image"]').attr('content' , siteShort+' - '+res[0].better_featured_image.source_url);
		}
	}
}