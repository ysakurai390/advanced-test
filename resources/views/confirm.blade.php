<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

    form{
      border-spacing:20px 10px;
    }





</style>




</head>
<body>
  <h2 class="title">内容確認</h2>



  <table>
  <form action="/content/thanks" method="post">
  @csrf
    <tr>
      <td>お名前</td>  
      <td>{{$lastname}} {{$firstname}}</td>
      <input type="hidden" name="lastname" value="{{$lastname}}">
      
    </tr>

    <tr>
      <td>性別</td>
      <td>{{$gender}}</td>
    </tr>

    <tr>
      <td>メールアドレス</td>
      <td>{{$email}}</td>
    </tr>

    <tr>
      <td>郵便番号</td>
      <td>{{$postcode}}</td>
    </tr>

    <tr>
      <td>住所</td>
      <td>{{$address}}</td>
    </tr>

    <tr>
      <td>建物名</td>
      <td>{{$building_name}}</td>
    </tr>


    <tr>
      <td>ご意見</td>
      <td>{{$opinion}}</td>
    </tr>

    <input type="hidden" name="lastname" value="{{$lastname}}">
    <input type="hidden" name="firstname" value="{{$firstname}}">
    <input type="hidden" name="gender" value="{{$gender}}">
    <input type="hidden" name="email" value="{{$email}}">
    <input type="hidden" name="postcode" value="{{$postcode}}">
    <input type="hidden" name="address" value="{{$address}}">
    <input type="hidden" name="building_name" value="{{$building_name}}">
    <input type="hidden" name="opinion" value="{{$opinion}}">

    
    
    
    </table>
    <input type="submit" value="送信">
    </form>
    
    <form action='/content/back' method="get">
    <input type="submit" value="修正">
</form>
  





</body>
</html>