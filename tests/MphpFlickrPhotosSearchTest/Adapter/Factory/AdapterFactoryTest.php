<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace MphpFlickrPhotosSearchTest\Adapter\Factory;
/**
 * Description of AdapterFactoryTest
 *
 * @author David White [monkeyphp] <david@monkeyphp.com>
 */
class AdapterFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function test__construct()
    {
        $adapterFactory = new \MphpFlickrPhotosSearch\Adapter\Factory\AdapterFactory();
        $this->assertInstanceOf('MphpFlickrBase\Adapter\Factory\AdapterFactoryInterface', $adapterFactory);
    }

    public function testGetDefaultFormat()
    {
        $adapterFactory = new \MphpFlickrPhotosSearch\Adapter\Factory\AdapterFactory();
        $this->assertInternalType('string', $adapterFactory->getDefaultFormat());
    }

    public function testDefaultFormats()
    {
        $adapterFactory = new \MphpFlickrPhotosSearch\Adapter\Factory\AdapterFactory();
        $this->assertInternalType('array', $adapterFactory->getFormats());
    }

    public function testMakeAdapter()
    {
        $adapterFactory = new \MphpFlickrPhotosSearch\Adapter\Factory\AdapterFactory();

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
        $adapterFactory = new \MphpFlickrPhotosSearch\Adapter\Factory\AdapterFactory();

        $format = 'foo';
        $results = $parameters = array();

        $adapter = $adapterFactory->makeAdapter($format, $results, $parameters);
    }

}