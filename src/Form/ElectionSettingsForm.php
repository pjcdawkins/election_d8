<?php

/**
 * @file
 * Contains \Drupal\election\Form\ElectionSettingsForm.
 */

namespace Drupal\election\Form;

use Drupal\Core\Form\ConfigFormBase;
use \Drupal\Core\Form\FormStateInterface;

/**
 * Configure election settings for this site.
 */
class ElectionSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'election_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->configFactory()->get('election.settings');
    $form['random_option'] = [
      '#type' => 'radios',
      '#title' => t('Random option for elections'),
      '#options' => array(
        'test1' => t('Test 1'),
        'test2' => t('Test 2'),
      ),
      '#default_value' => $config->get('random_option'),
      '#description' => t('Choose a suitable option.'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->configFactory()->get('election.settings');
    $config->set('random_option', $form_state['values']['random_option']);
    $config->save();
    parent::submitForm($form, $form_state);
  }

}
