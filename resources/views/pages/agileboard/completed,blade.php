<div class="col-lg-4">
    <div class="ibox">
        <div class="ibox-content">
            <h3>Completed</h3>
            <p class="small"><i class="fa fa-hand-o-up"></i> Drag task between list</p>
            <ul class="sortable-list connectList agile-list" data-name='completed'>
              @foreach($completeds as $completed)
                  <li class="success-element" data-id="{{$completed->id}}">
                      {{$completed->task}}
                      <div class="agileboard-detail">
                      <!--  <a href="#" class="pull-right btn btn-xs btn-white">{{$completed->user_id}}</a>  -->
                        <a href="/agileboard/delete/{{$completed->id}}" class="pull-right btn btn-xs btn-white" onclick="return confirm ('Are u sure u delete row?')"><i class="fa fa-trash"></i> </a>

                          <i class="fa fa-clock-o"></i> {{$completed->created_at}}
                          {{$completed->task_status}}
                      </div>
                  </li>
             @endforeach
            </ul>
        </div>
    </div>
</div>
