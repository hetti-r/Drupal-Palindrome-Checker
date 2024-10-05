<?php

namespace Drupal\palindrome_checker\Controller;

use Drupal\Core\Controller\ControllerBase;

class PalindromeController extends ControllerBase
{
    public function result($name)
    {
        if ($name === strrev($name)) {
            return ['#markup' => $this->t("@name is a palindrome", ['@name' => $name])];

        } else {
            return ['#markup' => $this->t("@name is not a palindrome", ['@name' => $name])];
        }

        return ['#markup' => $this->t('Go Back @link', ['@link' => $link])];
    }
}
