<pre>
<?php
	print_r($_GET);
	$headers = 'From: webmaster@sit.ac.nz' . "\r\n" .
    'Reply-To: webmaster@sit.ac.nz' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	$result = mail("robertclarkson@gmail.com", 
	"What the user sent",
	"User sent:".print_r($_GET,true),
	$headers);

?>

</pre>

<p>Email result: <?php var_dump($result) ?></p>