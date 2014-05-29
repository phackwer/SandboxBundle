// Começando da linha 3 até a linha 5 é o modelo comum de declaração de uma controler no AngularJS, então repita isso
// alterando somente o nome da controler que nesse exemplo foi definida a TestCtrl,
var appBase = angular.module('appBase', []);

appBase.controller('TestCtrl', ['$scope', '$http',
    function ($scope, $http) {

        //Exemplo de criação de função no scopo do Angular, esta função estara disponivel na interface que a chama
        $scope.retornaRota = function () {

            //Este é um exemplo de requição ajax do tipo post,
            //O comando Routing.generate retorna a url do Symfony e passa um parametro
            $http.post(Routing.generate('Ibram_core_sandbox_angular_get_json_exemplo'), {foo: 'bar'})
                .success(function (data, status) {
                    $scope.data = data;
                }).error(function (data, status) {
                    $scope.status = status;
                });
        };

    }]);