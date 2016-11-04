

<div class="col-lg-4">
    <div class="ibox">
        <div class="ibox-content">
            <h3>In Progress</h3>
            <p class="small"><i class="fa fa-hand-o-up"></i> Drag task between list</p>
            <ul class="sortable-list connectList agile-list">
                <li class="success-element">
                  Quisque venenatis ante in porta suscipit.
                    <div class="agile-detail">
                        <a href="#" class="pull-right btn btn-xs btn-white">Tag</a>
                        <i class="fa fa-clock-o"></i> 12.10.2015
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
        $(document).ready(function(){

            $(".sortable-list").sortable({
                connectWith: ".connectList"
            }).disableSelection();

        });
    </script>
