<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todoリスト</title>
  <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
  <h3>TodoList</h3>
  <form action="/todo/create" method="POST">
    <input type="text" name="content">
    <button type="submit">追加</button>
  </form>
</body>
</html>