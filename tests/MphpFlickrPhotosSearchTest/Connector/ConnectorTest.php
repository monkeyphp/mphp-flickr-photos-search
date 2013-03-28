<?php
/**
 * ConnectorTest.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosSearchTest
 * @package     MphpFlickrPhotosSearchTest
 * @subpackage  MphpFlickrPhotosSearchTest\Connector
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosSearchTest\Connector;

use PHPUnit_Framework_TestCase;

/**
 * ConnectorTest
 *
 * @category    MphpFlickrPhotosSearchTest
 * @package     MphpFlickrPhotosSearchTest
 * @subpackage  MphpFlickrPhotosSearchTest\Connector
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ConnectorTest extends PHPUnit_Framework_TestCase
{

    public function test__construct()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosSearch\Connector\Connector($apiKey);

        $parameters = array('method' => 'flickr.photos.search', 'tags' => 'metallica');

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $this->assertSame($parameters + array('api_key' => $apiKey), $reflectionMethod->invoke($connector, $parameters));
    }

}