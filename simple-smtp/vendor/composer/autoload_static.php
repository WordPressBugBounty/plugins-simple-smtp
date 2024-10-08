<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9916ad764a9bb2f404427ac0ebc24621
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'wpsimplesmtp\\Glance' => __DIR__ . '/../..' . '/src/class-glance.php',
        'wpsimplesmtp\\Log' => __DIR__ . '/../..' . '/src/log/class-log.php',
        'wpsimplesmtp\\LogAttachment' => __DIR__ . '/../..' . '/src/log/class-logattachment.php',
        'wpsimplesmtp\\LogService' => __DIR__ . '/../..' . '/src/log/class-logservice.php',
        'wpsimplesmtp\\LogTable' => __DIR__ . '/../..' . '/src/log/class-logtable.php',
        'wpsimplesmtp\\Mail' => __DIR__ . '/../..' . '/src/mail/class-mail.php',
        'wpsimplesmtp\\MailDisable' => __DIR__ . '/../..' . '/src/mail/class-maildisable.php',
        'wpsimplesmtp\\MailView' => __DIR__ . '/../..' . '/src/mail/class-mailview.php',
        'wpsimplesmtp\\Mailtest' => __DIR__ . '/../..' . '/src/mail/class-mailtest.php',
        'wpsimplesmtp\\Multisite' => __DIR__ . '/../..' . '/src/settings/class-multisite.php',
        'wpsimplesmtp\\Options' => __DIR__ . '/../..' . '/src/class-options.php',
        'wpsimplesmtp\\Privacy' => __DIR__ . '/../..' . '/src/settings/class-privacy.php',
        'wpsimplesmtp\\QuickConfig' => __DIR__ . '/../..' . '/src/settings/class-quickconfig.php',
        'wpsimplesmtp\\Settings' => __DIR__ . '/../..' . '/src/settings/class-settings.php',
        'wpsimplesmtp\\Singular' => __DIR__ . '/../..' . '/src/settings/class-singular.php',
        'wpsimplesmtp\\cli\\EmailLog' => __DIR__ . '/../..' . '/src/cli/class-emaillog.php',
        'wpsimplesmtp\\cli\\EmailTest' => __DIR__ . '/../..' . '/src/cli/class-emailtest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9916ad764a9bb2f404427ac0ebc24621::$classMap;

        }, null, ClassLoader::class);
    }
}
