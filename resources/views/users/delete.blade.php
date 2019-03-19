<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <title>退会</title>
    </head>
    <body>
        <p>退会された方のユーザ情報は全て削除されます。</p>
        <p>よろしければ退会ボタンをクリックしてください。</p>
        <form action="users.delete" method="delete" accept-charset="utf-8">
            {!! csrf_field() !!}
            <input type="hidden" name="delete" value="true">
            <input type="submit" value="退会">
        </form>
    </body>
</html>