<div class="">

    <div class="flex">
        <div>
            <label for="<?php echo e($id); ?>_H">Hours:</label><br>

        </div>
        <div>
            <label for="<?php echo e($id); ?>_M">Minutes</label><br>

        </div>
    </div>

    <input <?php echo e($attributes); ?> type="<?php echo e($type); ?>" name="<?php echo e($id); ?>_H" id="<?php echo e($id); ?>_H">

    <input <?php echo e($attributes); ?> type="<?php echo e($type); ?>" name="<?php echo e($id); ?>_M" id="<?php echo e($id); ?>_M">
    <br>
</div>
<?php /**PATH /var/www/html/resources/views/components/hours-input.blade.php ENDPATH**/ ?>