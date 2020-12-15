<?php

$title = '修改通訊錄';
$pageName = 'ad_edit';
require __DIR__ . '/is_admin.php';
require __DIR__ . '/db_connect.php';

if (!isset($_GET['sid'])) {
    header('Location: ad_connect.php');
    exit;
}

$sid = intval($_GET['sid']);

$row = $pdo
    ->query("SELECT * FROM address_book WHERE sid=$sid")
    ->fetch();

if (empty($row)) {
    header('Location: ad_connect.php');
    exit;
}

?>


<?php include __DIR__ . "/parts/web_room.php"; ?>
<?php include __DIR__ . "/parts/head.php"; ?>
<?php include __DIR__ . "/parts/navbar.php"; ?>

<style>
    form small.error-msg {
        color: red;
    }

    /* 錯誤訊息字的顏色 */
</style>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6">

        <div class="alert alert-danger" role="alert" id="info" style="display:none">
                        錯誤
                    </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">編輯資料</h5>




                    <form name="form2" method="POST" novalidate onsubmit="CheckForm();return false;">
                    <!-- 若下此屬性"novalidate",所有的格式限制都會被取消 -->
                    <!-- 加入function -->
                    <!-- <form name="form2" method="POST"> -->
                        <input type="hidden" name="sid" value="<?= $sid ?>"> 
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required value="<?= htmlentities($row['name']) ?>">
                        <small class="form-text error-msg" style="display : none"></small>
                        <!-- 加small標籤,在錯誤時跳出字提示 -->
                        <!-- 在觸發狀況時才會顯示字,所以先none隱藏 -->
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= htmlentities($row['email']) ?>">
                        <small class="form-text error-msg" style="display : none"></small>

                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" pattern="09\d{2}-?\d{3}-?\d{3}" value="<?= htmlentities($row['mobile']) ?>">
                        <!-- pattern是限制格式 -->
                    </div>
                    <div class="form-group">
                        <label for="birthday">Birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="<?= htmlentities($row['birthday']) ?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <!-- <input type="text" class="form-control" id="address" name="address"> -->
                        <textarea class="form-control" id="address" name="address" col="30" row="3"><?= htmlentities($row['address']) ?>"</textarea>
                    </div>
                    <!-- textarea寫法 -->

                    <!-- <div class="form-group">
                                <label for="number">Address</label>
                                <input type="number" class="form-control" id="number" name="number"> -->
                    <!-- type="number"只能下數字 -->
                    <!-- </div> -->

                    <!-- <button type="button" class="btn btn-primary">Button</button> -->
                    <!-- button若沒給type一樣會是submit,所以要下type="button" -->

                    <button type="submit" class="btn btn-primary">Submit</button>

                    <!-- <input class="btn btn-primary" type="submit" value="submittext"></input> -->
                    <!-- input的button寫法 -->
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>


<?php include __DIR__ . "/parts/script.php" ?>

<script>
    //document.querySelector('#name').style.borderColor = 'red'
    const info = document.querySelector('#info');

    const name = document.querySelector('#name');
    const email = document.querySelector('#email');
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

    function CheckForm() {

        let isPass = true;
        //先將其設定為通過

        name.style.borderColor = '#CCCCCC';
        name.closest('.form-group').querySelector('small').style.display = 'none';
        email.style.borderColor = '#CCCCCC';
        email.closest('.form-group').querySelector('small').style.display = 'none';
        // 恢復設定


        if (name.value < 2) {
            isPass = false;
            //任何一項沒通過就會false

            name.style.borderColor = 'red';
            let small = name.closest('.form-group').querySelector('small');
            small.innerText = "請輸入正確的名字";
            small.style.display = 'block';
        }

        if (!email_re.test(email.value)) {
            isPass = false;
            //任何一項沒通過就會false

            email.style.borderColor = 'red';
            let small = email.closest('.form-group').querySelector('small');
            small.innerText = "請輸入正確的email";
            small.style.display = 'block';
        }

        if (isPass) {
            const fd = new FormData(document.form2);

            fetch('ad_edit_api.php', {
                    method: 'POST',
                    body: fd
                })
                .then(r => r.json())
                .then(obj => {
                    console.log(obj);

                    if (obj.success) {
                        info.classList.remove('alert-danger');
                        info.classList.add('alert-success');
                        info.innerHTML = '編輯成功';
                    } else {
                        info.className.remove('alert-success');
                        info.className.add('alert-danger');
                        info.innerHTML = obg.error || '編輯成功';
                    }
                    info.style.display = "block";
                });
        }


    }
</script>

<?php include __DIR__ . "/parts/foot.php" ?>