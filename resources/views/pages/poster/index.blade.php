@extends('layouts.default')
@section('title', 'Poster Posts')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Poster</h2>
        <ol class="breadcrumb">
            <li><a href="/poster">Poster</a></li>
        </ol>
    </div>
    <div class="col-lg-8 text-right">
        <div class="col-sm-6">
            <form class="pull-right">
                <div class="form-group search">
                    <input type="text" name="search" placeholder="Search here..." autocomplete="off">
                    <button class="btn btn-sm btn-primary" type="submit"> Go!</button>
                    </span>
                </div>
            </form>
        </div>
        <div class="col-sm-6">
            <a href="/poster/create" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Post</a>
        </div>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <div class="ibox-tools">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@stop
@section('extra_scripts')
@endsection
