<?php

namespace Drupal\pbt_entity_test\Entity;

use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;

/**
 * Defines a content entity type that has a string ID.
 *
 * @ContentEntityType(
 *   id = "test_entity",
 *   label = @Translation("Test entity"),
 *   base_table = "test_entity_table",
 *   handlers = {
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\DefaultHtmlRouteProvider",
 *     },
 *   },
 *   links = {
 *     "canonical" = "/test-entity/{test_entity}",
 *   },
 *   entity_keys = {
 *     "id" = "id",
 *     "langcode" = "langcode",
 *   }
 * )
 */
class TestEntity extends ContentEntityBase {

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);

    $fields['terms'] = BaseFieldDefinition::create('entity_reference')
      ->setSetting('target_type', 'taxonomy_term')
      ->setSetting('handler', 'default')
      ->setLabel(t('terms'));

    return $fields;
  }

}
