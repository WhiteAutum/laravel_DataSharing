@extends('static_pages.home')
@section('content')
    <h1>Create Account</h1>

    {{--web3路径--}}
    <script type="text/javascript" src="/learnlaravel5/node_modules/bignumber.js/bignumber.min.js"></script>
    <script type="text/javascript" src="/learnlaravel5/public/js/web3/dist/web3-light.js"></script>



    {{--解决require识别不了问题--}}
    <script type="text/javascript" src="/learnlaravel5/public/js/web3/dist/web3.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/demo.js') }}"></script>




    @include('Accounts.getBalance1')

    @stop()
