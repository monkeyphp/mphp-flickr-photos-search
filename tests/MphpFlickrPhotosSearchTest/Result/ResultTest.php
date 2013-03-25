<?php
/**
 * ResultTest.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosSearchTest
 * @package     MphpFlickrPhotosSearchTest
 * @subpackage  MphpFlickrPhotosSearchTest\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosSearchTest\Result;

/**
 * ResultTest
 *
 * @category    MphpFlickrPhotosSearchTest
 * @package     MphpFlickrPhotosSearchTest
 * @subpackage  MphpFlickrPhotosSearchTest\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultTest extends \PHPUnit_Framework_TestCase
{

    public function test__construct()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertSame($adapter, $result->getAdapter());
    }

    public function testGetAccuracy()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertSame($adapter->getAccuracy(), $result->getAccuracy());
    }

    public function testGetContext()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertSame($adapter->getContext(), $result->getContext());
    }

    public function testGetId()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertSame($adapter->getId(), $result->getId());
    }

    public function testGetDateTaken()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertInstanceOf('DateTime', $result->getDateTaken());
    }

    public function testGetDateTakenGranularity()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertSame($adapter->getDateTakenGranularity(), $result->getDateTakenGranularity());
    }

    public function testGetDateUpload()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertInstanceOf('DateTime', $result->getDateUpload());
    }

    public function testGetDescription()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertSame($result->getDescription(), $adapter->getDescription());
    }

    public function testGetFarm()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertSame($adapter->getFarm(), $result->getFarm());
    }






    protected function getAdapter()
    {
        return new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
    }

    protected function getResults()
    {
        return '<photo
            id="8574985420"
            owner="83733547@N04"
            secret="ccbff068ee"
            server="8523"
            farm="9"
            title="Cores no Porto"
            ispublic="1"
            isfriend="0"
            isfamily="0"
            license="0"
            dateupload="1363785534"
            datetaken="2013-02-12 20:54:37"
            datetakengranularity="0"
            ownername="Mari Tortorella"
            iconserver="8423"
            iconfarm="9"
            lastupdate="1363785774"
            latitude="-34.672008" longitude="-54.16122" accuracy="11" context="0" place_id="0_YmuiBSWrqxRd0" woeid="380901" geo_is_family="0" geo_is_friend="0" geo_is_contact="0" geo_is_public="1" tags="sunset sea sky colors puerto uruguay la harbor boat reflex nikon ship paloma porto metallica reflexo uru navio rocha sunse d7 d7000" views="4" media="photo" media_status="ready" pathalias="maritortorella" url_sq="http://farm9.staticflickr.com/8523/8574985420_ccbff068ee_s.jpg" height_sq="75" width_sq="75" url_t="http://farm9.staticflickr.com/8523/8574985420_ccbff068ee_t.jpg" height_t="66" width_t="100" url_s="http://farm9.staticflickr.com/8523/8574985420_ccbff068ee_m.jpg" height_s="159" width_s="240" url_q="http://farm9.staticflickr.com/8523/8574985420_ccbff068ee_q.jpg" height_q="150" width_q="150" url_m="http://farm9.staticflickr.com/8523/8574985420_ccbff068ee.jpg" height_m="331" width_m="500" url_n="http://farm9.staticflickr.com/8523/8574985420_ccbff068ee_n.jpg" height_n="212" width_n="320" url_z="http://farm9.staticflickr.com/8523/8574985420_ccbff068ee_z.jpg" height_z="424" width_z="640" url_c="http://farm9.staticflickr.com/8523/8574985420_ccbff068ee_c.jpg" height_c="530" width_c="800">
		<description />
	</photo>';
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

}