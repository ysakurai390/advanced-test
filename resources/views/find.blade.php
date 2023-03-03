<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

    h2{
      text-align:center;
    }

    .button-search{
      border: 2px solid black;
      color: white;
      background-color: black;
      text-align: center;
      font-size: 12px;
      padding: 2px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
      width:120px;
    }

    .butoon-back{
      color: black;
    }

    .conteiner{
      border:solid;
      text-align:center;
      width:90%;
      margin:auto;
      font-size:18px;
    }

    .content-search{
      
    }

    .search-result{
    border-collapse: separate;
    border-spacing: 20px;
    }

  </style>
</head>
<body>
  <h2>管理システム</h2>

  <div class="conteiner">
    <form action="/search" method="get" class="content-search">
    @csrf

    <table>
      <tr>
        <th>お名前</th>
        <td><input type="text" name="lastname"></td>

        <th>性別</th>
        <td>
          <label><input type="radio" name="gender" value="男性" checked>全て</label>
          <label><input type="radio" name="gender" value="男性">男性</label>
          <label><input type="radio" name="gender" class="input-gender" value="女性">女性</label>
        </td>
      </tr>

      <tr>
        <th>登録日</th>
        <td>
          <input type="date" name="created_at" placeholder="from_date">
          <span>~</span>
          <input type="date" name="created_at" placeholder="until_date">
        </td>
        </tr>
      <tr>
        <th>メールアドレス</th>
          <td><input type="email" name="email"></td>
      </tr>

      </table>
      <input class="button-search" type="submit" value="検索">
    </form>
    <a class="butoon-back" href="/find">リセット</a>
</div>



  <div class="search">

  <table class="search-result">
    <tr>
      <th>ID</th>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>ご意見</th>
      <th></th>
    </tr>

    @if (@isset($contents))
    @foreach($contents as $content)
    <form action="/search" method="get">
    @csrf
    
    
    <tr>
      <td>{{$content->id}}</td>
      <td>{{$content->lastname}}{{$content->firstname}}</td>
      <td>{{$content->gender}}</td>
      <td>{{$content->email}}</td>
      <td>{{$content->opinion}}</td>
      <td><input type="hidden" name="postcode" value="{{$content->postcode}}"></td>
      <td><input type="hidden" name="address" value="{{$content->address}}"></td>
      <td><input type="hidden" name="building_name" value="{{$content->building_name}}"></td>
      <td><input type="hidden" name="updated_at" value="{{$contents->updated_at}}"></td>
      <td><input type="hidden" name="created_at" value="{{$contents->created_at}}"></td>
      <td><input type="submit" action="/delete" method="post" value="削除"></td>
    </tr>
  


    </form>
    @endforeach
    @endif
  </table>

  </div>




</body>
</html>