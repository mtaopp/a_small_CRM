<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.header','data' => ['pageTitle' => 'Home']]); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['pageTitle' => 'Home']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<main>
    <div class="container flex m-auto f-full h-full justify-center">
        <div class="place-self-center">
            <?php if(session('message')): ?>
                <div class="bg-comp text-black text-center rounded-lg">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?>

           
           
            <div class="flex flex-col">
                <div class="flex flex-row w-96">
                    <a class="flex-grow w-full py-3 whitespace-nowrap hover:bg-comp bg-second mx-4 rounded-lg hover:text-second text-lightblue text-center" href="<?php echo e(route ('contacts')); ?>">Contacts</a>
                    <a class="flex-grow w-full py-3 whitespace-nowrap hover:bg-comp bg-second mx-4 rounded-lg hover:text-second text-lightblue text-center" href="<?php echo e(route ('create.contact')); ?>">New Contact</a>
                </div>
                <div class="flex flex-row py-3 w-96 mt-5">
                    <a class="flex-grow w-full py-3 whitespace-nowrap hover:bg-comp bg-second mx-4 rounded-lg hover:text-second text-lightblue text-center" href="<?php echo e(route ('jobs')); ?>">Jobs</a>
                    <a class="flex-grow w-full py-3 whitespace-nowrap hover:bg-comp bg-second mx-4 rounded-lg hover:text-second text-lightblue text-center" href="<?php echo e(route ('create.job')); ?>">New Job</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.footer','data' => []]); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/layouts/app-layout.blade.php ENDPATH**/ ?>