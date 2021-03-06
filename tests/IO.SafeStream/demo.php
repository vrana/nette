<h1>Nette\IO\SafeStream demo</h1>

<pre>
<?php


require_once '../../Nette/loader.php';
SafeStream::register();


// actually it creates temporary file
$handle = fopen('safe://myfile.txt', 'x');
fwrite($handle, 'atomic and safe');
// and now rename it
fclose($handle);

// removes file thread-safe way
unlink('safe://myfile.txt');

// this is not thread safe - don't relay on returned value
$ok = is_file('safe://SafeStream.php');
