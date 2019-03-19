<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <title>タスク登録</title>
    </head>
    <body>
        <p>登録したいタスクを入力してください。</p>
        <form action="tasks.add" method="post" accept-charset="utf-8">
            {!! csrf_field() !!}
            <p><label>タスク名：<input type="text" name="task" value="{{$task}}"></label></p>
            <input type="submit" value="登録">
        </form>
    </body>
</html>