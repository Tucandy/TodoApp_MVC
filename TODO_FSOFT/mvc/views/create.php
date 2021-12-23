<?php require_once APPROOT . '/views/includes/header.php';?>

<div class="container center">
    <h1>
        Tạo một TODO mới
    </h1>
    <form action="<?= URLROOT ?>/Home/create" method="POST">
        <div class="form-item">
            <input type="text" name="Tentodo"  required placeholder="Tên việc cần làm...">
        </div>
        <div class="form-item">
            <input type="text" name="Noidung" required placeholder="Nội dung công việc...">
        </div>
        <div class="form-item">
            <input type="text" name="Trangthai" required placeholder="Trạng thái hoàn thành...">
        </div>
        <button class="btn green" name="submit" type="submit">Thêm todo</button>
    </form>
</div>