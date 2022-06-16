<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>와우라디오</title>
    <script src="script/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="">
</head>
<style>
    /* Reset */
    @import url(//fonts.googleapis.com/earlyaccess/notosanskr.css);
    body {font-family: "Noto Sans KR", sans-serif !important;}
    * {margin: 0; padding: 0; box-sizing: border-box;}
    a{text-decoration: none;}
    li{list-style: none;}
    img{border:none;}

    /* Root */
    :root{
        --color-white: #fff;
        --color-lightGrey: #f5f5f5;
        --color-grey: #545454;
        --color-red: #cb2830;
    }

    .container{display: flex; flex-wrap: wrap; flex-direction: column; width: 60vmin; height: 100%; margin: 5% auto; padding-bottom: 4%; background: var(--color-white); border: 1px solid var(--color-lightGrey); border-radius: 5px; box-shadow: 0 1px 3px rgb(0 0 0 15%);}
    img{width: 80%; height: 30vmin; margin: 0 auto; object-fit: cover;}
    h1{margin: 0 auto; padding: 5% 0 0; font-size: 20px; font-weight: 500; line-height: 40px;}

    /* 로그인 */
    form{display: flex; flex-direction: column; justify-content: space-between; align-items: center; width: 100%;}
    input{display: inline-block; width: 70%; margin: 2% 0; padding: 0 2%; font-size: 14px; line-height: 42px; border: 1px solid #ccc; border-radius: 5px;}
    a{width: 70%; margin: 2% 0; font-size: 16px; line-height: 42px; text-align: center; background: var(--color-red); color: var(--color-white); border: 0; border-radius: 5px; outline: 0; cursor: pointer;}
</style>
<script>
    $(function(){
        
});
</script>
<body>
    <div class="container">
        <img src="img/login.png">
        <h1>와우라디오</h1>
            <form class="user" method="post" id="login" action="">
                <input type="text" name="id" placeholder="ID">
                <input type="password" name="pwd" placeholder="Password">
                <a type="submit" form="login" onclick="location.href='main.php'">로그인</a>
            </form>
        </img>
    </div>
</body>
</html>