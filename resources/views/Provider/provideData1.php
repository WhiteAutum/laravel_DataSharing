<body>
<section class="profile-nav alt green-border " ng-app="provideData" ng-controller="provideData">
    <section class="wrapper ">
        <!-- page start-->
        <div class="row col-lg-10 col-lg-offset-1">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h4>Provide Data</h4>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" id="default">
                            <fieldset title="Step1" class="step">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Provider:</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" ng-model="selectedAccount"
                                                ng-init="selectedAccount = nodeRegisterAccounts[0]"
                                                ng-options="account.userName for account in nodeRegisterAccounts ">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" placeholder="Password" ng-model="password" type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Data Name</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Data Name" ng-model="dataName"
                                               ng-change="checkProvideDataNameLegal(dataName)">
                                        <p>{{nameError}}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">IPFS</label>
                                    <div class="col-lg-9">
                                        <!-- <textarea type="text" cols="10" rows="5" class="form-control" placeholder="IPFS"
                                                  ng-model="introduction"></textarea> -->
                                        <input type="text" class="form-control" placeholder="IPFS" ng-model="introduction">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Access Way/Capability</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Capability" ng-model="capability">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Data Control Key</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Data Control Key" ng-model="cap_pwd">
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">{{tool_type.key}}</label>
                                        <div class="col-lg-9">
                                            <select class="form-control" ng-model="selectedTool"
                                                    ng-init="selectedTool = tool_type.value[0]"
                                                    ng-options="tool for tool in tool_type.value ">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">{{purpose_type.key}}</label>
                                        <div class="col-lg-9">
                                            <select class="form-control" ng-model="selectedPurpose"
                                                    ng-init="selectedPurpose = purpose_type.value[0]"
                                                    ng-options="purpose for purpose in purpose_type.value ">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div ng-repeat="type in types">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Type Key {{$index+1}}:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="Key" ng-model="type.key">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Type Value {{$index+1}}:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" placeholder="value" ng-model="type.value">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-3">
                                        <button type="submit" class="btn btn-success col-lg-12" ng-click="addType()">Add Type</button>
                                    </div>
                                    <div class="col-lg-offset-1 col-lg-3">
                                        <button type="submit" class="btn btn-danger col-lg-12" ng-click="removeType()">Remove Type</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-3">
                                        <button type="submit" class="btn btn-danger col-lg-12"
                                                ng-click="provideData(selectedAccount.address, password, dataName, introduction, capability, cap_pwd, selectedTool,selectedPurpose)">
                                            Provide
                                            Data
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
