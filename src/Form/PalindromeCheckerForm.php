<?php

namespace Drupal\palindrome_checker\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class PalindromeCheckerForm extends FormBase
{
    public function getFormId()
    {
        return 'palindrome-checker';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Check word'),
            '#required' => true,
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('submit'),
        ];
        
        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $name = $form_state->getValue('name');

        $form_state->setRedirect('palindrome_checker.result', ['name' => $name]);

    }
}
