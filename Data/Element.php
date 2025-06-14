<?php
/**
 * Cytracon
 *
 * This source file is subject to the Cytracon Software License, which is available at https://www.cytracon.com/license
 * Do not edit or add to this file if you wish to upgrade the to newer versions in the future.
 * If you wish to customize this module for your needs.
 * Please refer to https://www.cytracon.com for more information.
 *
 * @category  Cytracon
 * @package   Cytracon_ProductPageBuilder
 * @copyright Copyright (C) 2019 Cytracon (https://www.cytracon.com)
 */

namespace Cytracon\ProductPageBuilder\Data;

class Element extends \Cytracon\Builder\Data\Element\AbstractElement
{
    /**
     * @return \Cytracon\Builder\Data\Form\Element\Fieldset
     */
    public function prepareGeneralTab()
    {
        $general = parent::prepareGeneralTab();

            $commonp = $general->addContainerGroup(
                'commonp',
                [
                    'sortOrder' => 520
                ]
            );

                $commonp->addChildren(
                    'enable_cache',
                    'toggle',
                    [
                        'sortOrder'       => 10,
                        'key'             => 'enable_cache',
                        'defaultValue'    => true,
                        'templateOptions' => [
                            'label' => __('Enable Cache')
                        ]
                    ]
                );

                $commonp->addChildren(
                    'cache_lifetime',
                    'number',
                    [
                        'sortOrder'       => 20,
                        'key'             => 'cache_lifetime',
                        'defaultValue'    => 86400,
                        'templateOptions' => [
                            'label'        => __('Cache Lifetime (Seconds)'),
                            'tooltipClass' => 'tooltip-top-left',
                            'tooltip'      => __('86400 by default, if not set. To refresh instantly, clear the Blocks HTML Output cache.')
                        ],
                        'hideExpression' => '!model.enable_cache'
                    ]
                );

        return $general;
    }
}
