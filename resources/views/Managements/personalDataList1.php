<body>

<section class="profile-nav alt green-border " ng-app="dataManagement" ng-controller="personalData">
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
                                        ng-change="getPersonalDataList(selectedAccount.address)">
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
                    Provide Data List
                </header>
                <p class="panel-heading"> You have provided {{provideSum}} data.</p>
                <table class="table table-striped border-top">
                    <thead>
                    <tr>
                        <th style="width:8px;"><input type="checkbox" class="group-checkable"/></th>
                        <th>Data Name</th>
                        <th class="hidden-phone">Type List</th>
                        <th class="hidden-phone">Requester Number</th>
                        <!--<th class="hidden-phone"></th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX" ng-repeat="data in provideDataSet">
                        <td><input type="checkbox" class="checkboxes" value="1"/></td>
                        <td>{{data.dataName}}</td>
                        <td class="hidden-phone">
                            <p ng-repeat="type in data.types">{{type.key}}=> {{type.value}}</p>
                        </td>
                        <td class="hidden-phone">{{data.requestNumber}}</td>
                    </tr>
                    </tbody>
                </table>
                <header class="panel-heading"></header>
            </section>
            <section class="panel col-lg-10 col-lg-offset-1">
                <header class="panel-heading">
                    Request Data List
                </header>
                <p class="panel-heading">
                    <label class="col-lg-4"> You have requested {{requestSum}} data.</label>
                    <label class="col-lg-offset-2 col-lg-2">Request Ticket</label>
                    <input type="text" class="col-lg-4"
                           placeholder="Request Ticket"
                           ng-model="requestT">
                <hr/>
                </p>
                <table class="table table-striped border-top">
                    <thead>
                    <tr>
                        <th style="width:8px;"><input type="checkbox" class="group-checkable"/></th>
                        <th>Data Name</th>
                        <th class="hidden-phone">Provider</th>
                        <th class="hidden-phone">Request Status</th>
                        <th class="hidden-phone">Access Data(Get Capability)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX" ng-repeat="data in requestDataSet">
                        <td><input type="checkbox" class="checkboxes" value="1"/></td>
                        <td>{{data.dataName}}</td>
                        <td class="hidden-phone">{{data.provider}}</td>
                        <td class="hidden-phone">{{data.status}}</td>
                        <td class="hidden-phone">
                            <button class="btn btn-success" ng-show="{{data.accessable}}"
                                    ng-click="getCapability(data.dataName, requestT, selectedAccount.address)">Access Data
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <header class="panel-heading"></header>
            </section>
        </div>
    </section>
</section>
</body>
