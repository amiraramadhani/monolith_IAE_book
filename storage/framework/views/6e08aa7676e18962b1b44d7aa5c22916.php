<form <?php echo e($attributes(["class" => "max-w-2xl mx-auto space-y-6", "method" => "GET"])); ?>>
    <?php if($attributes->get('method', 'GET') !== 'GET'): ?>
        <?php echo csrf_field(); ?>
        <?php echo method_field($attributes->get('method')); ?>
    <?php endif; ?>

    <?php echo e($slot); ?>

</form>
<?php /**PATH /Users/ramadhanivanvafauzia/Documents/Kuliah/semester 6/Integrasi Aplikasi Enterprise/mini project tugas 2/google-books-search/resources/views/components/forms/form.blade.php ENDPATH**/ ?>