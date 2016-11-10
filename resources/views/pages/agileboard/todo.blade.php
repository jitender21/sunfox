<div class="col-lg-4">
    <div class="ibox">
        <div class="ibox-content">
            <h3>To-do</h3>
            <p class="small"><i class="fa fa-hand-o-up"></i> Drag task between list</p>
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
            <ul class="sortable-list connectList agile-list" data-name='todo'>
            @foreach($todos as $todo)
                <li class="success-element" data-id="{{$todo->id}}">
                    {{$todo->task}}
                    <div class="agileboard-detail">
                  <!--    <a href="#" class="pull-right btn btn-xs btn-white">{{$todo->user_id}}</a>  -->
                  <a href="/agileboard/edit/{{$todo->id}}" class="pull-right btn btn-xs btn-white"><i class="fa fa-pencil"></i></a>
                  <a href="/agileboard/delete/{{$todo->id}}" class="pull-right btn btn-xs btn-white" onclick="return confirm ('Are u sure u delete row?')"><i class="fa fa-trash"></i> </a>
                        <i class="fa fa-clock-o"></i> {{$todo->created_at}}
                        {{$todo->task_status}}
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
