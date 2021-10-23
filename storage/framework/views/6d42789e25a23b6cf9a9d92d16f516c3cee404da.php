<form <?php echo e($attributes->merge(['class', 'w-full'])); ?> >
    <?php echo csrf_field(); ?>
    <?php echo e($slot); ?>

</form>
<?php /**PATH /var/www/html/resources/views/components/form.blade.php ENDPATH**/ ?>