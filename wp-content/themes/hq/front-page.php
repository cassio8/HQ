<?

	$query_hq = array(
	    'post_type'      => 'hqs',
	    'order'          => 'ASC',
	    'orderby'        => 'title',
	    'posts_per_page' => -1,
	);

    $data         = Timber::get_context();
    $data['post'] = Timber::get_post();
    $data['hqs'] = Timber::get_posts($query_hq);

	Timber::render('front-page.twig', $data);

