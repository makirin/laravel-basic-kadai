<<<<<<< HEAD
<!DOCTYPE html>
<html lang="ja">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel基礎課題</title>
 </head>
 
<body>
  <h1>投稿作成</h1>
  @if ($errors->any())
    <div>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif 
  
  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <table>
      <tr>
        <th>タイトル</th>
        <td>
          <input type="text" name="title">
        </td>
      </tr>
      <tr>
        <th>本文</th>
        <td>
          <input type="textarea" name="content">
        </td>
      </tr>
    </table>
    <input type="submit" value="投稿">
  </form>
</body>
 
=======
<!DOCTYPE html>
<html lang="ja">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel基礎課題</title>
 </head>
 
<body>
  <h1>投稿作成</h1>
  @if ($errors->any())
    <div>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif 
  
  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <table>
      <tr>
        <th>タイトル</th>
        <td>
          <input type="text" name="title">
        </td>
      </tr>
      <tr>
        <th>本文</th>
        <td>
          <input type="textarea" name="content">
        </td>
      </tr>
    </table>
    <input type="submit" value="投稿">
  </form>
</body>
 
>>>>>>> 0a9cbf7a2271da746b6ed9335662e8821902bf68
</html>