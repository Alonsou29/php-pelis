<?php
require_once 'constantes.php';
require_once 'funciones.php';
require_once 'clases/next_movie.php';

$nex_movie = next_movie::fetch(API_URL);
$ns_data=$nex_movie->get_data();

?>
<?php render_template('head', $ns_data); ?>
<?php render_template('style'); ?>
<?php render_template('main', array_merge($ns_data, ["until_message"=>$nex_movie->get_until_message()])); ?>




