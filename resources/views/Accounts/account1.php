


<body class="login-body">
<section class="profile-nav alt green-border " ng-app="accounts" ng-controller="accounts">
    <section class="wrapper ">
        <div class="profile-nav alt green-border col-lg-10 col-lg-offset-1">
            <section class="panel">
                <div class="user-heading alt green-bg">

                    <h1>Accounts List</h1>
                </div>
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
                    <tr class="odd gradeX" ng-repeat="account in nodeAccounts">
                        <td><input type="checkbox" class="checkboxes" value="1"/></td>
                        <td class="hidden-phone">{{account.userName}}</td>
                        <td>{{account.address}}</td>
                        <td>{{account.balance}}</td>
                    </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </section>
</section>
</body>
