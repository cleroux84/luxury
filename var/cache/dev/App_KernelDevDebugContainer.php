<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXudQ2tA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXudQ2tA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXudQ2tA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXudQ2tA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXudQ2tA\App_KernelDevDebugContainer([
    'container.build_hash' => 'XudQ2tA',
    'container.build_id' => 'ab762bd7',
    'container.build_time' => 1594899596,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXudQ2tA');
