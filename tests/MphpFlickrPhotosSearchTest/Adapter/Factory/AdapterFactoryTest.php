<?php
/**
 * AdapterFactoryTest.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosSearchTest
 * @package    MphpFlickrPhotosSearchTest
 * @subpackage MphpFlickrPhotosSearchTest\Adapter\Factory
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosSearchTest\Adapter\Factory;

use MphpFlickrPhotosSearch\Adapter\Factory\AdapterFactory;

/**
 * AdapterFactoryTest
 *
 * @category   MphpFlickrPhotosSearchTest
 * @package    MphpFlickrPhotosSearchTest
 * @subpackage MphpFlickrPhotosSearchTest\Adapter\Factory
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class AdapterFactoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance of AdapterFactory
     */
    public function test__construct()
    {
        $adapterFactory = new AdapterFactory();
        $this->assertInstanceOf('MphpFlickrBase\Adapter\Factory\AdapterFactoryInterface', $adapterFactory);
    }

    /**
     * Return the default format string
     */
    public function testGetDefaultFormat()
    {
        $adapterFactory = new AdapterFactory();
        $this->assertInternalType('string', $adapterFactory->getDefaultFormat());
    }

    /**
     * Return an array of available formats
     */
    public function testDefaultFormats()
    {
        $adapterFactory = new AdapterFactory();
        $this->assertInternalType('array', $adapterFactory->getFormats());
    }

    /**
     * Test that we can make an adapter from the AdapterFactory
     */
    public function testMakeAdapter()
    {
        $adapterFactory = new AdapterFactory();

        $format = 'rest';
        $results = $parameters = array();

        $adapter = $adapterFactory->makeAdapter($format, $results, $parameters);

        $this->assertInstanceOf('MphpFlickrPhotosSearch\Adapter\Xml\ResultSet\PhotosResultSetAdapter', $adapter);
    }

    /**
     * @expectedException MphpFlickrBase\Exception\UnknownResponseFormatException
     */
    public function testMakeAdapterThrowsException()
    {
        $adapterFactory = new AdapterFactory();

        $format = 'foo';
        $results = $parameters = array();

        $adapter = $adapterFactory->makeAdapter($format, $results, $parameters);
    }

}