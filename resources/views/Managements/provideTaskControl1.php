<body>
<section class="profile-nav alt green-border " ng-app="taskControl" ng-controller="taskControl">
    <section class="wrapper ">
        <!-- page start-->
        <div class="row col-lg-10 col-lg-offset-1">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h4> Provide Task Control</h4>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" id="default">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Provider:</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" ng-change="getProvideTask(selectedAccount.address)"
                                                ng-model="selectedAccount"
                                                ng-init="selectedAccount = nodeRegisterAccounts[0]"
                                                ng-options="account.userName for account in nodeRegisterAccounts">
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Task Name:</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" ng-model="selectedTask"
                                                ng-init="selectedTask = taskSet[0]"
                                                ng-options="task.taskName for task in taskSet"
                                                ng-change="getTaskRequestList(task.taskName)">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10" ng-show="!isTaskFinished(selectedTask.taskName)">
                                        <button type="submit" class="btn btn-success col-lg-2"
                                                ng-click="endTask(selectedAccount.address, password,selectedTask.taskName)">Closed Task
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" placeholder="Password" ng-model="password" type="password">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="col-lg-offset-10 col-lg-4 control-label"><button class="btn btn-default col-lg-4"
                                                                                                   ng-click="getTaskRequestList(selectedTask.taskName)">
                                            Refresh
                                        </button></label>
                                </div>
                                <div><br><br>

                                    <table class="table table-striped border-top">
                                        <thead>
                                        <tr>
                                            <th style="width:8px;"><input type="checkbox" class="group-checkable"/></th>
                                            <th>Requester</th>
                                            <th class="hidden-phone">Remarks</th>
                                            <th class="hidden-phone">Status</th>
                                            <th class="hidden-phone">Confirm</th>
                                            <th class="hidden-phone">Reject</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd gradeX" ng-repeat="request in requestList" render-finish>
                                            <td><input type="checkbox" class="checkboxes" value="1"/></td>
                                            <td>{{request.requesterName}}</td>
                                            <td>{{request.information}}</td>
                                            <!--<td class="hidden-phone">{{data.provider}}</td>-->
                                            <td class="hidden-phone">{{request.status}}</td>
                                            <td>
                                                <button class="btn btn-success btn-xs"
                                                        ng-click="confirmTask(selectedAccount.address, password, selectedTask.taskName,request.requester)">
                                                    Confirm
                                                </button>
                                            </td>
                                            <td class="hidden-phone">
                                                <button class="btn btn-danger btn-xs"
                                                        ng-click="rejectTask(selectedAccount.address, password, selectedTask.taskName,request.requester)">
                                                    Reject
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--<div class="form-group">
                                    <label class="col-lg-2 control-label">Data Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" placeholder="Data Name" ng-model="dataName" ng-change="isDataExist()">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-success col-lg-2" ng-click="requestData()" ng-disabled="requestDisabled">Request Data</button>
                                    </div>
                                </div>-->
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
