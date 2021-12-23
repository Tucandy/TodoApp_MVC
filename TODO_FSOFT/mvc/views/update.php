<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container center">
    <h1>
        Update Todo
    </h1>
    <?php foreach ($data['findTodo'] as $todo) : extract($todo); ?>
        <form action="<?= URLROOT ?>/Home/update/<?= $id ?>" method="POST">

            <div class="form-item">
                <input type="text" name="Tentodo" value="<?= $tentodo ?>" required placeholder="Tên todo...">
            </div>
            <div class="form-item">
                <input type="text" name="Noidung" value="<?= $noidung ?>" required placeholder="Nội dung...">
            </div>
            <div class="form-item">
                <input type="text" name="Trangthai" value="<?= $trangthai ?>" required placeholder="Trạng thái...">
            </div>
                <button class="btn green" name="submit" type="submit">Cập nhật</button>
        </form>
    <?php endforeach; ?>
</div>