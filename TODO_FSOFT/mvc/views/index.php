<?php require_once APPROOT . '/views/includes/header.php';?>
<div class="container">
    <div class="vertical-center">
    <a class="btn green" href="<?= URLROOT ?>/Home/create">
        Thêm 😘
    </a>
        <br>
    </div>
    <?php 
    if(!empty($data['todo'])):
    foreach ($data['todo'] as $todo) : extract($todo); ?>
        <div class="container-item">

            <a class="btn red" href="<?= URLROOT ?>/Home/delete/<?= $id ?>">
                Xóa 😭
            </a>
            <a class="btn orange" href="<?= URLROOT ?>/Home/update/<?= $id ?>">
                Sửa 🙂
            </a>

            <h2>
                <?= $tentodo ?>
            </h2>

            <h3>
                <?= $noidung ?>
            </h3>

            <p>
                <?= $trangthai ?>
            </p>
        </div>
    <?php endforeach; endif; ?>

</div>