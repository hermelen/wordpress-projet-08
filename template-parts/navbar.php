<?php $args = array(
  // 'sort_order' => 'asc',
	// 'sort_column' => 'post_title',
	// 'hierarchical' => 1,
	// 'exclude' => '',
	// 'include' => '',
	// 'meta_key' => '',
	// 'meta_value' => '',
	// 'authors' => '',
	// 'child_of' => 0,
	// 'parent' => -1,
	// 'exclude_tree' => '',
	// 'number' => '',
	// 'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
);
$pages = get_pages($args);
?>
<nav>
  <ul>
    <?php foreach ($pages as $page): ?>
    <li><a href="<?= $page->guid ?>"><?= $page->post_title ?></a></li>
  <?php endforeach ?>
  </ul>
</nav>
