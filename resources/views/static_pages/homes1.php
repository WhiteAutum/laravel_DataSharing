<body>
<section class="profile-nav alt green-border " ng-app="config" ng-controller="config">
    <section class="wrapper ">
        <div>
            <section class="panel col-lg-10 col-lg-offset-1">
                <header class="panel-heading">
                    <h4>System Config</h4>
                </header>
                <br>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group" ng-show="auth">
                            <label for="httpAddress" class="col-lg-2 control-label">Node Address</label>
                            <div class="col-lg-10">
                                <input type="text" id="httpAddress" class="form-control" ng-model="httpAddress">
                            </div>
                        </div>
                        <div class="form-group" ng-show="auth">
                            <label for="contractAddress" class="col-lg-2 control-label">Contract Address</label>
                            <div class="col-lg-10">
                                <input type="text" id="contractAddress" class="form-control" ng-model="contractAddress">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Switch Manager</label>
                            <div class="col-lg-10 radio">
                                <label class="col-lg-1"><input type="radio" name="role" ng-model="role" value=false>User</label>
                                <label class="col-lg-2"><input type="radio" name="role" ng-model="role" value=true>Manager</label>
                                <label class="col-lg-5">Admin Password: <input type="password" ng-model="password"></label>
                                <label class="col-lg-4">Current Role: {{status}}</label>
                            </div>
                        </div>
                        <button ng-click="updateConfig()" class="btn btn-success">Update Config</button>
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
