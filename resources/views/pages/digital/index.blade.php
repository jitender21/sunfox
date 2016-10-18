@extends('layouts.default')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Digital</h2>
        <ol class="breadcrumb">
            <li>
              <a href="/digital">Digital</a>
            </li>
        </ol>
    </div>
  </div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Digital</h5>
                    <div class="ibox-tools">
                        <a href="/digital/create" class="btn btn-primary">Add Digital</a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        @include('pages.digital.list')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
