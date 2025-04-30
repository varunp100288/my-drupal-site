<?php


namespace Drupal\custom_migration\Plugin\migrate\source;

use Drupal\migrate\Plugin\migrate\source\SqlBase;

/**
 * @MigrateSource(
 *  id = "custom_migration",
 *  source_module = "custom_migration"
 * )
 */

 class MySource extends SqlBase {
    public function query() {
       
            // return $this->select("node_field_data", "n")
            //             ->fields("n", ["nid", "title"])
            //             ->condition("n.type", "article");
            //            
        
            $query = $this->select("node_field_data", "n")
            ->fields("n", ["nid", "title"])
            ->condition("n.type", "article");

                // Left join node__body table to fetch body content
            $query->leftJoin("node__body", "b", "n.nid = b.entity_id");
            $query->fields("b", ["body_value", "body_format"]);

            return $query; // ✅ Required to return the query
    }
    public function fields() {
        return 
        [   
            'nid' => $this->t('Unique ID'),
            'title' => $this->t('Article Title'),
            'body_value' => $this->t('Body Content'),
            'body_format' => $this->t('Body Format'),
        ];
    }
    public function getIds() {
        return [
          'nid' => [
            'type' => 'integer',
          ],
        ];
      }
    public function getDatabaseKey() {
        return 'external';  // Use 'external' if the data is from another DB
      }
 }