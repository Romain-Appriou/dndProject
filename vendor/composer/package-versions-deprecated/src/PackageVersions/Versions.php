<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'doctrine/annotations' => '1.14.3@fb0d71a7393298a7b232cbf4c8b1f73f3ec3d5af',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/collections' => '1.8.0@2b44dd4cbca8b5744327de78bafef5945c7e7b5e',
  'doctrine/common' => '3.4.3@8b5e5650391f851ed58910b3e3d48a71062eeced',
  'doctrine/dbal' => '2.13.9@c480849ca3ad6706a39c970cdfe6888fa8a058b8',
  'doctrine/deprecations' => 'v1.1.1@612a3ee5ab0d5dd97b7cf3874a6efe24325efac3',
  'doctrine/doctrine-bundle' => '2.7.2@22d53b2c5ad03929628fb4a928b01135585b7179',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.2.0@95aa4cb529f1e96576f3fda9f5705ada4056a520',
  'doctrine/inflector' => '2.0.8@f9301a5b2fb1216b2b08f02ba04dc45423db6bff',
  'doctrine/instantiator' => '1.5.0@0a0fa9780f5d4e507415a065172d26a98d02047b',
  'doctrine/lexer' => '2.1.0@39ab8fcf5a51ce4b85ca97c7a7d033eb12831124',
  'doctrine/migrations' => '3.1.5@537a847ec5525f50f927702fa01b97bacdc2c636',
  'doctrine/orm' => '2.16.0@495cd06b9a630f9c38a21ceb249ed008edbe8414',
  'doctrine/persistence' => '3.2.0@63fee8c33bef740db6730eb2a750cd3da6495603',
  'doctrine/sql-formatter' => '1.1.3@25a06c7bf4c6b8218f47928654252863ffc890a5',
  'egulias/email-validator' => '3.2.6@e5997fa97e8790cdae03a9cbd5e78e45e3c7bda7',
  'friendsofphp/proxy-manager-lts' => 'v1.0.16@ecadbdc9052e4ad08c60c8a02268712e50427f7c',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.4.0@a93fd278c97b2d41ebbce5ba048a24e3e6f580ba',
  'laminas/laminas-zendframework-bridge' => '1.4.1@88bf037259869891afce6504cacc4f8a07b24d0f',
  'monolog/monolog' => '2.9.1@f259e2b15fb95494c83f52d3caad003bbf5ffaa1',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.1@77a32518733312af16a44300404e945338981de3',
  'phpstan/phpdoc-parser' => '1.23.1@846ae76eef31c6d7790fac9bc399ecee45160b26',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'symfony/amqp-messenger' => 'v5.4.22@6343af983ba7460f7ea984aacb95d1ed382f6e40',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v5.4.21@1504b6773c6b90118f9871e90a67833b5d1dca3c',
  'symfony/cache' => 'v5.4.25@e2013521c0f07473ae69a01fce0af78fc3ec0f23',
  'symfony/cache-contracts' => 'v2.5.2@64be4a7acb83b6f2bf6de9a02cee6dad41277ebc',
  'symfony/config' => 'v5.4.26@8109892f27beed9252bd1f1c1880aeb4ad842650',
  'symfony/console' => 'v5.4.26@b504a3d266ad2bb632f196c0936ef2af5ff6e273',
  'symfony/dependency-injection' => 'v5.4.26@6736a10dcf724725a3b1c3b53e63a9ee03b27db9',
  'symfony/deprecation-contracts' => 'v2.5.2@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/doctrine-bridge' => 'v5.4.26@726042eb70f5afbcaaae6de2f349b7555cbf6d65',
  'symfony/doctrine-messenger' => 'v5.4.25@96bd1e093bfa8587205f4413193545c6685d7cd6',
  'symfony/dotenv' => 'v5.4.22@77b7660bfcb85e8f28287d557d7af0046bcd2ca3',
  'symfony/error-handler' => 'v5.4.26@b26719213a39c9ba57520cbc5e52bfcc5e8d92f9',
  'symfony/event-dispatcher' => 'v5.4.26@5dcc00e03413f05c1e7900090927bb7247cb0aac',
  'symfony/event-dispatcher-contracts' => 'v2.5.2@f98b54df6ad059855739db6fcbc2d36995283fe1',
  'symfony/expression-language' => 'v5.4.21@501589522b844b8eecf012c133f0404f0eef77ac',
  'symfony/filesystem' => 'v5.4.25@0ce3a62c9579a53358d3a7eb6b3dfb79789a6364',
  'symfony/finder' => 'v5.4.27@ff4bce3c33451e7ec778070e45bd23f74214cd5d',
  'symfony/flex' => 'v1.20.2@a2554c7e1b669f5049c1b67bc56f13aa1c4bf7da',
  'symfony/form' => 'v5.4.26@ca99a6874695aa266044a28ff945176cf480d9bf',
  'symfony/framework-bundle' => 'v5.4.26@37eec2334ee69871d971e16ce3daf6f9574fdfe8',
  'symfony/http-client' => 'v5.4.26@19d48ef7f38e5057ed1789a503cd3eccef039bce',
  'symfony/http-client-contracts' => 'v2.5.2@ba6a9f0e8f3edd190520ee3b9a958596b6ca2e70',
  'symfony/http-foundation' => 'v5.4.26@e7793151e99dc2ac1352ff3735d100fb3b3bfc08',
  'symfony/http-kernel' => 'v5.4.27@9f5624816c0b8d92f85666ac7ed2825a18fcd899',
  'symfony/intl' => 'v5.4.26@c26c40b64ecdc056810e294ea67ac5b34182cd69',
  'symfony/mailer' => 'v5.4.22@6330cd465dfd8b7a07515757a1c37069075f7b0b',
  'symfony/messenger' => 'v5.4.26@290ba8a39d57c89ddbf8706bbecea27cefee6de0',
  'symfony/mime' => 'v5.4.26@2ea06dfeee20000a319d8407cea1d47533d5a9d2',
  'symfony/monolog-bridge' => 'v5.4.22@34be6f0695e4187dbb832a05905fb4c6581ac39a',
  'symfony/monolog-bundle' => 'v3.8.0@a41bbcdc1105603b6d73a7d9a43a3788f8e0fb7d',
  'symfony/notifier' => 'v5.4.22@5ea626671ee3875f32c887467a47697bed83e6d4',
  'symfony/options-resolver' => 'v5.4.21@4fe5cf6ede71096839f0e4b4444d65dd3a7c1eb9',
  'symfony/password-hasher' => 'v5.4.27@6dd2daf41b44384752f6b59e8ad3e56ffb81e35c',
  'symfony/polyfill-intl-grapheme' => 'v1.27.0@511a08c03c1960e08a883f4cffcacd219b758354',
  'symfony/polyfill-intl-icu' => 'v1.27.0@a3d9148e2c363588e05abbdd4ee4f971f0a5330c',
  'symfony/polyfill-intl-idn' => 'v1.27.0@639084e360537a19f9ee352433b84ce831f3d2da',
  'symfony/polyfill-intl-normalizer' => 'v1.27.0@19bd1e4fcd5b91116f14d8533c57831ed00571b6',
  'symfony/polyfill-mbstring' => 'v1.27.0@8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
  'symfony/polyfill-php73' => 'v1.27.0@9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
  'symfony/polyfill-php80' => 'v1.27.0@7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
  'symfony/polyfill-php81' => 'v1.27.0@707403074c8ea6e2edaf8794b0157a0bfa52157a',
  'symfony/process' => 'v5.4.26@1a44dc377ec86a50fab40d066cd061e28a6b482f',
  'symfony/property-access' => 'v5.4.26@0249e46f69e92049a488f39fcf531cb42c50caaa',
  'symfony/property-info' => 'v5.4.24@d43b85b00699b4484964c297575b5c6f9dc5f6e1',
  'symfony/redis-messenger' => 'v5.4.26@55258642bca0d1869d147c85ee3277305549d5a3',
  'symfony/routing' => 'v5.4.26@853fc7df96befc468692de0a48831b38f04d2cb2',
  'symfony/runtime' => 'v5.4.26@4659b552bc9f2380986e3f4b7e2bd4e512470e0d',
  'symfony/security-bundle' => 'v5.4.26@38d674b6150ebd638f7c517b19790ac631f8dc35',
  'symfony/security-core' => 'v5.4.22@a801d525c7545332e2ddf7f52c163959354b1650',
  'symfony/security-csrf' => 'v5.4.27@995fcfcc5a3be09df157b4960668f61cceb86611',
  'symfony/security-guard' => 'v5.4.27@72c53142533462fc6fda4a429c2a21c2b944a8cc',
  'symfony/security-http' => 'v5.4.26@9291eec227de5179eb0a1b60cc6265ee6f987b4a',
  'symfony/serializer' => 'v5.4.26@3589ce086e867691ca7ac49eeb919688b31f7494',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/stopwatch' => 'v5.4.21@f83692cd869a6f2391691d40a01e8acb89e76fee',
  'symfony/string' => 'v5.4.26@1181fe9270e373537475e826873b5867b863883c',
  'symfony/translation' => 'v5.4.24@de237e59c5833422342be67402d487fbf50334ff',
  'symfony/translation-contracts' => 'v2.5.2@136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
  'symfony/twig-bridge' => 'v5.4.26@832461a5f556df7933fd82e75b097d76182c640b',
  'symfony/twig-bundle' => 'v5.4.27@a16996ad54d75e220e91a0c7517437ad592eccca',
  'symfony/validator' => 'v5.4.26@77533f12c6dd5c766f1e1689de4ef4d1eac4af71',
  'symfony/var-dumper' => 'v5.4.26@e706c99b4a6f4d9383b52b80dd8c74880501e314',
  'symfony/var-exporter' => 'v5.4.26@11401fe94f960249b3c63a488c63ba73091c1e4a',
  'symfony/web-link' => 'v5.4.21@57c03a5e89ed7c2d7a1a09258dfec12f95f95adb',
  'symfony/yaml' => 'v5.4.23@4cd2e3ea301aadd76a4172756296fe552fb45b0b',
  'twig/extra-bundle' => 'v3.7.0@802cc2dd46ec88285d6c7fa85c26ab7f2cd5bc49',
  'twig/twig' => 'v3.7.0@5cf942bbab3df42afa918caeba947f1b690af64b',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'myclabs/deep-copy' => '1.11.1@7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
  'nikic/php-parser' => 'v4.16.0@19526a33fb561ef417e822e85f08a00db4059c17',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpunit/php-code-coverage' => '9.2.27@b0a88255cb70d52653d80c890bd7f38740ea50d1',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.6.10@a6d351645c3fe5a30f5e86be6577d946af65a328',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.8@fa0f136dd2334583309d32b62544682ee972b51a',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.5@74be17022044ebaaecfdf0c5cd504fc9cd5a7131',
  'sebastian/environment' => '5.1.5@830c43a844f1f8d5b7a1f6d6076b784454d8b7ed',
  'sebastian/exporter' => '4.0.5@ac230ed27f0f98f597c8a2b6eb7ac563af5e5b9d',
  'sebastian/global-state' => '5.0.6@bde739e7565280bda77be70044ac1047bc007e34',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.5@e75bd0f07204fec2a0af9b0f3cfe97d05f92efc1',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.2.1@75e2c2a32f5e0b3aef905b9ed0b179b953b3d7c7',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => 'v5.4.21@a866ca7e396f15d7efb6d74a8a7d364d4e05b704',
  'symfony/css-selector' => 'v5.4.26@0ad3f7e9a1ab492c5b4214cf22a9dc55dcf8600a',
  'symfony/debug-bundle' => 'v5.4.26@17c372891d4554d5d2f5cf602aef02c859ad52d8',
  'symfony/dom-crawler' => 'v5.4.25@d2aefa5a7acc5511422792931d14d1be96fe9fea',
  'symfony/maker-bundle' => 'v1.43.0@e3f9a1d9e0f4968f68454403e820dffc7db38a59',
  'symfony/phpunit-bridge' => 'v6.3.2@e020e1efbd1b42cb670fcd7d19a25abbddba035d',
  'symfony/web-profiler-bundle' => 'v5.4.26@a08572ac2e4aea7ed85065524bb4fe3ace6c81c3',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  '__root__' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
