<body>
<section class="profile-nav alt green-border " ng-app="requestTask" ng-controller="requestTask">
    <section class="wrapper ">
        <!-- page start-->
        <div class="row col-lg-10 col-lg-offset-1">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h4>Request Task</h4>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" id="default">
                            <fieldset class="step">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Request:</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" ng-init="selectedAccount=nodeRegisterAccounts[0]"
                                                ng-model="selectedAccount"
                                                ng-options="account.userName for account in nodeRegisterAccounts">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="Password" ng-model="password" type="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Task Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" id="dataName" class="form-control" placeholder="Task Name" ng-model="taskName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Remark</label>
                                    <div class="col-lg-10">
                                        <input id="Remark" type="text" class="form-control" placeholder="Remark" ng-model="information">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-success col-lg-2"
                                                ng-click="requestTask(taskName, selectedAccount.address, password, information)">Request
                                            Task
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
</body>
