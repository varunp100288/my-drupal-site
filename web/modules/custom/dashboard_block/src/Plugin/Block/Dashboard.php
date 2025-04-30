<?php

namespace Drupal\dashboard_block\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\node\Entity\Node;
/**
 * @Block(
 *    id = "user_dashboard",
 *    admin_label = @Translation("User Dashboard"),
 *    category = @Translation("Custom"),  
 * )
 */

class Dashboard extends BlockBase {

    public function build() {
       
        $query = \Drupal::entityQuery("node")
                ->condition("type", 'article')
                ->condition('status', 1)
                ->sort('created', 'DESC')
                ->accessCheck(TRUE)
                ->range(0,12);

        $nids = $query->execute();
        $items = [];
        // \Drupal::logger('dashboard_block')->debug('Node IDs: ' . print_r($nids, TRUE));

        //  var_dump($nids);
        $nodes = Node::loadMultiple($nids);
        \Drupal::logger('dashboard_block')->debug('Node IDs: ' . print_r($nodes, TRUE));
        foreach ($nodes as $node) {
            $items[] = $node->getTitle();
        }
        // \Drupal::logger('dashboard_block')->debug('Node IDs: ' . print_r($items, TRUE));
        return[
            '#theme' => 'item_list',
            '#items' => $items,
            '#title' => $this->t('Latest Articles'),                
        ];
    }

}
