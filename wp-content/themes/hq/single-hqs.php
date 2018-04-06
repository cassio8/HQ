<?

    $data         = Timber::get_context();
    $data['post'] = Timber::get_post();

	$paginas = get_field('paginas');

	$context = array();
	$i = 0;
	foreach ($paginas as $pagina) {
		$aux = new TimberImage($pagina['pagina']);
		$context[$i]['file'] = $aux->file;
		$context[$i]['id'] =  $aux->id;
		$i = $i + 1;
	}

    #$context = new TimberImage($paginas[0]['pagina']);

	#echo "<pre>";
    #print_r($context);
    #echo "</pre>";

	sort($context); #true or false

	$data['context'] = $context;
    #echo "<pre>";
    #print_r($context);
    #echo "</pre>";

	Timber::render('single-hqs.twig', $data);

