<div class="container-fluid">
    <div class="widget_header row">
        <div class="col-md-8">
            <h4>{vtranslate('LBL_PHONE_EXTENSIONS', $MODULE)}</h4>
        </div>
    </div>
    <hr>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>User</th>
                <th>Extension</th>
            </tr>
        </thead>
        <tbody>
            {foreach item=EXT from=$EXTENSIONS}
                <tr>
                    <td>{$EXT.userid}</td>
                    <td>{$EXT.asterisk_extension}</td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
