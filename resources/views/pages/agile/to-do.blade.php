

@foreach($todos as $todo)
<li class="success-element" data-id="{{$todo->id}}" data-toggle="modal" data-target="#taskMoreDetails" onclick="demo({{$todo->id }})">
{{$todo->task}}
<div class="agile-detail">
   <a href="#" class="pull-right btn btn-xs btn-white">{{$todo->user_id}}</a>

     <i class="fa fa-clock-o"></i> {{$todo->created_at}}
     {{$todo->task_status}}
     @if($todo->user_id==Auth::user()->id)
        <button type="button" onclick="todo({{$todo->id }})" class="btn btn-sm btn-primary">delete</a>
        @endif
     </div>
</li>
@endforeach
<script>
function todo(id){
  $.get( "/task/delete/"+id, function() {
  $('#load-todos').load(document.URL +' #load-todos');
  });
}
</script>
<script>
function demo(id){
  agile_id=id;
  alert(agile_id);


}
