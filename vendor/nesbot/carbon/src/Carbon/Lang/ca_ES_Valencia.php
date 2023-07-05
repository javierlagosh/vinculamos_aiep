<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

<<<<<<< HEAD
=======
use Symfony\Component\Translation\PluralizationRules;

// @codeCoverageIgnoreStart
if (class_exists(PluralizationRules::class)) {
    PluralizationRules::set(static function ($number) {
        return PluralizationRules::get($number, 'ca');
    }, 'ca_ES_Valencia');
}
// @codeCoverageIgnoreEnd

>>>>>>> f70250d9eaeafb7a42f9b666563f4cef7991e46c
return array_replace_recursive(require __DIR__.'/ca.php', [
]);
