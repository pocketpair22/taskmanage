<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <title>新規登録</title>
    </head>
    <body>
        <form action="users" method="post" accept-charset="utf-8">
            {!! csrf_field() !!}
            <p><label>ユーザ名：<input type="text" name="name" value="{{$name}}"></label></p>
            <p><label>パスワード：<input type="password" name="password" value=""></label></p>
            <p><label>メールアドレス：<input type="text" name="email" value="{{$email}}"></label></p>
            <p><label>メールアドレス(再入力)：<input type="text" name="email_confirm" value="{{$email_confirm}}"></label></p>
            <input type="submit" value="送信">
        </form>
        <a href="users/add">ログイン</a>
    </body>
</html>