<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerH4e1sx7\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerH4e1sx7/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerH4e1sx7.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerH4e1sx7\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerH4e1sx7\appDevDebugProjectContainer([
    'container.build_hash' => 'H4e1sx7',
    'container.build_id' => 'e3cf4eeb',
    'container.build_time' => 1587029164,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerH4e1sx7');
