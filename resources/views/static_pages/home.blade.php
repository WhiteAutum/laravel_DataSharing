<!DOCTYPE html>
<html>
<head>

    {{--//样式--}}

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






    <title>WSN Data Sharing</title>
    <meta charset="utf-8">
    <style>
        ul{
            list-style-type:none;
            margin:0;
            padding:0;
            overflow:hidden;
            background-color:#333;
        }

        li{
            float:left;
        }

        li a, .dropbtn
        {
            display:inline-block;
            color:white;
            text-align:center;
            padding:14px 16px;
            text-decoration:none;
        }

        li a:hover, .dropdown:hover, .dropbtn
        {
            background-color:#111;
        }

        .dropdown
        {
            display:inline-block;
        }

        .dropdown-content
        {
            display:none;
            position:absolute;
            background-color:#f9f9f9;
            min-width:160px;
            box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
        }

        .dropdown-content a
        {
            color:black;
            padding:12px 16px;
            text-decoration:none;
            display:block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content
        {
            display:block;
        }

    </style>
</head>
<body>

<ul>
    <li><a class="active" href="{{Route('homes')}}">Home</a></li>
    <div class="dropdown">
        <a href="#" class="dropbtn">Accounts</a>
        <div class="dropdown-content">
            <a href="{{Route('accountsList')}}">Account List</a>
            <a href="{{Route('createAccount')}}">Create Accounts</a>
            <a href="{{Route('getBalance')}}">Get Balance</a>
            <a href="{{Route('chargeAccount')}}">Charge Account</a>
            <a href="{{Route('registerAccount')}}">Register Accounts</a>
            <a href="{{Route('registerAccountList')}}">Register Accounts List</a>
        </div>
    </div>
    <div class="dropdown">
        <a href="#" class="dropbtn">Provider</a>
        <div class="dropdown-content">
            <a href="{{Route('provideData')}}">Provide Data</a>
            <a href="{{Route('provideDataList')}}">Data List</a>
            <a href="{{Route('provideTask')}}">Provide Task</a>
            <a href="{{Route('taskList')}}">Task List</a>


        </div>
    </div>
    <div class="dropdown">
        <a href="#" class="dropbtn">Requester</a>
        <div class="dropdown-content">
            <a href="{{Route('requestData')}}">Requeste Data</a>
            <a href="{{Route('requestDataList')}}">Data List</a>
            <a href="{{Route('requestTask')}}">Requeste Task</a>
            <a href="{{Route('requestTaskList')}}">Task List</a>

        </div>
    </div>
    <div class="dropdown">
        <a href="#" class="dropbtn">Search</a>
        <div class="dropdown-content">
            <a href="{{Route('dataList')}}">Data List</a>
            <a href="{{Route('searchData')}}">Search Data</a>
            <a href="{{Route('searchDataRequest')}}">Search Data Request </a>
            <a href="{{Route('taskList')}}">Task List</a>
            <a href="{{Route('searchTask')}}">Search Task</a>
            <a href="{{Route('searchTaskRequest')}}">Search Task Request</a>
        </div>
    </div>

    <div class="dropdown">
        <a href="#" class="dropbtn">Managements</a>
        <div class="dropdown-content">
            <a href="{{Route('personalDataList')}}">Personal Data List</a>
            <a href="{{Route('provideDataControl')}}">Provide Data control error</a>
            <a href="{{Route('personalTaskList')}}">Personal Task List error</a>
            <a href="{{Route('provideTaskControl')}}">Provide Task control error</a>

        </div>
    </div>
    <div class="dropdown">
        <a href="#" class="dropbtn">Transactions</a>
        <div class="dropdown-content">
            <a href="{{Route('searchTransaction')}}">Search Transaction</a>
            <a href="{{Route('etherTransaction')}}">Ether Transaction</a>
        </div>
    </div>
    <div class="dropdown">
        <a href="#" class="dropbtn">IPFS Admin</a>
        <div class="dropdown-content">
            <a href="#">IPFS</a>
        </div>
    </div>
</ul>


@yield('content')


<footer class="text-center">
    <p>©️ 2017 BJUT-SSE 北工大区块链小组</p>
</footer>
</body>

</html>