<?php $args = array(
  // 'sort_order' => 'asc',
	// 'sort_column' => 'post_title',
	// 'hierarchical' => 1,
	// 'exclude' => '',
	// 'include' => [65, 22, 51, 24],
	'meta_key' => 'navbar',
	'meta_value' => 'display',
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
// debug($pages);
?>
<nav class="navbar navbar-expand-lg navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
			<?php foreach ($pages as $page): ?>
	    <li class="nav-item">
				<a class="nav-link" href="<?= $page->guid ?>"><?= $page->post_title ?></a>
			</li>
	    <?php endforeach ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <i class="fas fa-search"></i>
    </form>
  </div>
</nav>
