<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <title>login</title>
    </head>
    <body>
        <form action="login" method="post" accept-charset="utf-8">
            {!! csrf_field() !!}
            <input type="text" name="name" value="name">
            <input type="password" name="password" value="pass">
            <input type="submit" value="送信">
        </form>
    </body>
</html>