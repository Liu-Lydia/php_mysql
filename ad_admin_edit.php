<?php
require __DIR__ . '/is_admin.php';

$title = '編輯通訊錄';
$pageName = 'ad_admin_edit';

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
                    <h5 class="card-title">修改管理者資料</h5>

                    <img alt="" id="preview" onclick="avatar.click()" src="./uploads/<?= $_SESSION['admin']['avatar'] ?>" style="width: 300px; height: 300px; background-color: #ccc;">


                    <form name="form1" novalidate onsubmit="CheckForm();return false;">
                        <input type="file" id="avatar" name="avatar" accept="image/*" onchange="fileChange()" style="display:none">

                        <div class="form-group">
                            <label for="account">account</label>
                            <input type="text" class="form-control" value="<?= $_SESSION['admin']['account'] ?>" disabled>

                        </div>
                        <div class="form-group">
                            <label for="nickname">nickname</label>
                            <input type="text" class="form-control" id="nickname" name="nickname" value="<?= $_SESSION['admin']['nickname'] ?>">
                            <small class="form-text error-msg" style="display : none"></small>

                        </div>
                        <div class="form-group">
                            <label for="password">原密碼</label>
                            <input type="text" class="form-control" id="password" name="password" required>

                        </div>
                        <div class="form-group">
                            <label for="new_password">新密碼 (留白表示不更動)</label>
                            <input type="text" class="form-control" id="new_password" name="new_password">
                        </div>

                        <button type="submit" class="btn btn-primary">修改</button>

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
    const avatar = document.querySelector('#avatar');
    const preview = document.querySelector('#preview');
    const reader = new FileReader();

    reader.addEventListener('load', function(event) {
        preview.src = reader.result;
        preview.style.height = "auto";
    });

    function fileChange() {
        reader.readAsDataURL(avatar.files[0]);

        console.log(avatar.files.length);
        console.log(avatar.files[0]);
    }




    //document.querySelector('#name').style.borderColor = 'red'
    const info = document.querySelector('#info');

  

    function CheckForm() {

        info.style.display = 'none';
        let isPass = true;


        if(!password.value){
            isPass = false;
            /*
            name.style.borderColor = 'red';
            let small = name.closest('.form-group').querySelector('small');
            small.innerText = "請輸入正確的名字";
            small.style.display = 'block';
            */
        }


        if(isPass){
            const fd = new FormData(document.form1);

            fetch('ad_admin_edit_api.php', {
                method: 'POST',
                body: fd
            })
            .then(r=>r.json())
            .then(obj=>{
                console.log(obj);
                /*
                if(obj.success){
                    // 新增成功
                    info.classList.remove('alert-danger');
                    info.classList.add('alert-success');
                    info.innerHTML = '新增成功';
                } else {
                    info.classList.remove('alert-success');
                    info.classList.add('alert-danger');
                    info.innerHTML = obj.error || '新增失敗' ;
                }
                info.style.display = 'block';

                 */
            });

        }

    }

</script>

<?php include __DIR__ . "/parts/foot.php" ?>