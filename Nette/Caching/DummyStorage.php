<?php

/**
 * Nette Framework
 *
 * Copyright (c) 2004, 2009 David Grudl (http://davidgrudl.com)
 *
 * This source file is subject to the "Nette license" that is bundled
 * with this package in the file license.txt.
 *
 * For more information please see http://nettephp.com
 *
 * @copyright  Copyright (c) 2004, 2009 David Grudl
 * @license    http://nettephp.com/license  Nette license
 * @link       http://nettephp.com
 * @category   Nette
 * @package    Nette\Caching
 */

/*namespace Nette\Caching;*/



require_once dirname(__FILE__) . '/../Object.php';

require_once dirname(__FILE__) . '/../Caching/ICacheStorage.php';



/**
 * Cache dummy storage.
 *
 * @author     David Grudl
 * @copyright  Copyright (c) 2004, 2009 David Grudl
 * @package    Nette\Caching
 */
class DummyStorage extends /*Nette\*/Object implements ICacheStorage
{

	/**
	 * Read from cache.
	 * @param  string key
	 * @return mixed|NULL
	 */
	public function read($key)
	{
		return NULL;
	}



	/**
	 * Writes item into the cache.
	 * @param  string key
	 * @param  mixed  data
	 * @param  array  dependencies
	 * @return bool  TRUE if no problem
	 */
	public function write($key, $data, array $dp)
	{
		return TRUE;
	}



	/**
	 * Removes item from the cache.
	 * @param  string key
	 * @return bool  TRUE if no problem
	 */
	public function remove($key)
	{
		return TRUE;
	}



	/**
	 * Removes items from the cache by conditions & garbage collector.
	 * @param  array  conditions
	 * @return bool  TRUE if no problem
	 */
	public function clean(array $conds)
	{
		return TRUE;
	}

}
