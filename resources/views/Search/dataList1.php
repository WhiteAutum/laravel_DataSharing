<body>
<section class="profile-nav alt green-border " ng-app="data" ng-controller="data">
    <section class="wrapper ">
        <div>
            <section class="panel col-lg-10 col-lg-offset-1">
                <header class="panel-heading">
                    <h4>Data List</h4>
                </header>
                <br>
                <div class="form-group">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-success col-lg-2" ng-click="getDatas()">Show</button>
                    </div>
                </div>
                <br><br>
                <table class="table table-striped border-top">
                    <thead>
                    <tr>
                        <th style="width:8px;"><input type="checkbox" class="group-checkable"/></th>
                        <th>Data Name</th>
                        <th class="hidden-phone">Type List</th>
                        <th class="hidden-phone">Introduction</th>
                        <th class="hidden-phone">Provider</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX" ng-repeat="dataSet in dataSets">
                        <td><input type="checkbox" class="checkboxes" value="1"/></td>
                        <td>{{dataSet.dataName}}</td>
                        <td class="hidden-phone">
                            <p ng-repeat="type in dataSet.types">{{type.key}} => {{type.value}}</p>
                        </td>
                        <!-- <td class="hidden-phone">{{dataSet.introduction}}</td> -->
                        <td class="hidden-phone"><a href="{{dataSet.introduction}}" target="_blank" class="btn btn-success btn-xs">Details</a></td>
                        <td class="hidden-phone">{{dataSet.provider}}</td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </section>
</section>
</body>
