<?php

/*
 * Bright Cloud Studio's Panel Pricing Calculator
 * Copyright (C) 2023-2024 Bright Cloud Studio
 *
 * @package    bright-cloud-studio/panel-pricing-calculato
 * @link       https://www.brightcloudstudio.com/
 * @license    http://opensource.org/licenses/lgpl-3.0.html
*/

namespace Bcs;

use Contao\Database;

use Isotope\Interfaces\IsotopeProduct;
use Isotope\Isotope;
use Isotope\Model\Attribute;
use Isotope\Model\AttributeOption;

use Isotope\Model\Product;

class Hooks
{
    // Called when a form is submitted
    public function onValidateFormField($widget, $formId, $formData, $form)
    {
        // Do your custom validation and add an error if widget does not validate
        if (!$this->validateWidget($widget)) {
            $widget->addError('My custom widget error');
        }

        return $widget;
    }
}
