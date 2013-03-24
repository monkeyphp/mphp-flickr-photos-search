<?php
/**
 * ResultAdapterTest.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosSearchTest
 * @package     MphpFlickrPhotosSearchTest
 * @subpackage  MphpFlickrPhotosSearchTest\Adapter\Xml\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosSearchTest\Adapter\Xml\Result;

/**
 * ResultAdapterTest
 *
 * @category    MphpFlickrPhotosSearchTest
 * @package     MphpFlickrPhotosSearchTest
 * @subpackage  MphpFlickrPhotosSearchTest\Adapter\Xml\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultAdapterTest extends \PHPUnit_Framework_TestCase
{

    protected function getXml()
    {
        return '<photo id="8577607869" owner="65997773@N07" secret="dfbb2ebca0" server="8091" farm="9" title="made of iron" ispublic="1" isfriend="0" isfamily="0" license="0" dateupload="1363900565" datetaken="2013-03-20 20:17:58" datetakengranularity="0" ownername="machinehater1" iconserver="6147" iconfarm="7" originalsecret="c8b0965672" originalformat="jpg" lastupdate="1363956285" latitude="0" longitude="0" accuracy="99" context="0" tags="camera fiction portrait selfportrait man robert up self canon eos diy fight war iron industrial factory glow display head cut south fear shortcut helmet hologram machine super jr ironman science full suit weapon short frame metallica hero superhero scifi sciencefiction illustrator held marvel combat hud villain tamron alto speedlight ff tyrol transparence südtirol manfrotto anzug 6d waffe downey adige holo suedtirol warmachine transparenz kampf staticx speedlite holow superheld hologramm bösewicht strobist sybreed" o_width="1443" o_height="962" views="133" media="photo" media_status="ready" pathalias="machinehater" url_sq="http://farm9.staticflickr.com/8091/8577607869_dfbb2ebca0_s.jpg" height_sq="75" width_sq="75" url_t="http://farm9.staticflickr.com/8091/8577607869_dfbb2ebca0_t.jpg" height_t="67" width_t="100" url_s="http://farm9.staticflickr.com/8091/8577607869_dfbb2ebca0_m.jpg" height_s="160" width_s="240" url_q="http://farm9.staticflickr.com/8091/8577607869_dfbb2ebca0_q.jpg" height_q="150" width_q="150" url_m="http://farm9.staticflickr.com/8091/8577607869_dfbb2ebca0.jpg" height_m="333" width_m="500" url_n="http://farm9.staticflickr.com/8091/8577607869_dfbb2ebca0_n.jpg" height_n="213" width_n="320" url_z="http://farm9.staticflickr.com/8091/8577607869_dfbb2ebca0_z.jpg" height_z="427" width_z="640" url_c="http://farm9.staticflickr.com/8091/8577607869_dfbb2ebca0_c.jpg" height_c="534" width_c="800" url_o="http://farm9.staticflickr.com/8091/8577607869_c8b0965672_o.jpg" height_o="962" width_o="1443">
		<description>My favourite scenes of the Ironman-Movies are the in-helmet-sequences (hud). So i had to try it on my self with photshop and illustrator. In all the hours of work i had some help from Sybreed, Static-x and Fear Factory</description>
	</photo>';
    }


    /**
     * Test that we can construct an instance of ResultAdapter
     */
    public function test__construct()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());

        $this->assertSame($resultAdapter->getResults(), $this->getXml());
    }

    /**
     * Test that we can get the accuracy value from the ResultAdapter
     */
    public function testGetAccuracy()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('99', $resultAdapter->getAccuracy());
    }

    /**
     * Test that we can retrieve the context value from the ResultAdapter
     */
    public function testGetContext()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('0', $resultAdapter->getContext());
    }

    public function testGetDateTaken()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('2013-03-20 20:17:58', $resultAdapter->getDateTaken());
    }

    public function testGetDateTakenGranularity()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('0', $resultAdapter->getDateTakenGranularity());
    }

    public function testGetDateUpload()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('1363900565', $resultAdapter->getDateUpload());
    }

    public function testGetDescription()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('My favourite scenes of the Ironman-Movies are the in-helmet-sequences (hud). So i had to try it on my self with photshop and illustrator. In all the hours of work i had some help from Sybreed, Static-x and Fear Factory', $resultAdapter->getDescription());
    }

    public function testGetFarm()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('9', $resultAdapter->getFarm());
    }

    public function testGetHeightC()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('534', $resultAdapter->getHeightC());
    }

    public function testGetHeightM()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('333', $resultAdapter->getHeightM());
    }

    public function testGetHeightN()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('213', $resultAdapter->getHeightN());
    }

    public function testGetHeightO()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('962', $resultAdapter->getHeightO());
    }

    public function testGetHeightQ()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('150', $resultAdapter->getHeightQ());
    }

    public function testGetHeightS()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('160', $resultAdapter->getHeightS());
    }

    public function testGetHeightSq()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('75', $resultAdapter->getHeightSq());
    }

    /**
     * Test that we can retrieve the height t value
     */
    public function testGetHeightT()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('67', $resultAdapter->getHeightT());
    }

    /**
     * Test that we can retrieve the height z value
     */
    public function testGetHeightZ()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('427', $resultAdapter->getHeightZ());
    }

    /**
     * Test that we can retrieve the icon farm
     */
    public function testGetIconFarm()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('7', $resultAdapter->getIconFarm());
    }

    /**
     * Test the we can retrieve the icon server value
     */
    public function testGetIconServer()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('6147', $resultAdapter->getIconServer());
    }

    public function testGetId()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('8577607869', $resultAdapter->getId());
    }

    public function testGetLastUpdate()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('1363956285', $resultAdapter->getLastUpdate());
    }

    public function testGetLatitude()
    {
        $resultAdapter = new \MphpFlickrPhotosSearch\Adapter\Xml\Result\ResultAdapter($this->getXml(), array());
        $this->assertSame('0', $resultAdapter->getLatitude());
    }
}