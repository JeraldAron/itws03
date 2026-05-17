<?php if (isset($errors)) : ?>
    <?php foreach ($errors as $error) : ?>
        <div class="message bg-red-100 p-3 my-3 text-red-500 font-medium rounded"><?= $error ?></div>
    <?php endforeach; ?>
<?php endif; ?>