<?php

/**
 * @file
 * Contains \Drupal\election\Entity\Election.
 */

namespace Drupal\election\Entity;

use Drupal\Core\Entity\Annotation\EntityType;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Entity\Entity;

/**
 * Defines the Election entity.
 *
 * @EntityType(
 *   id = "election",
 *   label = @Translation("Election"),
 *   module = "election",
 *   base_table = "election",
 *   entity_keys = {
 *     "id" = "election_id",
 *     "label" = "title",
 *     "uuid" = "uuid"
 *   }
 * )
 */
class Election extends Entity implements ContentEntityInterface {

}
