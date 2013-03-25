<?php
/**
 * ResultSetTest.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosSearchTest
 * @package     MphpFlickrPhotosSearchTest
 * @subpackage  MphpFlickrPhotosSearchTest\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosSearchTest\ResultSet;

use PHPUnit_Framework_TestCase;

/**
 * Description of ResultSetTest
 *
 * @category    MphpFlickrPhotosSearchTest
 * @package     MphpFlickrPhotosSearchTest
 * @subpackage  MphpFlickrPhotosSearchTest\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultSetTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test that we can construct an instance of a ResultSet
     */
    public function test__construct()
    {
        $resultSetAdapter = $this->getResultSetAdapter();
        $resultSet = new \MphpFlickrPhotosSearch\ResultSet\ResultSet($resultSetAdapter);
        $this->assertSame($resultSetAdapter, $resultSet->getAdapter());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test__constructInvalidAdapterThrowsInvalidArgumentException()
    {
        $mock = $this->getMock('MphpFlickrBase\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface');
        $resultSet = new \MphpFlickrPhotosSearch\ResultSet\ResultSet($mock);
    }


    public function testIterate()
    {
        $resultSetAdapter = $this->getResultSetAdapter();
        $resultSet = new \MphpFlickrPhotosSearch\ResultSet\ResultSet($resultSetAdapter);

        foreach ($resultSet as $result) {
            $this->assertInstanceOf('MphpFlickrPhotosSearch\Result\Result', $result);
        }
    }

    public function testGetPage()
    {
        $resultSetAdapter = $this->getResultSetAdapter();
        $resultSet = new \MphpFlickrPhotosSearch\ResultSet\ResultSet($resultSetAdapter);
        $this->assertEquals($resultSetAdapter->getPage(), $resultSet->getPage());
        $this->assertInternalType('integer', $resultSet->getPage());
    }

    public function testGetPages()
    {
        $resultSetAdapter = $this->getResultSetAdapter();
        $resultSet = new \MphpFlickrPhotosSearch\ResultSet\ResultSet($resultSetAdapter);
        $this->assertEquals($resultSetAdapter->getPages(), $resultSet->getPages());
        $this->assertInternalType('integer', $resultSet->getPages());
    }

    public function testGetPerPage()
    {
        $resultSetAdapter = $this->getResultSetAdapter();
        $resultSet = new \MphpFlickrPhotosSearch\ResultSet\ResultSet($resultSetAdapter);
        $this->assertEquals($resultSetAdapter->getPerPage(), $resultSet->getPerPage());
        $this->assertInternalType('integer', $resultSet->getPerPage());
    }

    public function testGetTotal()
    {
        $resultSetAdapter = $this->getResultSetAdapter();
        $resultSet = new \MphpFlickrPhotosSearch\ResultSet\ResultSet($resultSetAdapter);
        $this->assertEquals($resultSetAdapter->getTotal(), $resultSet->getTotal());
        $this->assertInternalType('integer', $resultSet->getTotal());
    }

    /**
     * Helper method to create a ResultSetAdapter
     */
    protected function getResultSetAdapter()
    {
        $resultSetAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\ResultSet\ResultSetAdapter($this->getResults(), $this->getParameters());
        return $resultSetAdapter;
    }

    /**
     * Helper method
     *
     * @return array
     */
    protected function getParameters()
    {
        return array(
            'method'   => 'flickr.photos.search',
            'per_page' => 100,
            'page'     => 1,
            'tags'     => array('metallica'),
            'extras'   => array('description','license','date_upload','date_taken','owner_name','icon_server','original_format',
                'last_update','geo','tags','o_dims','views','media','path_alias','url_sq','url_t','url_s','url_q','url_m',
                'url_n','url_z','url_c','url_o')
        );
    }

    /**
     * Helper method to load results from file
     *
     * @return string
     */
    protected function getResults()
    {
        $results = file_get_contents('data/resultset.xml');
        return $results;
    }

}