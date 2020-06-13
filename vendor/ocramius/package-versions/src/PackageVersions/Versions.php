<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/dbal' => 'v2.10.1@c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8',
  'doctrine/doctrine-bundle' => '2.0.7@6926771140ee87a823c3b2c72602de9dda4490d3',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.1@445796af0e873d9bd04f2502d322a7d5009b6846',
  'doctrine/persistence' => '1.3.6@5dd3ac5eebef2d0b074daa4440bb18f93132dee4',
  'doctrine/reflection' => 'v1.1.0@bc420ead87fdfe08c03ecc3549db603a45b06d4c',
  'hoa/compiler' => '3.17.08.08@aa09caf0bf28adae6654ca6ee415ee2f522672de',
  'hoa/consistency' => '1.17.05.02@fd7d0adc82410507f332516faf655b6ed22e4c2f',
  'hoa/event' => '1.17.01.13@6c0060dced212ffa3af0e34bb46624f990b29c54',
  'hoa/exception' => '1.17.01.16@091727d46420a3d7468ef0595651488bfc3a458f',
  'hoa/file' => '1.17.07.11@35cb979b779bc54918d2f9a4e02ed6c7a1fa67ca',
  'hoa/iterator' => '2.17.01.10@d1120ba09cb4ccd049c86d10058ab94af245f0cc',
  'hoa/math' => '1.17.05.16@7150785d30f5d565704912116a462e9f5bc83a0c',
  'hoa/protocol' => '1.17.01.14@5c2cf972151c45f373230da170ea015deecf19e2',
  'hoa/regex' => '1.17.01.13@7e263a61b6fb45c1d03d8e5ef77668518abd5bec',
  'hoa/stream' => '1.17.02.21@3293cfffca2de10525df51436adf88a559151d82',
  'hoa/ustring' => '4.17.01.16@e6326e2739178799b1fe3fdd92029f9517fa17a0',
  'hoa/visitor' => '2.17.01.16@c18fe1cbac98ae449e0d56e87469103ba08f224a',
  'hoa/zformat' => '1.17.01.10@522c381a2a075d4b9dbb42eb4592dd09520e4ac2',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'jms/metadata' => '2.1.0@8d8958103485c2cbdd9a9684c3869312ebdaf73a',
  'jms/serializer' => '3.5.0@0e286681396d8139406e596c6c802d37ab0b2124',
  'jms/serializer-bundle' => '3.5.0@5793ec59b2243365a625c0fd78415732097c11e8',
  'nelmio/cors-bundle' => '2.0.1@9683e6d30d000ef998919261329d825de7c53499',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'sensio/framework-extra-bundle' => 'v5.5.3@98f0807137b13d0acfdf3c255a731516e97015de',
  'symfony/cache' => 'v5.0.5@c6255e419e8592dab7de6e29b014ae9e8926989a',
  'symfony/cache-contracts' => 'v2.0.1@23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16',
  'symfony/config' => 'v5.0.5@938905f46df484b2aeae9016fd658aed577cdceb',
  'symfony/console' => 'v5.0.5@d29e2d36941de13600c399e393a60b8cfe59ac49',
  'symfony/dependency-injection' => 'v5.0.5@3575004a9b0d51ead83473ec90121045b3a0b56f',
  'symfony/doctrine-bridge' => 'v5.0.5@671f9afc0294e1a2fa5661fc5b8e53dd0ec85b7b',
  'symfony/dotenv' => 'v5.0.5@48c8fdda51e5b24d031ce8ec221caa186337e36f',
  'symfony/error-handler' => 'v5.0.5@24a938d9913f42d006ee1ca0164ea1f29c1067ec',
  'symfony/event-dispatcher' => 'v5.0.5@b45ad88b253c5a9702ce218e201d89c85d148cea',
  'symfony/event-dispatcher-contracts' => 'v2.0.1@af23c2584d4577d54661c434446fb8fbed6025dd',
  'symfony/filesystem' => 'v5.0.5@3afadc0f57cd74f86379d073e694b0f2cda2a88c',
  'symfony/finder' => 'v5.0.5@6251f201187ca9d66f6b099d3de65d279e971138',
  'symfony/flex' => 'v1.6.2@e4f5a2653ca503782a31486198bd1dd1c9a47f83',
  'symfony/form' => 'v5.0.7@2b8e26176c4b88ac44d822bb78dad3403d37ff83',
  'symfony/framework-bundle' => 'v5.0.5@fc6a0059fedaaf15efc66b64b7a3cedaa4b1edf4',
  'symfony/http-foundation' => 'v5.0.5@6f9c2ba72f4295d7ce6cf9f79dbb18036291d335',
  'symfony/http-kernel' => 'v5.0.5@021d7d54e080405678f2d8c54cb31d0bb03b4520',
  'symfony/inflector' => 'v5.0.7@70c25c66427e2bb6ba0827d668366d60b0a90cbf',
  'symfony/intl' => 'v5.0.7@a02d65b026413150223c010db3000028bf9770eb',
  'symfony/mime' => 'v5.0.5@9b3e5b5e58c56bbd76628c952d2b78556d305f3c',
  'symfony/options-resolver' => 'v5.0.7@09dccfffd24b311df7f184aa80ee7b61ad61ed8d',
  'symfony/orm-pack' => 'v1.0.8@c9bcc08102061f406dc908192c0f33524a675666',
  'symfony/polyfill-intl-icu' => 'v1.15.0@9c281272735eb66476e0fa7381e03fb0d4b60197',
  'symfony/polyfill-intl-idn' => 'v1.14.0@6842f1a39cf7d580655688069a03dd7cd83d244a',
  'symfony/polyfill-mbstring' => 'v1.14.0@34094cfa9abe1f0f14f48f490772db7a775559f2',
  'symfony/polyfill-php73' => 'v1.14.0@5e66a0fa1070bf46bec4bea7962d285108edd675',
  'symfony/property-access' => 'v5.0.7@6b14bd5e184fc3bbbd35e378692c61af765515b8',
  'symfony/routing' => 'v5.0.5@d6ca39fd05c1902bf34d724ba06fb8044a0b46de',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/stopwatch' => 'v5.0.5@5d9add8034135b9a5f7b101d1e42c797e7f053e4',
  'symfony/var-dumper' => 'v5.0.5@3a37aeb1132d1035536d3d6aa9cb06c2ff9355e9',
  'symfony/var-exporter' => 'v5.0.5@30779a25c736b4290449eaedefe4196c1d060378',
  'symfony/yaml' => 'v5.0.5@a4b613d7e44f62941adff5a802cff70adee57d3f',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'doctrine/data-fixtures' => '1.4.2@39e9777c9089351a468f780b01cffa3cb0a42907',
  'doctrine/doctrine-fixtures-bundle' => '3.3.0@8f07fcfdac7f3591f3c4bf13a50cbae05f65ed70',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'symfony/maker-bundle' => 'v1.14.6@bc4df88792fbaaeb275167101dc714218475db5f',
  'paragonie/random_compat' => '2.*@263d5fe1dd9598129558f82e84ee56acfbc5e3d6',
  'symfony/polyfill-ctype' => '*@263d5fe1dd9598129558f82e84ee56acfbc5e3d6',
  'symfony/polyfill-iconv' => '*@263d5fe1dd9598129558f82e84ee56acfbc5e3d6',
  'symfony/polyfill-php72' => '*@263d5fe1dd9598129558f82e84ee56acfbc5e3d6',
  'symfony/polyfill-php71' => '*@263d5fe1dd9598129558f82e84ee56acfbc5e3d6',
  'symfony/polyfill-php70' => '*@263d5fe1dd9598129558f82e84ee56acfbc5e3d6',
  'symfony/polyfill-php56' => '*@263d5fe1dd9598129558f82e84ee56acfbc5e3d6',
  '__root__' => 'dev-develop@263d5fe1dd9598129558f82e84ee56acfbc5e3d6',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
