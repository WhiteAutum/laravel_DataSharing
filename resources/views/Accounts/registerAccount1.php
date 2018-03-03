<body>
<section class="profile-nav alt green-border " ng-app="accounts" ng-controller="accounts">
    <section class="wrapper">
        <section class="panel col-lg-10 col-lg-offset-1">
            <header class="panel-heading">
                <h4>Register Account</h4>
            </header>
            <br>
            <div class="panel-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Account Address:</label>
                        <div class="col-lg-10">
                            <select class="form-control" ng-init="selectedAccount = nodeAccounts[0]" ng-model="selectedAccount"
                                    ng-options="account.address for account in nodeAccounts "
                                    ng-change="isRegisterUserNameLegal(selectedAccount.address, userName)">
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Register Name</label>
                        <div class="col-lg-10">
                            <div class="input-group col-lg-12">
                                <input id="userName" type="text" class="form-control " ng-model="userName"
                                       ng-change="isRegisterUserNameLegal(selectedAccount.address, userName)">
                                <label>
                                    {{nameError}}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" id="inputPassword1" placeholder="Password" ng-model="password"
                                   value="unlock password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-danger"
                                    ng-click="registerAccount(selectedAccount.address, password, userName)">Register
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </section>
    </section>
</section>
</body>
