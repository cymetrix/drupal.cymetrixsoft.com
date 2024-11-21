<?php


/**
 * Implements hook_preprocess_HOOK() for block templates.
 */
function cymetrix_preprocess_block(&$variables) {
  // Query the WordPress database using the External Database module.
  $result = db_query('SELECT * FROM wordpress_database.wp_posts WHERE post_type = :post_type', [':post_type' => 'post']);
  
  // Fetch and render WordPress blog posts.
  foreach ($result as $row) {
    $content = [
      '#markup' => '<div class="wordpress-blog">' . $row->post_title . '<br>' . $row->post_content . '</div>',
    ];

    $variables['content'][] = $content;
  }
}


function cymetrix_preprocess_page(&$variables) {
  // Check if this is the page for the "job" content type
  if ($node = \Drupal::request()->attributes->get('node')) {
    if ($node->getType() == 'job') {
      // Load all nodes of the "job" content type
      $query = \Drupal::entityQuery('node')
        ->condition('type', 'job')
        ->condition('status', 1); // Only published nodes
      $nids = $query->execute();
      $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);

      // Pass the nodes to the template
      $variables['job_nodes'] = $nodes;
    }
  }
}

function cymetrix_preprocess_page(&$variables) {
  // Load all published nodes
  $query = \Drupal::entityQuery('node')
    ->condition('status', 1); // Only published nodes
  $nids = $query->execute();
  $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);

  // Pass the nodes to the template
  $variables['all_nodes'] = $nodes;
}
?>