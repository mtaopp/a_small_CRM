<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.header','data' => ['pageTitle' => 'Jobs']]); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['pageTitle' => 'Jobs']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<main>
    <div class="container flex m-auto f-full h-full justify-center">
        <div class="place-self-center w-full">
            <?php if(session('message')): ?>
                <div class="bg-comp text-black text-center rounded-lg">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?>

            <div class="block w-full text-lightblue">
                <div class="flex justify-between mb-4">
                    <a href="<?php echo e(route('home')); ?>"><?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.back-icon','data' => ['width' => '4rem']]); ?>
<?php $component->withName('icons.back-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['width' => '4rem']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?></a>
                    <h1>HIER KOMMT NOCH EIN FORMULAR FÜR DIE SUCHFUNTKON HINZU</h1>
                    <a href="<?php echo e(route('create.job')); ?>"><?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.edit-icon','data' => ['width' => '4rem']]); ?>
<?php $component->withName('icons.edit-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['width' => '4rem']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?></a>
                </div>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card2','data' => ['twWidth' => 'w-full block']]); ?>
<?php $component->withName('card2'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['twWidth' => 'w-full block']); ?>
                    <table class="w-full">
                        <tr>
                            <td class="pl-2">Job-ID</td>
                            <td class="pl-2">Type</td>
                            <td class="pl-2">Date</td>
                            <td class="pl-2">Customer-ID</td>
                            <td class="pl-2">Name</td>
                            <td class="pl-2">Adress</td>
                            <td class="px-2">E-Mail</td>
                            <td class="px-2">Phone</td>
                            <td class="px-2">More</td>
                        </tr>
                        <tr>
                            <td class="pl-2"><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td class="pr-2"><hr></td>
                        </tr>

                        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="pl-2"><?php echo e($job->job_id); ?></td>
                            <td class="pl-2 py-1">
                                <?php if($job->has_cleaning && $job->has_moving): ?>
                                    Combo
                                <?php elseif($job->has_cleaning): ?>
                                    Cleaning
                                <?php elseif($job->has_moving): ?>
                                    Moving
                                <?php else: ?>
                                    Choose
                                <?php endif; ?>
                            </td>
                            <td class="pl-2 py-1">DATUM (UC)</td>
                            <td class="pl-2 py-1"><?php echo e($contacts[$job->contact_id]->cid); ?></td>
                            <td class="pl-2 py-1"><?php echo e($contacts[$job->contact_id]->firstname); ?> <?php echo e($contacts[$job->contact_id]->lastname); ?></td>
                            <td class="pl-2 py-1"><?php echo e($contacts[$job->contact_id]->adress); ?> <?php echo e($contacts[$job->contact_id]->house); ?>, <?php echo e($contacts[$job->contact_id]->postcode); ?> <?php echo e($contacts[$job->contact_id]->city); ?></td>
                            <td class="pl-2 py-1"><?php echo e($contacts[$job->contact_id]->email); ?></td>
                            <td class="pl-2 py-1"><?php echo e($contacts[$job->contact_id]->tel); ?></td>
                            <td class="px-2"><a href=""><?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.clipboard-icon','data' => ['width' => '1.2rem']]); ?>
<?php $component->withName('icons.clipboard-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['width' => '1.2rem']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?></a></td>
                            
                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>

                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>


            

            
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
<?php /**PATH /var/www/html/resources/views/crm/jobs.blade.php ENDPATH**/ ?>