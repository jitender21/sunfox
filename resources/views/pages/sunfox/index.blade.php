@extends('layouts.default')
@section('title','sunfox')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Sunfox</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/sunfox">Sunfox</a>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Sunfox</h5>
                    <div class="ibox-tools">
                        <a href="/sunfox/create" class="btn btn-primary">Add Sunfox</a>
                    </div>
                </div>

                <div class="ibox-content">
                  @if(count($sunfoxs))
                    <a  href="javascript:void(0)" id="alldelete"  title="Delete"><i class="fa fa-trash"></i> Delete</a>
                    @include('pages.sunfox.list')
                        @else
                        <center>No category created yet</center>
                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
@section('extra_script')
  <script>
  $(".checkedAll").click(function(){
  $('input:checkbox').not(this).prop('checked', this.checked);
    });

    $("#alldelete").click(function(){
      $("#deleteform").submit();
    })
  </script>
@endsection
@stop
