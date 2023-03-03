<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>



  <title>Document</title>

  <style>
    .form-name{
      display:flex;
    }

    .require{
      color:red;
      font-size:6px;
    }

    .error-message{
      color:red;
      font-size:6px;
    }

    .sample{
      font-size:8px;
      color:grey;
    }

    th{
      text-align:left;
      vertical-align:top;
    }

    .form{
      border-spacing: 10px;
    }

    .input-add{
      width:290px;
      height:15px;
    }

    .input-name{
      width:135px;
      height:15px;
    }
    .input-opinion{
      height:65px;
    }

    .input-firstname{
      margin-left:10px;
    }

    .input-postcode{
      width:270px;
      height:15px;
      margin-left:10px;
    }

    .button-confirm{
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
      margin-top:15px;
      margin-left:170px;
    }

    .title{
      margin-left:170px;
    }

    



</style>


</head>
<body>


<div class='container'>
  <h2 class="title">お問い合わせ</h2>
  
    <table class="form">
      <form action="/store" method="post">
      @csrf



        @error('lastname')
        <tr class="error-message">
          <th></th>
          <td>{{$message}}</td>
        </tr>
        @enderror
        <tr>
        <th>お名前<span class="require">※</span></th>
        
        <td class="form-name">
            <div><input type="text" class="input-name" name="lastname" value="{{old('lastname')}}"><br><a class="sample">例）山田</a></div>
            
            <div><input type="text" class="input-name input-firstname" name="firstname" value="{{old('firstname')}}"><br><a class="sample">例）太郎</a></div>
        </td>
        </tr>

        @error('gender')
        <tr class="error-message">
          <th></th>
          <td>{{$message}}</td>
        </tr>
        @enderror
        <tr>
          <th>性別<span class="require">※</span></th>
          <td>
            <label><input type="radio" name="gender" class="input-gender" value="男性" checked>男性</label>
            <label><input type="radio" name="gender" class="input-gender" value="女性">女性</label>
          </td>
        </tr>

        @error('email')
        <tr class="error-message">
          <th></th>
          <td>{{$message}}</td>
        </tr>
        @enderror
        <tr>
          <th>メールアドレス<span class="require">※</span></th>
          <td><input type="email" name="email" value="{{old('email')}}" class="input-add"><br><a class="sample">例）test@example.com</a></td>
        </tr>

        @error('postcode')
        <tr class="error-message">
          <th></th>
          <td>{{$message}}</td>
        </tr>
        @enderror
        <tr>
          <th>郵便番号<span class="require">※</span></th>
          <td>〒<input type="text" name="postcode" class="input-postcode" value="{{old('postcode')}}" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');"/><br><a class="sample">例）123-4567</a></td>
        </tr>

        @error('address')
        <tr class="error-message">
          <th></th>
          <td>{{$message}}</td>
        </tr>
        @enderror
        <tr>
          <th>住所<span class="require">※</span></th>
          <td><input type="text"  name="address" class="input-add" value="{{old('address')}}" size="60"/><br><a class="sample">例）東京都千代田区千駄ヶ谷1-2-3</a></td>
        </tr>

        <tr>
          <th>建物名</th>
          <td><input type="text" name="building_name" class="input-add"><br><a class="sample">例）千駄ヶ谷マンション101</a></td>
        </tr>


        @error('opinion')
        <tr class="error-message">
          <th></th>
          <td>{{$message}}</td>
        </tr>
        @enderror
        <tr>
          <th>ご意見<span class="require">※</span></th><td><textarea name="opinion" class="input-opinion" cols="50" lows="80"></textarea></td>
        </tr>
    </table>
    
    <input type="submit" class="button-confirm" value="確認">

  </form>
  



</div>
  
</body>
</html>