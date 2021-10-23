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

    <header class="bg-second text-prime w-100 z-1">
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
                        <?php if (isset($component)) { $__componentOriginal031ca11460d10373cfb9e69955099b144f9935b1 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\UserIcon::class, []); ?>
<?php $component->withName('user-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['width' => '1.15rem']); ?>
<?php if (isset($__componentOriginal031ca11460d10373cfb9e69955099b144f9935b1)): ?>
<?php $component = $__componentOriginal031ca11460d10373cfb9e69955099b144f9935b1; ?>
<?php unset($__componentOriginal031ca11460d10373cfb9e69955099b144f9935b1); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </a>
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                        <?php if (isset($component)) { $__componentOriginala19789a59f7b6ec5c36677729a4f287ccffc7f7d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ExitIcon::class, []); ?>
<?php $component->withName('exit-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['width' => '1.5rem']); ?>
<?php if (isset($__componentOriginala19789a59f7b6ec5c36677729a4f287ccffc7f7d)): ?>
<?php $component = $__componentOriginala19789a59f7b6ec5c36677729a4f287ccffc7f7d; ?>
<?php unset($__componentOriginala19789a59f7b6ec5c36677729a4f287ccffc7f7d); ?>
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