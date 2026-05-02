<?php

declare(strict_types=1);

namespace SilverShop\Tests;

use SilverStripe\Core\Environment;
use SilverStripe\Versioned\Versioned;

/**
 * Helper class for setting up shop tests
 *
 * @package    shop
 * @subpackage tests
 */
abstract class ShopTest
{
    public static function setConfiguration(): void
    {
        include __DIR__ . DIRECTORY_SEPARATOR . 'test_config.php';

        // SS6 / Versioned: default reading mode is Live; tests need Stage so fixtures are visible.
        // set_stage() is a static property write — no database access required.
        Versioned::set_stage(Versioned::DRAFT);
        Environment::setEnv('SS_SEND_ALL_EMAILS_TO', '');
    }
}
