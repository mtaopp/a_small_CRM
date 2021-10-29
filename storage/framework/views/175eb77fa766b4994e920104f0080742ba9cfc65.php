<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <title>CRM | <?php echo e($pageTitle); ?></title>
</head>
<body class="bg-prime flex flex-col">

    <header class="bg-second text-lightblue w-100 z-1">
        <div class="container m-auto flex items-center">
            <div class="flex-none">

                <a href="/home">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.logo','data' => ['width' => '2rem']]); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['width' => '2rem']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </a>
            </div>
            <div class="flex-grow text-center my-2">
                <p><?php echo e($pageTitle); ?></p>
            </div>
            <div class="flex-none flex flex-inline place-items-center">
                <?php if(auth()->guard()->check()): ?>


                    <a class="mr-3" href="/user-control">
                        <?php if (isset($component)) { $__componentOriginal6203919a24afd155afc51a226aafd6da62e304db = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Icons\UserIcon::class, []); ?>
<?php $component->withName('icons.user-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['width' => '1.15rem']); ?>
<?php if (isset($__componentOriginal6203919a24afd155afc51a226aafd6da62e304db)): ?>
<?php $component = $__componentOriginal6203919a24afd155afc51a226aafd6da62e304db; ?>
<?php unset($__componentOriginal6203919a24afd155afc51a226aafd6da62e304db); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </a>
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.icons.exit-icon','data' => ['width' => '1.5rem']]); ?>
<?php $component->withName('icons.exit-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['width' => '1.5rem']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                    </form>

                    <?php else: ?>
                    <div class="w-2">
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </header>
<?php /**PATH /var/www/html/resources/views/components/header.blade.php ENDPATH**/ ?>