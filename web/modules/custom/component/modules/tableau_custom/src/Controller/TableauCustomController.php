<?php

namespace Drupal\tableau_custom\Controller;
use Drupal\Core\Controller\ControllerBase;

class TableauCustomController extends ControllerBase{

    public function content(){
        return array(
            '#type' => 'markup',
            '#markup' => $this->t('Welcome')
        );
    }

}

