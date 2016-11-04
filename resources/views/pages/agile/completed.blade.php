<div class="col-lg-4">
    <div class="ibox">
        <div class="ibox-content">
            <h3>Completed</h3>
            <p class="small"><i class="fa fa-hand-o-up"></i> Drag task between list</p>
            <ul class="sortable-list connectList agile-list">
                <li class="info-element">
                    Sometimes by accident, sometimes on purpose (injected humour and the like).
                    <div class="agile-detail">
                        <a href="#" class="pull-right btn btn-xs btn-white">Completed</a>
                        <i class="fa fa-clock-o"></i> 16.11.2015
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

        $(".sortable-list").sortable({
            connectWith: ".connectList"
        }).disableSelection();

    });
</script>
