<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYzsGRte\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYzsGRte/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYzsGRte.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYzsGRte\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYzsGRte\App_KernelDevDebugContainer([
    'container.build_hash' => 'YzsGRte',
    'container.build_id' => 'c9130b8b',
    'container.build_time' => 1696335880,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYzsGRte');
