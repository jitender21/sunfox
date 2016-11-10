@extends('layouts.default')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Agileboard</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/agileboard">Agileboard</a>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">

       @include('pages.agileboard.todo')
       @include('pages.agileboard.inprogress')
       @include('pages.agileboard.completed')


    </div>
</div>
@endsection
