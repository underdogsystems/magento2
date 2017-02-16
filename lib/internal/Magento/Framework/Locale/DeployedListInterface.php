<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Locale;

/**
 * Interface for classes that returning array of deployed locales.
 */
interface DeployedListInterface
{
    /**
     * Get array of deployed locales.
     *
     * Function result has next format:
     * ```php
     *     [
     *        0 => [
     *           'value' => 'de_DE'
     *           'label' => 'German (Germany)'
     *        ],
     *        1 => [
     *           'value' => 'en_GB'
     *           'label' => 'English (United Kingdom)'
     *        ],
     *    ]
     * ```
     *
     * @return array
     */
    public function getLocales();

    /**
     * Get array of deployed locales with translation.
     *
     * Function result has next format:
     * ```php
     *     [
     *        0 => [
     *           'value' => 'de_DE'
     *           'label' => 'Deutsch (Deutschland) / German (Germany)'
     *        ],
     *        1 => [
     *           'value' => 'en_GB'
     *           'label' => 'English (United Kingdom) / English (United Kingdom)'
     *        ],
     *    ]
     * ```
     *
     * @return array
     */
    public function getTranslatedLocales();
}
