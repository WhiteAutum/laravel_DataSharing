<body>
<section class="profile-nav alt green-border " ng-app="searchTask" ng-controller="searchTask">
    <section class="wrapper ">
        <!-- page start-->
        <div class="row col-lg-10 col-lg-offset-1">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h4>Search Task Request List By Task Name</h4>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <fieldset class="step">

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Task Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" placeholder="Task Name" ng-model="taskName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-danger col-lg-2" ng-click="searchTaskRequestByName(taskName)">
                                            Search
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <label>Task Provider</label>
                                    </div>
                                </div>
                                <table class="table  border-top">
                                    <thead>
                                    <tr>
                                        <th style="width:8px;"><input type="checkbox" class="group-checkable"/></th>
                                        <th>Requester</th>
                                        <th class="hidden-phone">Introduction</th>
                                        <th class="hidden-phone">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX" ng-repeat="request in requestList">
                                        <td><input type="checkbox" class="checkboxes" value="1"/></td>
                                        <td>{{request.requesterName}}</td>
                                        <td class="hidden-phone">{{request.information}}</td>
                                        <td class="hidden-phone">{{request.status}}</td>
                                    </tr>
                                    </tbody>
                                </table>
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

</body>
