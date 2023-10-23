<?php

namespace Drupal\custom_tableau\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\custom_tableau\Controller\CustomTableauController;

/**
 * Exposes custom_tableau as block
 * 
 * @Block(
 *      id="custom_tableau_block",
 *      admin_label = @Translation("custom_tableau"),
 *      category = @Translation("Custom block for custom tableau")
 * )
 */

 class custom_tableau_block extends BlockBase{
    /**
     * {@inheritdoc}
     */

     public function build(){
        $graphDisplay = new CustomTableauController;
        $graph = $graphDisplay->displayGraph();

        return $graph;

     }

 }



?>