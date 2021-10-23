<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.header','data' => ['pageTitle' => 'Change Password']]); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['pageTitle' => 'Change Password']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<main class="w-100 text-prime">

    <div class="container m-auto py-5 h-full flex ">
        <div class="w-full place-self-center -mt-3">
            <div class="w-8/12 m-auto px-5 mb-3 flex justify-between">
                <a href="/user-control"><?php if (isset($component)) { $__componentOriginal79668cc2b9597c5cf7427445c1c683aff5cb1ea8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\BackIcon::class, []); ?>
<?php $component->withName('back-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['width' => '2rem']); ?>
<?php if (isset($__componentOriginal79668cc2b9597c5cf7427445c1c683aff5cb1ea8)): ?>
<?php $component = $__componentOriginal79668cc2b9597c5cf7427445c1c683aff5cb1ea8; ?>
<?php unset($__componentOriginal79668cc2b9597c5cf7427445c1c683aff5cb1ea8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?></a>
            </div>
            <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Card::class, []); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal51e1856f11b40062d495ea931afca73dc4baa5c4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CardLeft::class, []); ?>
<?php $component->withName('card-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.logo','data' => ['class' => 'm-auto','width' => '100']]); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'm-auto','width' => '100']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                 <?php if (isset($__componentOriginal51e1856f11b40062d495ea931afca73dc4baa5c4)): ?>
<?php $component = $__componentOriginal51e1856f11b40062d495ea931afca73dc4baa5c4; ?>
<?php unset($__componentOriginal51e1856f11b40062d495ea931afca73dc4baa5c4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal0674a6f78b899dd665c58fb6c35e4f8f489b2d59 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CardRight::class, []); ?>
<?php $component->withName('card-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                    <div class="w-full">
                        <?php if(session('status') == "password-updated"): ?>
                            <div class="bg-comp text-black text-center rounded-lg">
                                <p>Password has been updated</p>
                            </div>
                        <?php endif; ?>

                        <form class="w-full" action="<?php echo e(route('user-password.update')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['class' => 'w-full text-black','id' => 'current_password','type' => 'password','label' => 'Current Password:']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-full text-black','id' => 'current_password','type' => 'password','label' => 'Current Password:']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                            <?php if(array_key_exists('current_password', $errors->updatePassword->messages())): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        <?php echo e($errors->updatePassword->messages()['current_password'][0]); ?>

                                    </strong>
                                </span>
                            <?php endif; ?>
                            <br>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['class' => 'w-full text-black','id' => 'password','type' => 'password','label' => 'New Password:']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-full text-black','id' => 'password','type' => 'password','label' => 'New Password:']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <br>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['class' => 'w-full text-black','id' => 'password_confirmation','type' => 'password','label' => 'Password confirmation:']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-full text-black','id' => 'password_confirmation','type' => 'password','label' => 'Password confirmation:']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>


                            <?php if(array_key_exists('password', $errors->updatePassword->messages())): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        <?php echo e($errors->updatePassword->messages()['password'][0]); ?>

                                    </strong>
                                </span>
                            <?php endif; ?>
                            <br>
                            <div class="text-center">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['type' => 'submit','text' => 'Update']]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'submit','text' => 'Update']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            </div>
                        </form>
                    </div>
                 <?php if (isset($__componentOriginal0674a6f78b899dd665c58fb6c35e4f8f489b2d59)): ?>
<?php $component = $__componentOriginal0674a6f78b899dd665c58fb6c35e4f8f489b2d59; ?>
<?php unset($__componentOriginal0674a6f78b899dd665c58fb6c35e4f8f489b2d59); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
             <?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </div>
    </div>

    <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p>xxxx</p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


    <?php

        if(array_key_exists('password', $errors->updatePassword->messages())) {
            dd($errors->updatePassword->messages()['password']);
        }



        dd($errors->updatePassword->messages());
    ?>


    <?php
    dd(session());
    ?>

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

<?php /**PATH /var/www/html/resources/views/auth/change-password.blade.php ENDPATH**/ ?>