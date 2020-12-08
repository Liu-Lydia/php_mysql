<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php

    print_r($_POST);

    ?>
    </pre>

    <form name="form1" action="" method="post">
        <input type="text" id="account" name="account" placeholder="帳號"><br />
        <!-- id通常和name會一樣名稱 -->
        <input type="password" id="password" name="password" placeholder="密碼"><br />
        <button type="button" onclick="changeType()">eye</button><br/>
        <input type="submit">
    </form>
    <script>
        const password = document.form1.password;
        function changeType(){
            const t = password.getAttribute('type');
            if(t === 'password'){
                password.setAttribute('type','text');
            }else{
                password.setAttribute('type','password');
            }
        }
    </script>

</body>

</html>