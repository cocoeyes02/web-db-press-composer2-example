<?php

use Composer\Semver\VersionParser;
use Composer\InstalledVersions;
require './vendor/autoload.php';

// 特定のパッケージをインストールしているか
$stringIsInstalledLaravelFramework = InstalledVersions::isInstalled('laravel/framework') ? "true" : "false";
$stringIsInstalledLaravelDusk = InstalledVersions::isInstalled('laravel/dusk')  ? "true" : "false";
echo "is installed laravel/framework: " . $stringIsInstalledLaravelFramework . "\n";
echo "is installed laravel/dusk: " . $stringIsInstalledLaravelDusk . "\n";

// 特定のパッケージのバージョンやリファレンス情報
$stringNormalizedVersionLaravelFramework = InstalledVersions::getVersion('laravel/framework');
$stringOriginalVersionLaravelFramework = InstalledVersions::getPrettyVersion('laravel/framework');
$stringReferenceLaravelFramework = InstalledVersions::getReference('laravel/framework');
echo "installed laravel/framework (like a 0.0.0.0) is: " . $stringNormalizedVersionLaravelFramework . "\n";
echo "installed laravel/framework (like a v0.0.0) is: " . $stringOriginalVersionLaravelFramework . "\n";
echo "laravel/framework Reference: " . $stringReferenceLaravelFramework . "\n";

// 特定のパッケージのバージョンがインストールされているか
$stringIsLaravel70Installed = InstalledVersions::satisfies(new VersionParser, 'laravel/framework', '7.0') ? "true" : "false";
$stringIsLaravel7Installed = InstalledVersions::satisfies(new VersionParser, 'laravel/framework', '7.*') ? "true" : "false";
$stringIsLaravel7InstalledWithCaret = InstalledVersions::satisfies(new VersionParser, 'laravel/framework', '^7.0') ? "true" : "false";
$stringIsLaravel7InstalledWithTilde = InstalledVersions::satisfies(new VersionParser, 'laravel/framework', '~7.0') ? "true" : "false";
$stringIsLaravel71Installed = InstalledVersions::satisfies(new VersionParser, 'laravel/framework', '7.1') ? "true" : "false";
$stringIsLaravel8Installed = InstalledVersions::satisfies(new VersionParser, 'laravel/framework', '8.0') ? "true" : "false";
echo "is installed laravel/framework version 7.0: " . $stringIsLaravel70Installed . "\n";
echo "is installed laravel/framework version 7.*: " . $stringIsLaravel7Installed . "\n";
echo "is installed laravel/framework version ^7.0: " . $stringIsLaravel7InstalledWithCaret . "\n";
echo "is installed laravel/framework version ~7.0: " . $stringIsLaravel7InstalledWithTilde . "\n";
echo "is installed laravel/framework version 7.1: " . $stringIsLaravel71Installed . "\n";
echo "is installed laravel/framework version 8: " . $stringIsLaravel8Installed . "\n";