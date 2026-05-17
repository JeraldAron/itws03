<?php if (isset($_SESSION['success_message'])) : ?>
    <div class="message bg-green-100 p-2 my-3 rounded">
        <p><?= $_SESSION['success_message'] ?></p>
    </div>
<?php endif; ?>
<?php if (isset($_SESSION['error_message'])) : ?>
    <div class="message bg-red-100 p-2 my-3 rounded">
        <p><?= $_SESSION['error_message'] ?></p>
    </div>
<?php endif; ?>
<?php unset($_SESSION['error_message']); ?>
<?php unset($_SESSION['success_message']); ?>