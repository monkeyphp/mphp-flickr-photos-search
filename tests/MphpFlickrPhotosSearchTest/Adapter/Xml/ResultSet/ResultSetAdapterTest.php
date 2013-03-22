<?php
/**
 * ResultSetAdapterTest.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosSearchTest
 * @package     MphpFlickrPhotosSearchTest
 * @subpackage  MphpFlickrPhotosSearchTest\Adapter\Xml\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosSearchTest\Adapter\Xml\ResultSet;

/**
 * ResultSetAdapterTest
 *
 * @category    MphpFlickrPhotosSearchTest
 * @package     MphpFlickrPhotosSearchTest
 * @subpackage  MphpFlickrPhotosSearchTest\Adapter\Xml\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultSetAdapterTest extends \PHPUnit_Framework_TestCase
{
    
    public function test_construct()
    {
        $adapter = new \MphpFlickrPhotosSearch\Adapter\Xml\ResultSet\ResultSetAdapter($this->getResults(), $this->getParameters());
    }
    
    public function testGetPerPage()
    {
        $adapter = new \MphpFlickrPhotosSearch\Adapter\Xml\ResultSet\ResultSetAdapter($this->getResults(), $this->getParameters());
        $this->assertSame('100', $adapter->getPerPage());
    }
    
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
    
    protected function getResults()
    {
        $results = file_get_contents('data/resultset.xml');
        return $results;
    }
}