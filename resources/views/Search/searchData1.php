<body>
<section class="profile-nav alt green-border " ng-app="searchData" ng-controller="searchData">
    <section class="wrapper ">
        <!-- page start-->
        <div class="row col-lg-10 col-lg-offset-1">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h4>Search Data By Name</h4>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <fieldset class="step">

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Data Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" placeholder="Data Name" ng-model="dataName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-danger col-lg-2" ng-click="searchDataByName(dataName)">Search
                                        </button>
                                    </div>
                                </div>
                                <table class="table  border-top">
                                    <thead>
                                    <tr>
                                        <th style="width:8px;"><input type="checkbox" class="group-checkable"/></th>
                                        <th>Data Name</th>
                                        <th class="hidden-phone">Type List</th>
                                        <th class="hidden-phone">IPFS</th>
                                        <th class="hidden-phone">Provider</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">
                                        <td><input type="checkbox" class="checkboxes" value="1"/></td>
                                        <td>{{data.dataName}}</td>
                                        <td class="hidden-phone">
                                            <p ng-repeat="type in data.types">{{type.key}}=>{{type.value}}</p>
                                        </td>
                                        <td class="hidden-phone"><a href="{{data.introduction}}" target="_blank" class="btn btn-success btn-xs">Details</a></td>
                                        <td class="hidden-phone">{{data.provider}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </fieldset>

                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<section class="profile-nav alt green-border " ng-app="searchTask" ng-controller="searchTask">
    <section class="wrapper ">
        <!-- page start-->
        <div class="row col-lg-10 col-lg-offset-1">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h4>Search Data By Type</h4>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" id="default">
                            <fieldset class="step">
                                <div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">{{tool_type.key}}</label>
                                        <div class="col-lg-7">
                                            <select class="form-control" ng-model="selectedTool"
                                                    ng-init="selectedTool = tool_type.value[0]"
                                                    ng-options="tool for tool in tool_type.value ">
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-danger col-lg-2"
                                                ng-click="searchDataByType(tool_type.key, selectedTool)">Search By Tool
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">{{purpose_type.key}}</label>
                                        <div class="col-lg-7">
                                            <select class="form-control" ng-model="selectedPurpose"
                                                    ng-init="selectedPurpose = purpose_type.value[0]"
                                                    ng-options="purpose for purpose in purpose_type.value ">
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-danger col-lg-2"
                                                ng-click="searchDataByType(purpose_type.key, selectedPurpose)">Search By Purpose
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Type Key</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" placeholder="Type Key" ng-model="type_key">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Type Value</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" placeholder="Type Value" ng-model="type_value">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-danger col-lg-2"
                                                ng-click="searchDataByType(type_key, type_value)">Search
                                        </button>
                                    </div>
                                </div>
                                <table class="table table-striped border-top">
                                    <thead>
                                    <tr>
                                        <th style="width:8px;"><input type="checkbox" class="group-checkable"/></th>
                                        <th>Data Name</th>
                                        <th class="hidden-phone">Type List</th>
                                        <th class="hidden-phone">Introduction</th>
                                        <th class="hidden-phone">Provider</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX" ng-repeat="data in dataSet">
                                        <td><input type="checkbox" class="checkboxes" value="1"/></td>
                                        <td>{{data.dataName}}</td>
                                        <td class="hidden-phone">
                                            <p ng-repeat="type in data.types">{{type.key}}=>{{type.value}}</p>
                                        </td>
                                        <td class="hidden-phone">{{data.introduction}}</td>
                                        <td class="hidden-phone">{{data.provider}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <header class="panel-heading"></header>
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
