<h1>Nette\Environment services test</h1>

<pre>
<?php

require_once '../../Nette/loader.php';

/*use Nette\Debug;*/
/*use Nette\Environment;*/

echo "Environment::getHttpResponse\n";
$obj = Environment::getHttpResponse();
Debug::dump($obj->class);


echo "Environment::getApplication\n";
$obj = Environment::getApplication();
Debug::dump($obj->class);


echo "Environment::getCache(...)\n";
Environment::setVariable('tempDir', __FILE__);
$obj = Environment::getCache('my');
Debug::dump($obj->class);

/* in PHP 5.3
echo "Environment::getXyz(...)\n";
Environment::setServiceAlias('Nette\Web\IUser', 'xyz');
$obj = Environment::getXyz();
Debug::dump($obj->class);
*/