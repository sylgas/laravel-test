(function () {
    var app;

    app = angular.module('laravel_test.person_connection', ['ngResource']);

    app.factory('CallPerson', [
        '$resource', function ($resource) {
            return $resource('/laravel_test/api/person/:id/delete', {id: "@id"})
        }
    ]);

    app.controller('PersonController', [
        '$scope', '$http', 'CallPerson', function ($scope, $http, CallPerson) {
            $scope.person_list = [];
            $scope.delete = function (person) {
                if (confirm("Do you want to delete this person?")) {
                    CallPerson.delete(person, function (res) {
                        if (res.status == 'OK') {
                            $scope.person_list = $scope.person_list.filter(function (item) {
                                return item !== person;
                            });
                        } else {
                            alert("Could not delete person");
                        }
                    }, function () {
                        alert("Could not delete person");
                    });
                }
            }

            $scope.showDetails = function (person) {
                $scope.connections = [];
                return $http.get('/laravel_test/api/person/' + person.id + '/connection').then(function (result) {
                    return angular.forEach(result.data, function (item) {
                        return $scope.connections.push(item);
                    });
                });
            }

            return $http.get('/laravel-test/api/person').then(function (result) {
                return angular.forEach(result.data, function (item) {
                    return $scope.person_list.push(item);
                });
            });
        }]
    );

}).call(this);