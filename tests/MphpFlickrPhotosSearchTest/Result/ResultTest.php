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

    public function testGetHeightC()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getHeightC(), $result->getHeightC());
        $this->assertInternalType('integer', $result->getHeightC());
    }

    public function testGetHeightM()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getHeightM(), $result->getHeightM());
        $this->assertInternalType('integer', $result->getHeightM());
    }

    public function testGetHeightN()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getHeightN(), $result->getHeightN());
        $this->assertInternalType('integer', $result->getHeightN());
    }

    public function testGetHeightO()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getHeightO(), $result->getHeightO());
        $this->assertInternalType('integer', $result->getHeightO());
    }

    public function testGetHeightQ()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getHeightQ(), $result->getHeightQ());
        $this->assertInternalType('integer', $result->getHeightQ());
    }

    public function testGetHeightS()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getHeightS(), $result->getHeightS());
        $this->assertInternalType('integer', $result->getHeightS());
    }

    public function testGetHeightSq()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getHeightSq(), $result->getHeightSq());
        $this->assertInternalType('integer', $result->getHeightSq());
    }

    public function testGetHeightT()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getHeightT(), $result->getHeightT());
        $this->assertInternalType('integer', $result->getHeightT());
    }

    public function testGetHeightZ()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getHeightZ(), $result->getHeightZ());
        $this->assertInternalType('integer', $result->getHeightZ());
    }



    public function testGetUrlC()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getUrlC(), $result->getUrlC());
    }

    public function testGetUrlM()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getUrlM(), $result->getUrlM());
    }
    
    public function testGetUrlN()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getUrlN(), $result->getUrlN());
    }

    public function testGetUrlO()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getUrlO(), $result->getUrlO());
    }

    public function testGetUrlQ()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getUrlQ(), $result->getUrlQ());
    }

    public function testGetUrlS()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getUrlS(), $result->getUrlS());
    }

    public function testGetUrlSq()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getUrlSq(), $result->getUrlSq());
    }

    public function testGetUrlT()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getUrlT(), $result->getUrlT());
    }

    public function testGetUrlZ()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getUrlZ(), $result->getUrlZ());
    }


    public function testGetWidthC()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getWidthC(), $result->getWidthC());
    }

    public function testGetWidthM()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getWidthM(), $result->getWidthM());
    }

    public function testGetWidthN()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getWidthN(), $result->getWidthN());
    }

    public function testGetWidthO()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getWidthO(), $result->getWidthO());
    }

    public function testGetWidthQ()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getWidthQ(), $result->getWidthQ());
    }
    public function testGetWidthS()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getWidthS(), $result->getWidthS());
    }

    public function testGetWidthSq()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getWidthSq(), $result->getWidthSq());
    }

    public function testGetWidthT()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getWidthT(), $result->getWidthT());
    }

    public function testGetWidthZ()
    {
        $adapter = $this->getAdapter();
        $result = new \MphpFlickrPhotosSearch\Result\Result($adapter);
        $this->assertEquals($adapter->getWidthZ(), $result->getWidthZ());
    }



    protected function getAdapter()
    {
        return new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getResults(), $this->getParameters());
    }

    protected function getResults()
    {
        return '<photo
            id="8571629809"
            owner="53984565@N00"
            secret="2193875fb3"
            server="8525"
            farm="9"
            title=""
            ispublic="1"
            isfriend="0"
            isfamily="0"
            license="4"
            dateupload="1363716120"
            datetaken="2013-03-16 06:55:32"
            datetakengranularity="0"
            ownername="jvoves"
            iconserver="3"
            iconfarm="1"
            originalsecret="94250239e6"
            originalformat="jpg"
            lastupdate="1363757226"
            latitude="34.129008"
            longitude="-118.314803"
            accuracy="16"
            context="0"
            place_id="7Z5HMmpTVr4VzDpD"
            woeid="2442047"
            geo_is_family="0"
            geo_is_friend="0"
            geo_is_contact="0"
            geo_is_public="1"
            tags="metallica sunsetranch honk4metallica"
            o_width="3930"
            o_height="2615"
            views="27"
            media="photo"
            media_status="ready"
            pathalias="jvoves"
            url_sq="http://farm9.staticflickr.com/8525/8571629809_2193875fb3_s.jpg"
            height_sq="75"
            width_sq="75"
            url_t="http://farm9.staticflickr.com/8525/8571629809_2193875fb3_t.jpg"
            height_t="67"
            width_t="100"
            url_s="http://farm9.staticflickr.com/8525/8571629809_2193875fb3_m.jpg" height_s="160" width_s="240" url_q="http://farm9.staticflickr.com/8525/8571629809_2193875fb3_q.jpg" height_q="150" width_q="150" url_m="http://farm9.staticflickr.com/8525/8571629809_2193875fb3.jpg" height_m="333" width_m="500" url_n="http://farm9.staticflickr.com/8525/8571629809_2193875fb3_n.jpg" height_n="213" width_n="320" url_z="http://farm9.staticflickr.com/8525/8571629809_2193875fb3_z.jpg" height_z="426" width_z="640" url_c="http://farm9.staticflickr.com/8525/8571629809_2193875fb3_c.jpg" height_c="532" width_c="800" url_o="http://farm9.staticflickr.com/8525/8571629809_94250239e6_o.jpg" height_o="2615" width_o="3930">
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