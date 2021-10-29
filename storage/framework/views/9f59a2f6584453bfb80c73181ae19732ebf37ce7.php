<div class="">

    <div class="flex">

        <div>
            <label for="<?php echo e($id); ?>_H">Hours </label><br>

        </div>
        <div class="mx-2">&</div>
        <div>
            <label for="<?php echo e($id); ?>_M"> Minutes</label><br>

        </div>
    </div>

    <input <?php echo e($attributes); ?> type="number" name="<?php echo e($id); ?>_H" id="<?php echo e($id); ?>_H"
                            placeholder="<?php echo e($hPlaceholder ?? ''); ?>"
                            min="<?php echo e($hMin ?? ''); ?>"
                            max="<?php echo e($hMax ?? ''); ?>"
                            step="<?php echo e($hStep ?? ''); ?>">
    :
    <input <?php echo e($attributes); ?> type="number" name="<?php echo e($id); ?>_M" id="<?php echo e($id); ?>_M"
                            placeholder="<?php echo e($mPlaceholder ?? ''); ?>"
                            min="<?php echo e($mMin ?? ''); ?>"
                            max="<?php echo e($mMax ?? ''); ?>"
                            step="<?php echo e($mStep ?? ''); ?>">
    <br>
</div>
<?php /**PATH /var/www/html/resources/views/components/input-time.blade.php ENDPATH**/ ?>