<body>
<section class="profile-nav alt green-border " ng-app="provideTask" ng-controller="provideTask">
    <section class="wrapper ">
        <div>
            <section class="panel col-lg-10 col-lg-offset-1">
                <header class="panel-heading">
                    <h4>Provider's Task List</h4>
                </header>
                <br>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Select Provider</label>
                            <div class="col-lg-10">
                                <select class="form-control m-bot15" ng-model="selectedAccount"
                                        ng-init="selectedAccount=registerAccounts[0]"
                                        ng-options="account.userName for account in registerAccounts">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-danger col-lg-2"
                                        ng-click="getProvideTask(selectedAccount.address)">Search Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <section class="panel col-lg-10 col-lg-offset-1">
                <header class="panel-heading">
                    Task List
                </header>
                <table class="table table-striped border-top">
                    <thead>
                    <tr>
                        <th style="width:8px;"><input type="checkbox" class="group-checkable"/></th>
                        <th>Task Name</th>
                        <th class="hidden-phone">Type List</th>
                        <th class="hidden-phone">IPFS</th>
                        <th class="hidden-phone">Status</th>
                        <th class="hidden-phone">Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX" ng-repeat="task in taskSets">
                        <td><input type="checkbox" class="checkboxes" value="1"/></td>
                        <td>{{task.taskName}}</td>
                        <td class="hidden-phone"><p ng-repeat="type in task.types">{{type.key}}
                                =>{{type.value}}</p></td>
                        <td class="hidden-phone">{{task.introduction}}</td>
                        <td class="hidden-phone">{{task.finishStatus}}</td>
                        <td class="hidden-phone"><a href="http://www.baidu.com" target="_blank" class="btn btn-success btn-xs">Details</a></td>
                    </tr>
                    </tbody>
                </table>
                <header class="panel-heading"></header>
            </section>


        </div>
    </section>
</section>
</body>
