<body>
<section class="profile-nav alt green-border " ng-app="transactions" ng-controller="transactions">
    <section class="wrapper ">
        <div ng-show="registerAccounts.length > 0">
            <section class="panel col-lg-10 col-lg-offset-1">
                <header class="panel-heading">
                    <h4>Transaction Search</h4>
                </header>
                <br>
                <div class="form-group">
                    <label class="col-lg-2 control-label">From Account:</label>
                    <div class="col-lg-10">
                        <select class="form-control" ng-init="selectedAccountFrom = registerAccounts[0]"
                                ng-model="selectedAccountFrom"
                                ng-options="account.userName for account in registerAccounts ">
                        </select>
                    </div>
                </div>
                <br/> <br/>
                <div class="form-group">
                    <label class="col-lg-2 control-label">To Account:</label>
                    <div class="col-lg-10">
                        <select class="form-control" ng-init="selectedAccountTo = registerAccounts[0]" ng-model="selectedAccountTo"
                                ng-options="account.userName for account in registerAccounts ">
                        </select>
                    </div>
                </div>
                <br/> <br/>
                <div class="form-group">
                    <button type="submit" class="btn btn-success col-lg-2 col-lg-offset-10"
                            ng-click="getTrans(selectedAccountFrom.address, selectedAccountTo.address)">Search
                    </button>
                </div>
                <br/><br/>
                <table class="table table-striped border-top">
                    <thead>
                    <tr>
                        <th style="width:8px;"><input type="checkbox" class="group-checkable"/></th>
                        <th class="hidden-phone">Amount (Ether)</th>
                        <th class="hidden-phone">Block Number</th>
                        <th>Data</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX" ng-repeat="tranSet in tranSets">
                        <td><input type="checkbox" class="checkboxes" value="1"/></td>
                        <td class="hidden-phone">{{tranSet.amount}}</td>
                        <td>{{tranSet.blockNum }}</td>
                        <td>{{tranSet.data}}</td>
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
