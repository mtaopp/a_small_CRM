<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.header','data' => ['pageTitle' => 'Choose Contact']]); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['pageTitle' => 'Choose Contact']); ?>
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
                    <a href="<?php echo e(route('create.contact')); ?>"><?php if (isset($component)) { $__componentOriginal5c2ca045a5bf696e8171a2ca6454bce9ccdfc58b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Icons\UserPlusIcon::class, []); ?>
<?php $component->withName('icons.user-plus-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'my-auto','width' => '4rem']); ?>
<?php if (isset($__componentOriginal5c2ca045a5bf696e8171a2ca6454bce9ccdfc58b)): ?>
<?php $component = $__componentOriginal5c2ca045a5bf696e8171a2ca6454bce9ccdfc58b; ?>
<?php unset($__componentOriginal5c2ca045a5bf696e8171a2ca6454bce9ccdfc58b); ?>
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
                            <td class="pl-2">ID</td>
                            <td class="pl-2">Name</td>
                            <td class="pl-2">Adress</td>
                            <td class="pl-2">Phone</td>
                            <td class="pl-2">E-Mail</td>
                            <td class="px-2">More</td>
                        </tr>
                        <tr>
                            <td class="pl-2"><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td><hr></td>
                            <td class="pr-2"><hr></td>
                        </tr>

                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr class="">
                                <td class="pl-2 py-1"><?php echo e($contact->cid); ?></td>
                                <td class="pl-2"><?php echo e($contact->firstname); ?> <?php echo e($contact->lastname); ?></td>
                                <td class="pl-2"><?php echo e($contact->adress); ?> <?php echo e($contact->house); ?>, <?php echo e($contact->postcode); ?> <?php echo e($contact->city); ?></td>
                                <td class="pl-2"><?php echo e($contact->tel); ?></td>
                                <td class="pl-2"><?php echo e($contact->email); ?></td>
                                <td class="px-2"><a href="<?php echo e(route('create.job', ['id' => $contact->id])); ?>"><?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.check-icon','data' => ['width' => '1.5rem']]); ?>
<?php $component->withName('icons.check-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['width' => '1.5rem']); ?>
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
<?php /**PATH /var/www/html/resources/views/crm/choose-contact.blade.php ENDPATH**/ ?>