<div class="col-lg-4">
    <div class="ibox">
        <div class="ibox-content">

<div class="input-group">
  <form action="/agileboard/store" method="POST" class="form-horizontal">
   {{ csrf_field() }}
   <input type="text" placeholder="Add new task." name="task" class="input input-sm form-control" value="{{isset($agileboard)?$agileboard->task:''}}">

   <input type='hidden' name='task_status' value="todo">
    <span class="input-group-btn">
          <button type="submit" class="btn btn-sm btn-white"> <i class="fa fa-plus"></i> Add task</button>
    </span>
  </form>
</div>
</div>
</div>
</div>
