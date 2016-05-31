<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Angular JSテスト</title>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular.min.js"></script>
  <script src="script.js"></script>
  <style>
    body { color:gray; }
    h1 { font-size:18pt; font-weight:bold; }
    span.label { display:inline-block;width:50px; color:red; }
    input { width:100px; }
    .msg { font-size:14pt; font-weight:bold;color:gray; }
  </style>

</head>
<body ng-app="myapp" ng-init="num = 0">
	<div ng-controller="HelloController as ctl">
		<table>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>PRICE</th>
			</tr>
			<tr ng-repeat="obj in ctl.data">
				<td>{{ obj.id }}</td>
				<td>{{ obj.name }}</td>
				<td>{{ obj.price | currency : '¥' }}</td>
				<td>{{ obj.get }}</td>
				<td>{{ obj.date | date : 'yyyy/mm/dd' }}</td>
			</tr>
		</table>
	</div>
</body>
</html>