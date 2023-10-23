<?php

namespace Drupal\custom_tableau\Controller;

use Drupal\Core\Controller\ControllerBase;
use Psr\Log\LoggerInterface;
use Drupal\Core\Session\SessionManagerInterface;


use Drupal\Core\Form\FormBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Custom Tableau Controller.
 */
class CustomTableauController extends ControllerBase {

  /**
   * The form builder.
   *
   * @var \Drupal\Core\Form\FormBuilder
   */
  protected $formBuilder;
  protected $logger;

  /**
   * CustomTableauController constructor.
   *
   * @param \Drupal\Core\Form\FormBuilder $formBuilder
   *   The form builder.
   */
  public function __construct(FormBuilder $formBuilder, LoggerInterface $logger) {
    $this->formBuilder = $formBuilder;
    $this->logger = $logger;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('form_builder'),
      $container->get('logger.factory')->get('custom_tableau')
    );
  }

  /**
   * Form builder callback.
   */
  public function form() {
    $form = $this->formBuilder->getForm('\Drupal\custom_tableau\Form\CustomTableauForm');

    return $form;
  }

  public function displayGraph() {
    // Retrieve the embedded link from a storage mechanism or configuration.
    $embeddedLink = 'https://public.tableau.com/views/HistoricalEnrollment-Sandbox/LineGraph';
  
    return [
      '#title' => 'My Graph',
      '#theme' => 'custom_tableau_graph',
      '#item' => 'Hello world',
    ];
  }

}
