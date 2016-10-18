@extends('layouts.default')
@section('title',isset($sunfox) ? 'Update Sunfox' : 'Create Sunfox')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Sunfox</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/sunfox">Sunfox</a>
            </li>
            <li>
                <a href="">Sunfox Form</a>
            </li>

        </ol>
    </div>
</div>
@include('errors.validation')
<div class="ibox-content">
    <form method="post" id="formid" action="/sunfox/store" class="form-horizontal">
        {{ csrf_field() }}
        <input type='hidden' name='id' value="{{isset($sunfox)? $sunfox->id :''}}">
        <!--- edit -->
        <div class="form-group">
            <label class="col-sm-2 control-label">Firstname</label>
            <div class="col-sm-10">
                <input type="text" name="firstname" required value="{{isset($sunfox)? $sunfox->firstname :''}}" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Lastname</label>
            <div class="col-sm-10">
                <input type="text" name="lastname" required value="{{isset($sunfox)? $sunfox->lastname :''}}" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <input type="text" name="address" required value="{{isset($sunfox)? $sunfox->address :''}}" class="form-control">
            </div>
        </div>

        <div class="hr-line-dashed"></div>

        <div class="hr-line-dashed"></div>
        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-2">
                <button class="btn btn-white" type="submit">Cancel</button>
                <button class="btn btn-primary" type="submit">{{isset($sunfox)? 'Update Changes' :'Save Changes'}}</button>
            </div>

        </div>
    </form>
</div>
@endsection
<script>
$(function(){

$('#formid').on('submit',function(e){
    $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);

        $.ajax({

        type:"POST",
        url:'/sunfox/store',
        data:$(this).serialize(),
        dataType: 'json',
        success: function(data){
            console.log(data);
        },
        error: function(data){

        }
    })
    });
});
</script>
