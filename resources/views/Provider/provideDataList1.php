<body>
<!--这里不太确定数据列表绑定的是哪个angular模块-->
<section class="profile-nav alt green-border " ng-app="provideData" ng-controller="provideData">
    <section class="wrapper ">
        <div>
            <section class="panel col-lg-10 col-lg-offset-1">
                <header class="panel-heading">
                    <h4>Provider's Data List</h4>
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
                                        ng-click="getProvideData(selectedAccount.address)">Search Data
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <section class="panel col-lg-10 col-lg-offset-1">
                <header class="panel-heading">
                    Data List
                </header>
                <table class="table table-striped border-top">
                    <thead>
                    <tr>
                        <th style="width:8px;"><input type="checkbox" class="group-checkable"/></th>
                        <th>Data Name</th>
                        <th class="hidden-phone">Type List</th>
                        <!-- <th class="hidden-phone">IPFS</th> -->
                        <th class="hidden-phone">Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd gradeX" ng-repeat="data in dataSet">
                        <td><input type="checkbox" class="checkboxes" value="1"/></td>
                        <td>{{data.dataName}}</td>
                        <td class="hidden-phone"><p ng-repeat="type in data.types">{{type.key}}
                                => {{type.value}}</p></td>
                        <!-- <td class="hidden-phone">{{data.introduction}}</td> -->
                        <td class="hidden-phone"><a href="{{data.introduction}}" target="_blank" class="btn btn-success btn-xs">Details</a></td>
                        <!-- <td class="hidden-phone"><a href="http://ipfs.io/ipfs/QmbdvonttJ7BkcPp4WZGjpUX7aq5XYGyGKuQmvQa2K1Nkq" class="btn btn-success btn-xs">Details</a></td> -->
                    </tr>
                    </tbody>
                </table>
                <header class="panel-heading"></header>
            </section>


        </div>
    </section>
</section>
</body>
