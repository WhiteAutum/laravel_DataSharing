<body>
<section class="profile-nav alt green-border " ng-app="accounts" ng-controller="accounts">
    <section class="wrapper ">
        <label ng-show="registerAccounts.length <= 0">No Register Accounts</label>
        <div ng-show="registerAccounts.length > 0">
            <section class="panel col-lg-10 col-lg-offset-1">
                <header class="panel-heading">
                    <h4>Register Accounts List</h4>
                </header>
                <br>
                <div class="form-group">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-success col-lg-2" ng-click="getRegisterAccounts()">Show</button>
                    </div>
                </div>
                <br><br>
                <table class="table table-striped border-top">
                    <thead>
                    <tr>
                        <th style="width:8px;"><input type="checkbox" class="group-checkable"/></th>
                        <th>User Name</th>
                        <th class="hidden-phone">Account address</th>
                        <th>Balance(Ether)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX" ng-repeat="account in registerAccounts">
                        <td><input type="checkbox" class="checkboxes" value="1"/></td>
                        <td class="hidden-phone">{{account.userName}}</td>
                        <td>{{account.address}}</td>
                        <td>{{account.balance}}</td>
                    </tr>
                    </tbody>
                </table>
                <header class="panel-heading"></header>
            </section>
            <!--<div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-danger col-lg-2" ng-click="getProvideData()">Show</button>
                </div>
            </div>-->
        </div>
    </section>
</section>
</body>
