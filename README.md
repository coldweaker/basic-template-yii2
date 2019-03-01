<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>

<p>Simple project using basic template yii2</p>

<h4>Requirements:</h4>
 <ol>
    <li>PHP >= 5.4.0</li>
    <li>MySQL >= 5.6.25</li>
    <li>Apache Server</li>
</ol>

<h4>Set up before running:</h4>
<ol>
    <li>Run command <code>composer update</code></li>
    <li>Create new database and then import DDL Query from <strong>your-project-name\data\init-db.sql</strong></li>
    <li>Run yii command for init default user admin : <code>php yii init-user/index -u=username -p=password -e=email</code>. Set username, password and email</li>
    <li>Run yii command for init default auth for user admin: <code>php yii init-auth/index</code></li>
    <li>Run your project on web browser. If you got error like this <code>The file or directory to be published does not exist: path/vendor/almasaeed2010/adminlte/plugins/iCheck</code>, copy folder <strong>.github, bower_components, build, pages, plugins, documentation</strong> from https://github.com/almasaeed2010/AdminLTE to under folder <strong>path/vendor/almasaeed2010/adminlte</strong></li>
</ol>
