<!DOCTYPE html5>
<html>
<head>
    <title>CallPerson</title>
    <link rel='stylesheet' href='css/style.css'/>
    <link rel="stylesheet" href="packages/bootstrap/dist/css/bootstrap.min.css">
</head>
<body ng-app="laravel_test.person_connection">
<div class=" page-header" style="text-align: center; color: slategrey">
    <h1><a style="text-decoration: none" href="/">PlayDemo</a></h1>
</div>
<div class="container">
    <div class="content ng-cloak" ng-controller="PersonController">
        <div class="panel panel-default">
            <div class="panel-heading">CallPerson</div>
            <table class="table">
                <thead>
                <tr>
                    <th class="small_field">#</th>
                    <th class="big_field">First Name</th>
                    <th class="big_field">Last Name</th>
                    <th class="small_field"></th>
                    <th class="small_field"></th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="person in person_list">
                    <td class="small_field">{{ person.id }}</td>
                    <td class="big_field">{{ person.firstname }}</td>
                    <td class="big_field">{{ person.lastname }}</td>
                    <td class="small_field"><a ng-click="showDetails(person)">details</a></td>
                    <td class="small_field"><span ng-click="delete(person)" class="glyphicon glyphicon-remove"></span></td>
                </tr>
                </tbody>
            </table>
        </div>
        <br><br><br>

        <div class="panel panel-default">
            <div class="panel-heading">Connections</div>
            <table class="table">
                <thead>
                <tr>
                    <th class="small_field">#</th>
                    <th class="big_field">From</th>
                    <th class="big_field">To</th>
                    <th class="big_field">Date</th>
                    <th class="small_field">Duration</th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="connection in connections">
                    <td class="small_field">{{ connection.id }}</td>
                    <td class="big_field">{{ connection.initperson_id }}</td>
                    <td class="big_field">{{ connection.answerperson_id }}</td>
                    <td class="big_field">{{ connection.cdate }}</td>
                    <td class="small_field">{{ connection.duration }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class=" page-header"></div>
    </div>

</div>
<script src="packages/jquery/dist/jquery.min.js"></script>
<script src="packages/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="packages/angular/angular.js"></script>
<script src="packages/angular-resource/angular-resource.js"></script>
<script src="js/person_list_controller.js"></script>
</body>
</html>