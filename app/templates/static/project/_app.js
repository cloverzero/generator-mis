/**
 * @author <%= author %>
 * @date <%= date %>
 */
var module = angular.module('<%= moduleName %>', [
    'ngRoute',
    'ngResource',
    'ui.bootstrap',
    'ngCommon',
    'ngSanitize'
]);

module.config([
    '$routeProvider',
    '$httpProvider',
    function($routeProvider, $httpProvider) {
        $routeProvider
        //view1
        .when('/view1', {
            templateUrl: __uri('./views/view1/view1.html'),
            controller: 'View1Ctrl'
        })
        //view2
        .when('/view2', {
            templateUrl: __uri('./views/view2/view2.html'),
            controller: 'View2Ctrl'
        })
        //view3
        .when('/view3', {
            templateUrl: __uri('./views/view3/view3.html'),
            controller: 'View3Ctrl'
        })
        .otherwise({
            redirectTo: '/'
        });
    }
]);

angular.element(document).ready(function() {
    angular.bootstrap(document, [module.name]);
});