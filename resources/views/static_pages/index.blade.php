<header class="header white-bg">
    <a class="logo"><i class="fa fa-navicon"></i> &nbsp;Data access control&nbsp;<span>based on Ethereum</span></a>
</header>

<!-- 新 Bootstrap4 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>

<script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
{{--引入菜单JS控制代码--}}
<script  type="text/javascript" src="/learnlaravel5/public/js/directives/directive.js"></script>

<link rel="stylesheet" href="/learnlaravel5/public/bootstrap/dist/css/bootstrap.css"/>
<link href="/learnlaravel5/public/css/main.css" rel="stylesheet" />
<link rel="stylesheet" href="/learnlaravel5/public/font-awesome/css/font-awesome.css"/>
<link href="/learnlaravel5/public/css/frameCss/style.css" rel="stylesheet" style="text/css"/>
<link href="/learnlaravel5/public/css/frameCss/bootstrap.min.css" rel="stylesheet" style="text/css"/>
<link href="/learnlaravel5/public/css/frameCss/bootstrap-reset.css" rel="stylesheet" style="text/css"/>
<link href="/learnlaravel5/public/css/frameCss/style-responsive.css" rel="stylesheet" style="text/css"/>





{{--测试--}}
<link rel="stylesheet" href="/learnlaravel5/public/bootstrap/dist/css/bootstrap.css"/>
<link href="/learnlaravel5/public/css/main.css" rel="stylesheet" />
<link rel="stylesheet" href="/learnlaravel5/public/font-awesome/css/font-awesome.css"/>
<link href="/learnlaravel5/public/css/frameCss/style.css" rel="stylesheet" style="text/css"/>
<link href="/learnlaravel5/public/css/frameCss/bootstrap.min.css" rel="stylesheet" style="text/css"/>
<link href="/learnlaravel5/public/css/frameCss/bootstrap-reset.css" rel="stylesheet" style="text/css"/>
<link href="/learnlaravel5/public/css/frameCss/style-responsive.css" rel="stylesheet" style="text/css"/>


<script src="/learnlaravel5/public/jquery/dist/jquery.js"></script>
<script src="/learnlaravel5/public/bootstrap/dist/js/bootstrap.js"></script>

{{--解决require识别不了问题--}}
<script type="text/javascript" src="/learnlaravel5/public/js/web3/dist/web3.js"></script>
{{--引入angularJS--}}
<script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
{{--引入accounts.js--}}
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Accounts/accounts.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Transactions/transactions.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Provider/provideData.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Provider/provideTask.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Requester/requestData.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Requester/requestTask.js"></script>

<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Search/data.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Search/searchData.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Search/task.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Search/searchTask.js"></script>

<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Managements/personalData.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Managements/dataControl.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Managements/personalTask.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Managements/taskControl.js"></script>

<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Transactions/transactions.js"></script>

<script type="text/javascript" src="{{ URL::asset('js/demo.js') }}"></script>


{{--测试end--}}






<body>

<aside id="sidebar" class="nav-collapse" toggle-menu ng-app="directiveModule">
    <ul class="sidebar-menu" ng-click="clickMenu()">
        <li class="active">
            <a href="{{Route('homes')}}">
                <i class="fa fa-home"></i><span>Home</span>
            </a>
        </li>
        <li class="sub-menu">
            <a>
                <i class="fa fa-user"></i><span>Accounts</span><span class="arrow"></span>
            </a>
            <ul class="sub">
                <li><a href="{{Route('accountsList')}}">Account List</a></li>
                <li><a href="{{Route('createAccount')}}">Create Accounts</a></li>
                <li><a href="{{Route('getBalance')}}">Get Balance</a></li>
                <li ng-show="auth"><a href="{{Route('chargeAccount')}}">Charge Account</a></li>
                <li><a href="{{Route('registerAccount')}}">Register Accounts</a></li>
                <li><a href="{{Route('registerAccountList')}}">Register Accounts List </a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a>
                <i class="fa fa-database"></i><span> Provider</span><span class="arrow"></span>
            </a>
            <ul class="sub">
                <li><a ui-sref="app.provideData">Provide Data</a></li>
                <li><a ui-sref="app.provideDataList">Data List</a></li>
                <li><a ui-sref="app.provideTask">Provide Task</a></li>
                <li><a ui-sref="app.provideTaskList">Task List</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a>
                <i class="fa fa-upload"></i><span> Requester</span><span class="arrow"></span>
            </a>
            <ul class="sub">
                <li><a ui-sref="app.requestData">Requeste Data</a></li>
                <li><a ui-sref="app.requestDataList">Data List</a></li>
                <li><a ui-sref="app.requestTask">Requeste Task</a></li>
                <li><a ui-sref="app.requestTaskList">Task List</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a><i class="fa fa-search"></i><span> Search</span><span class="arrow"></span>
            </a>
            <ul class="sub">
                <li><a ui-sref="app.dataList">Data List</a></li>
                <li><a ui-sref="app.searchData">Search Data</a></li>
                <li><a ui-sref="app.searchDataRequest">Search Data Request</a></li>
                <li><a ui-sref="app.taskList">Task List</a></li>
                <li><a ui-sref="app.searchTask">Search Task</a></li>
                <li><a ui-sref="app.searchTaskRequest">Search Task Request</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a><i class="fa fa-group"></i><span> Managements</span><span class="arrow"></span>
            </a>
            <ul class="sub">
                <li><a ui-sref="app.personalDataList">Personal Data List</a></li>
                <li><a ui-sref="app.personalDataControl">Provide Data control</a></li>
                <li><a ui-sref="app.personalTaskList">Personal Task List</a></li>
                <li><a ui-sref="app.personalTaskControl">Provide Task control</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a><i class="fa fa-group"></i><span> Transactions</span><span class="arrow"></span>
            </a>
            <ul class="sub">
                <li><a ui-sref="app.searchTransByAccount">Search Transaction</a></li>
                <li><a ui-sref="app.etherTrans">Ether Transaction</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a><i class="fa fa-group"></i><span> IPFS Admin</span><span class="arrow"></span>
            </a>
            <ul class="sub">
                <li><a ui-sref="app.ipfs">IPFS</a></li>
            </ul>
        </li>
        <!--<li>
          <a ui-sref="app.login"><i class="fa fa-address-card-o"></i><span>Login Page</span>
          </a>
        </li>-->
    </ul>
</aside>


@yield('content')

</body>


<script src="/learnlaravel5/public/jquery/dist/jquery.js"></script>
<script src="/learnlaravel5/public/bootstrap/dist/js/bootstrap.js"></script>

{{--解决require识别不了问题--}}
<script type="text/javascript" src="/learnlaravel5/public/js/web3/dist/web3.js"></script>

{{--引入accounts.js--}}
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Accounts/accounts.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Transactions/transactions.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Provider/provideData.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Provider/provideTask.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Requester/requestData.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Requester/requestTask.js"></script>

<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Search/data.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Search/searchData.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Search/task.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Search/searchTask.js"></script>

<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Managements/personalData.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Managements/dataControl.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Managements/personalTask.js"></script>
<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Managements/taskControl.js"></script>

<script  type="text/javascript" src="/learnlaravel5/public/js/BlockChain/Transactions/transactions.js"></script>

<script type="text/javascript" src="{{ URL::asset('js/demo.js') }}"></script>

<script src="/learnlaravel5/public/js/BlockChain/main.js"></script>

<!-- popper.min.js 用于弹窗、提示、下拉菜单 -->
<script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>

<!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

