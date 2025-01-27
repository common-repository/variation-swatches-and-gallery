<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1b7dd2950a860a0a73a38ff787c03a2
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zqe\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zqe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
            1 => __DIR__ . '/../..' . '/admin',
            2 => __DIR__ . '/../..' . '/public',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Zqe\\Variation_Swatches_And_Gallery' => __DIR__ . '/../..' . '/includes/class-variation-swatches-and-gallery.php',
        'Zqe\\Variation_Swatches_And_Gallery_Activator' => __DIR__ . '/../..' . '/includes/class-variation-swatches-and-gallery-activator.php',
        'Zqe\\Variation_Swatches_And_Gallery_Admin' => __DIR__ . '/../..' . '/admin/class-variation-swatches-and-gallery-admin.php',
        'Zqe\\Variation_Swatches_And_Gallery_Deactivator' => __DIR__ . '/../..' . '/includes/class-variation-swatches-and-gallery-deactivator.php',
        'Zqe\\Variation_Swatches_And_Gallery_Helper' => __DIR__ . '/../..' . '/includes/class-variation-swatches-and-gallery-helper.php',
        'Zqe\\Variation_Swatches_And_Gallery_Loader' => __DIR__ . '/../..' . '/includes/class-variation-swatches-and-gallery-loader.php',
        'Zqe\\Variation_Swatches_And_Gallery_Option' => __DIR__ . '/../..' . '/includes/class-variation-swatches-and-gallery-option.php',
        'Zqe\\Variation_Swatches_And_Gallery_Public' => __DIR__ . '/../..' . '/public/class-variation-swatches-and-gallery-public.php',
        'Zqe\\Variation_Swatches_And_Gallery_Requirement' => __DIR__ . '/../..' . '/includes/class-variation-swatches-and-gallery-requirement.php',
        'Zqe\\Variation_Swatches_And_Gallery_Widget' => __DIR__ . '/../..' . '/includes/class-variation-swatches-and-gallery-widget.php',
        'Zqe\\Variation_Swatches_And_Gallery_i18n' => __DIR__ . '/../..' . '/includes/class-variation-swatches-and-gallery-i18n.php',
        'Zqe\\Wp_Settings_Api' => __DIR__ . '/..' . '/zqelab/wp-settings-api/src/class.wp-settings-api.php',
        'Zqe\\Wp_Term_Meta' => __DIR__ . '/..' . '/zqelab/wp-term-meta/src/class.wp-term-meta.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1b7dd2950a860a0a73a38ff787c03a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1b7dd2950a860a0a73a38ff787c03a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1b7dd2950a860a0a73a38ff787c03a2::$classMap;

        }, null, ClassLoader::class);
    }
}
