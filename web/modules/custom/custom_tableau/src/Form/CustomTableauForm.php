<?php

namespace Drupal\custom_tableau\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\FormInterface

;

/**
 * Custom Tableau Form.
 */
class CustomTableauForm extends FormBase implements FormInterface {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'custom_tableau_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['embedded_link'] = [
      '#type' => 'textfield',
      '#title' => 'Embedded Link',
      '#required' => true,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => 'Submit',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $embedded_link = $form_state->getValue('embedded_link');

    // Add validation if required.
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Form submission logic goes here
    $embeddedLink = $form_state->getValue('embedded_link');

    // Store the embedded link in a session for later use
    \Drupal::service('session')->set('custom_tableau_embedded_link', $embeddedLink);

    // Redirect to graph page
    $form_state->setRedirect('custom_tableau.graph');

    // // Log the embedded link for debugging
    // $this->logger->debug('Embedded link: @link', ['@link' => $embeddedLink]);

    // // Process the embedded link and retrieve the graph
    // // (This will depend on the specific method you use to retrieve the graph)

    // // Add the graph to the form result
    // $form_state->set('graph', $graph);
  }

}