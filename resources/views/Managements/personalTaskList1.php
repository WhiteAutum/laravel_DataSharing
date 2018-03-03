<body>
<section class="profile-nav alt green-border " ng-app="taskControl" ng-controller="taskControl">
    <section class="wrapper ">
        <div>
            <section class="panel col-lg-10 col-lg-offset-1">
                <header class="panel-heading">
                    <h4>Select the Account You Searched </h4>
                </header>
                <br>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Select Account</label>
                            <div class="col-lg-10">
                                <select class="form-control m-bot15" ng-model="selectedAccount"
                                        ng-init="selectedAccount = nodeRegisterAccounts[0]"
                                        ng-options="account.userName for account in nodeRegisterAccounts"
                                        ng-change="getPersonalTaskList(selectedAccount.address)">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-danger col-lg-2" ng-click="refresh(selectedAccount.address)">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <section class="panel col-lg-10 col-lg-offset-1">
                <header class="panel-heading">
                    Provide Task List
                </header>
                <header class="panel-heading"> You have provided {{provideSum}} Task.</header>
                <table class="table table-striped border-top">
                    <thead>
                    <tr>
                        <th style="width:8px;"><input type="checkbox" class="group-checkable"/></th>
                        <th>Task Name</th>
                        <th class="hidden-phone">Type List</th>
                        <th class="hidden-phone">Requester Number</th>
                        <th>Status</th>
                        <!--<th class="hidden-phone"></th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX" ng-repeat="task in provideTaskSet">
                        <td><input type="checkbox" class="checkboxes" value="1"/></td>
                        <td>{{task.taskName}}</td>
                        <td class="hidden-phone">
                            <p ng-repeat="type in task.types">{{type.key}} =>{{type.value}}</p>
                        </td>
                        <td class="hidden-phone">{{task.requestNumber}}</td>
                        <td>{{task.finishStatus}}</td>
                    </tr>
                    </tbody>
                </table>
                <header class="panel-heading"></header>
            </section>
            <section class="panel col-lg-10 col-lg-offset-1">
                <header class="panel-heading">
                    Request Task List
                </header>
                <header class="panel-heading"> You have requested {{requestSum}} task.</header>
                <table class="table table-striped border-top">
                    <thead>
                    <tr>
                        <th style="width:8px;"><input type="checkbox" class="group-checkable"/></th>
                        <th>Task Name</th>
                        <th class="hidden-phone">Provider</th>
                        <th class="hidden-phone">Information</th>
                        <th class="hidden-phone">Request Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX" ng-repeat="task in requestTaskSet">
                        <td><input type="checkbox" class="checkboxes" value="1"/></td>
                        <td>{{task.taskName}}</td>
                        <td class="hidden-phone">{{task.provider}}</td>
                        <td class="hidden-phone">{{task.information}}</td>
                        <td class="hidden-phone">{{task.status}}</td>
                    </tr>
                    </tbody>
                </table>
                <header class="panel-heading"></header>
            </section>


        </div>
    </section>
</section>
</body>
