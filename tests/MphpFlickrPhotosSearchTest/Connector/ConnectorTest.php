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

        $parameters = array('tags' => 'metallica, metal, thrash, music');

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $preparedParameters = $reflectionMethod->invoke($connector, $parameters);
        $this->assertInternalType('array', $preparedParameters);
    }

    /**
     * @expectedException \MphpFlickrBase\Exception\InvalidParameterException
     */
    public function testInvalidTagsThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosSearch\Connector\Connector($apiKey);

        $parameters = array('tags' => 'metal%%ica, metal, thrash&, musi#');

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $reflectionMethod->invoke($connector, $parameters);
    }


    /**
     * @expectedException \MphpFlickrBase\Exception\InvalidParameterException
     */
    public function testInvalidSortThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosSearch\Connector\Connector($apiKey);

        $parameters = array('sort' => 'upside-down');

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $reflectionMethod->invoke($connector, $parameters);
    }

    /**
     * @expectedException \MphpFlickrBase\Exception\InvalidParameterException
     */
    public function testInvalidInGalleryThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosSearch\Connector\Connector($apiKey);

        $parameters = array('in_gallery' => 'yes');

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $reflectionMethod->invoke($connector, $parameters);
    }

    /**
     * @expectedException \MphpFlickrBase\Exception\InvalidParameterException
     */
    public function testInvalidInGettyThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosSearch\Connector\Connector($apiKey);

        $parameters = array('in_getty' => 'yes');

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $reflectionMethod->invoke($connector, $parameters);
    }


    /**
     * @expectedException \MphpFlickrBase\Exception\InvalidParameterException
     */
    public function testInvalidIsCommonsThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosSearch\Connector\Connector($apiKey);

        $parameters = array('is_commons' => 'yes');

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $reflectionMethod->invoke($connector, $parameters);
    }

    /**
     * @expectedException \MphpFlickrBase\Exception\InvalidParameterException
     */
    public function testInvalidSafeSearchThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosSearch\Connector\Connector($apiKey);

        $parameters = array('safe_search' => 'safe');

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $reflectionMethod->invoke($connector, $parameters);
    }


    /**
     * @expectedException \MphpFlickrBase\Exception\InvalidParameterException
     */
    public function testInvalidContentTypeThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosSearch\Connector\Connector($apiKey);

        $parameters = array('content_type' => 'photos');

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $reflectionMethod->invoke($connector, $parameters);
    }

    /**
     * @expectedException \MphpFlickrBase\Exception\InvalidParameterException
     */
    public function testInvalidMediaThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosSearch\Connector\Connector($apiKey);

        $parameters = array('media' => 'foo');

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $reflectionMethod->invoke($connector, $parameters);
    }

    /**
     * @expectedException \MphpFlickrBase\Exception\InvalidParameterException
     */
    public function testInvalidPageThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosSearch\Connector\Connector($apiKey);

        $parameters = array('page' => 'seventy-two');

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $reflectionMethod->invoke($connector, $parameters);
    }

    /**
     * @expectedException \MphpFlickrBase\Exception\InvalidParameterException
     */
    public function testInvalidPerPageThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosSearch\Connector\Connector($apiKey);

        $parameters = array('per_page' => 999);

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $reflectionMethod->invoke($connector, $parameters);
    }

    /**
     * @expectedException \MphpFlickrBase\Exception\InvalidParameterException
     */
    public function testInvalidExtrasThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosSearch\Connector\Connector($apiKey);

        $parameters = array('extras' => 'eggs,ham');

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('prepareParameters');
        $reflectionMethod->setAccessible(true);

        $reflectionMethod->invoke($connector, $parameters);
    }

    /**
     *
     */
    public function testValidateExtrasThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosSearch\Connector\Connector($apiKey);

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('validateExtras');
        $reflectionMethod->setAccessible(true);

        $this->assertFalse($reflectionMethod->invoke($connector, new \stdClass()));
    }

    public function testValidateTagsThrowsInvalidParameterException()
    {
        $apiKey = '0123456789';
        $connector = new \MphpFlickrPhotosSearch\Connector\Connector($apiKey);

        $reflectionObject = new \ReflectionObject($connector);
        $reflectionMethod = $reflectionObject->getMethod('validateTags');
        $reflectionMethod->setAccessible(true);

        $this->assertFalse($reflectionMethod->invoke($connector, new \stdClass()));
    }
}