<body>
<section class="profile-nav alt green-border " ng-app="accounts" ng-controller="accounts">
    <section class="wrapper ">
        <div>
            <section class="panel col-lg-10 col-lg-offset-1">
                <header class="panel-heading">
                    <h4>Get Balance</h4>
                </header>
                <br>
                <div class="panel-body">
                    <label class="col-lg-12" ng-show="registerAccounts.length <= 0">No Register Accounts</label>
                    <form class="form-horizontal" role="form" ng-show="registerAccounts.length>0">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Select</label>
                            <div class="col-lg-10">
                                <select class="form-control m-bot15" ng-model="selectedAccount"
                                        ng-init="selectedAccount = registerAccounts[0]"
                                        ng-options="account.userName for account in registerAccounts "
                                        ng-change="getBalance(selectedAccount.address)">
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Balance</label>
                            <div class="col-lg-10">
                                <div class="input-group m-bot15">
                                    <input type="text" class="form-control" ng-model="balance">
                                    <span class="input-group-addon">Ether</span>
                                </div>
                            </div>
                        </div>
                        <button class="btn" ng-click="getBalance(selectedAccount.address)">Get Balance</button>
                        <!--<div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-danger" ng-click="getBalance()">Get Balance</button>
                    </div>
                </div>-->
                    </form>
                </div>
            </section>
        </div>
    </section>
</section>
</body>
