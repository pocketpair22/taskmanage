<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <title>login</title>
    </head>
    <body>
        <form action="login" method="post" accept-charset="utf-8">
            {!! csrf_field() !!}
            <p><label>ユーザ名：<input type="text" name="name" value="{{$name}}"></label></p>
            <p><label>パスワード：<input type="password" name="password" value=""></label></p>
            <input type="submit" value="送信">
        </form>
        <?php if ($name): ?>
            <p>{{$name}}</p>
        <?php endif; ?>
        <?php if ($password): ?>
            <p>{{$password}}</p>
        <?php endif; ?>
    </body>
</html>