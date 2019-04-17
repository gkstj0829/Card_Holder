<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="./css/login.css">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <div class="loginform">
    <h1 class = "title">Card Holder</h1>
    <p class = "welcome">Card Holder에 오신것을 환영합니다!</p>
    <table class="table">
        <tr>
        <td> <input type="text" name = "id" class = "idbox"> </td>
        <td rowspan = "2">
          <input type="submit" name = "sbm" value = "로그인" class = "submit"> 
        </td>
      </tr>
      <tr>
        <td> <input type="password" name = "pw" class = "idbox"> </td>
      </tr>
    </table>
    <p class = "welcome">
      <a href = "./forget.php" class = "welcome">아이디나 비밀번호를 잊으셨나요?</a> <br>
      <a href="./signup.php" class = "welcome">Card Holder에 가입하세요!</a>
    </p>
  </div>
  </div>
</body>
</html>