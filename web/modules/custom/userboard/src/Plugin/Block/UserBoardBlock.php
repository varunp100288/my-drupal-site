<?php

declare(strict_types=1);

namespace Drupal\userboard\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an user board block.
 *
 * @Block(
 *   id = "userboard_user_board",
 *   admin_label = @Translation("User Board"),
 *   category = @Translation("Custom"),
 * )
 */
final class UserBoardBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
