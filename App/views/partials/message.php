<?php 
use Framework\Session;
$successMessage = Session::getFlashMessage('success_message'); ?>
<?php $errorMessage = Session::getFlashMessage('error_message'); ?>
<?php if($successMessage === null && $errorMessage === null) return; ?>


<?php if ($successMessage !== null) : ?>    
    <div class="message bg-green-100 p-2 my-3 rounded">
        <p><?= $successMessage ?></p>
    </div>
<?php endif; ?>

<?php if ($errorMessage !== null) : ?>
    <div class="message bg-red-100 p-2 my-3 rounded">
        <p><?= $errorMessage ?></p>
    </div>
<?php endif; ?>