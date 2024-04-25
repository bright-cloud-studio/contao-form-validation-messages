<?php

namespace Bcs\Frontend;

class Page extends Contao_Frontend
{
	
  public function addValidationMessages(Widget $widget, string $formId, array $formData, Form $form)
  {

    if ('myform' === $formId && $widget instanceof \Contao\FormTextField && 'mywidget' === $widget->name) {
      // Do your custom validation and add an error if widget does not validate
      if (!$this->validateWidget($widget)) {
        $widget->addError('My custom widget error');
      }
    }
    return $widget;
  
  }

}
