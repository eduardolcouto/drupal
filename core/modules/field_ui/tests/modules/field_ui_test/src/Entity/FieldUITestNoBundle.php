<?php

/**
 * @file
 * Contains \Drupal\field_ui_test\Entity\FieldUITestNoBundle.
 */

namespace Drupal\field_ui_test\Entity;

use Drupal\Core\Entity\Entity;

/**
 * Defines the test Field UI class.
 *
 * @EntityType(
 *   id = "field_ui_test_no_bundle",
 *   label = @Translation("Test Field UI entity, no bundle"),
 *   handlers = {
 *     "storage" = "Drupal\Core\Entity\EntityDatabaseStorage"
 *   },
 *   fieldable = TRUE
 * )
 */
class FieldUITestNoBundle extends Entity {

  /**
   * The entity ID.
   *
   * @var int
   */
  public $id;

}