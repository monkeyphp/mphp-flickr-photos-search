<?php
/**
 * Result.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosSearch
 * @package     MphpFlickrPhotosSearch
 * @subpackage  MphpFlickrPhotosSearch\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosSearch\Result;

/**
 * Result
 *
 * @category    MphpFlickrPhotosSearch
 * @package     MphpFlickrPhotosSearch
 * @subpackage  MphpFlickrPhotosSearch\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class Result extends \MphpFlickrBase\Result\AbstractResult
{

    /**
     *
     * @param \MphpFlickrBase\Adapter\Interfaces\Result\ResultAdapterInterface $adapter
     *
     * @throws \InvalidArgumentException
     * @return type
     */
    public function setAdapter(\MphpFlickrBase\Adapter\Interfaces\Result\ResultAdapterInterface $adapter)
    {
        if ($adapter instanceof \MphpFlickrPhotosSearch\Adapter\Interfaces\Result\ResultAdapterInterface) {
            return parent::setAdapter($adapter);
        }
        throw new \InvalidArgumentException('Invalid adapter supplied');
    }

    /**
     *
     * @return string
     */
    public function getAccuracy()
    {
        return $this->getAdapter()->getAccuracy();
    }

    /**
     *
     * @return string
     */
    public function getContext()
    {
        return $this->getAdapter()->getContext();
    }

    /**
     * Return a DateTime instance representing the date/time that the Photo
     * was taken
     *
     * The ResultAdapter should return a MySql datetime formatted string
     *
     * @return \DateTime|null
     */
    public function getDateTaken()
    {
        return ($dateTaken = $this->getAdapter()->getDateTaken())
            ? new \DateTime($dateTaken)
            : null;
    }

    /**
     *
     * @return string|null
     */
    public function getDateTakenGranularity()
    {
        return $this->getAdapter()->getDateTakenGranularity();
    }

    /**
     * Return a DateTime instance representing the date the photo was uploaded
     * to Flickr
     *
     * ResultAdapter::getDateUpload() should return a UNIX timestamp
     *
     * @return \DateTime|null
     */
    public function getDateUpload()
    {
        return ($timestamp = $this->getAdapter()->getDateUpload())
            ? new \DateTime("@$timestamp")
            : null;
    }

    /**
     * Return the description value
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->getAdapter()->getDescription();
    }

    /**
     *
     * @return string|null
     */
    public function getFarm()
    {
        return $this->getAdapter()->getFarm();
    }

    /**
     * Reurn an integer representing the height c value
     *
     * ResultAdapter::getHeightC() should return a numeric string so before
     * returning, we convert it to an integer
     *
     * @return integer|null
     */
    public function getHeightC()
    {
        return ($heightC = $this->getAdapter()->getHeightC())
            ? (integer)$heightC
            : null;
    }

    /**
     *
     * @return integer|null
     */
    public function getHeightM()
    {
        return ($heightM = $this->getAdapter()->getHeightM())
            ? (integer)$heightM
            : null;
    }

    /**
     *
     * @return integer|null
     */
    public function getHeightN()
    {
        return ($heightN = $this->getAdapter()->getHeightN())
            ? (integer)$heightN
            : null;
    }

    /**
     *
     * @return integer|null
     */
    public function getHeightO()
    {
        return ($heightO = $this->getAdapter()->getHeightO())
            ? (integer)$heightO
            : null;
    }

    /**
     *
     * @return integer|null
     */
    public function getHeightQ()
    {
        return ($heightQ = $this->getAdapter()->getHeightQ())
            ? (integer)$heightQ
            : null;
    }

    /**
     *
     * @return integer|null
     */
    public function getHeightS()
    {
        return ($heightS = $this->getAdapter()->getHeightS())
            ? (integer)$heightS
            : null;
    }

    /**
     *
     * @return integer|null
     */
    public function getHeightSq()
    {
        return ($heightSq = $this->getAdapter()->getHeightSq())
            ? (integer)$heightSq
            : null;
    }

    /**
     *
     * @return integer|null
     */
    public function getHeightT()
    {
        return ($heightT = $this->getAdapter()->getHeightT())
            ? (integer)$heightT
            : null;
    }

    /**
     *
     * @return integer|null
     */
    public function getHeightZ()
    {
        return ($heightZ = $this->getAdapter()->getHeightZ())
            ? (integer)$heightZ
            : null;
    }

    /**
     *
     * @return string|null
     */
    public function getIconFarm()
    {
        return $this->getAdapter()->getIconFarm();
    }

    /**
     *
     * @return string|null
     */
    public function getIconServer()
    {
        return $this->getAdapter()->getIconServer();
    }

    /**
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->getAdapter()->getId();
    }

    /**
     *
     * @return \DateTime|null
     */
    public function getLastUpdate()
    {
        return ($timestamp = $this->getAdapter()->getLastUpdate())
            ? new \DateTime("@$timestamp")
            : null;
    }

    /**
     *
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->getAdapter()->getLatitude();
    }

    /**
     *
     * @return string|null
     */
    public function getLicense()
    {
        return $this->getAdapter()->getLicense();
    }

    /**
     *
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->getAdapter()->getLongitude();
    }

    /**
     *
     * @return string|null
     */
    public function getMachineTags()
    {
        return $this->getAdapter()->getMachineTags();
    }

    /**
     *
     * @return string|null
     */
    public function getMedia()
    {
        return $this->getAdapter()->getMedia();
    }

    /**
     *
     * @return string|null
     */
    public function getMediaStatus()
    {
        return $this->getAdapter()->getMediaStatus();
    }

    /**
     *
     * @return integer|null
     */
    public function getOHeight()
    {
        return ($oHeight = $this->getAdapter()->getOHeight())
            ? (integer)$oHeight
            : null;
    }

    /**
     *
     * @return integer|null
     */
    public function getOWidth()
    {
        return ($oWidth = $this->getAdapter()->getOWidth())
            ? (integer)$oWidth
            : null;
    }

    /**
     *
     * @return string|null
     */
    public function getOriginalFormat()
    {
        return $this->getAdapter()->getOriginalFormat();
    }

    /**
     *
     * @return string|null
     */
    public function getOriginalSecret()
    {
        return $this->getAdapter()->getOriginalSecret();
    }

    /**
     *
     * @return string|null
     */
    public function getOwnerName()
    {
        return $this->getAdapter()->getOwnerName();
    }

    /**
     *
     * @return string|null
     */
    public function getOwnerNsid()
    {
        return $this->getAdapter()->getOwnerNsid();
    }

    /**
     *
     * @return string|null
     */
    public function getPathAlias()
    {
        return $this->getAdapter()->getPathAlias();
    }

    /**
     *
     * @return string|null
     */
    public function getSecret()
    {
        return $this->getAdapter()->getSecret();
    }

    /**
     *
     * @return string|null
     */
    public function getServer()
    {
        return $this->getAdapter()->getServer();
    }

    /**
     *
     * @return string|null
     */
    public function getTags()
    {
        return $this->getAdapter()->getTags();
    }

    /**
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->getAdapter()->getTitle();
    }

    /**
     *
     * @return string|null
     */
    public function getUrlC()
    {
        return $this->getAdapter()->getUrlC();
    }

    /**
     *
     * @return string|null
     */
    public function getUrlM()
    {
        return $this->getAdapter()->getUrlM();
    }

    /**
     *
     * @return string|null
     */
    public function getUrlN()
    {
        return $this->getAdapter()->getUrlN();
    }

    /**
     *
     * @return string|null
     */
    public function getUrlO()
    {
        return $this->getAdapter()->getUrlO();
    }

    /**
     *
     * @return string|null
     */
    public function getUrlQ()
    {
        return $this->getAdapter()->getUrlQ();
    }

    /**
     *
     * @return string|null
     */
    public function getUrlS()
    {
        return $this->getAdapter()->getUrlS();
    }

    /**
     *
     * @return string|null
     */
    public function getUrlSq()
    {
        return $this->getAdapter()->getUrlSq();
    }

    /**
     *
     * @return string|null
     */
    public function getUrlT()
    {
        return $this->getAdapter()->getUrlT();
    }

    /**
     *
     * @return string|null
     */
    public function getUrlZ()
    {
        return $this->getAdapter()->getUrlZ();
    }

    /**
     *
     * @return integer|null
     */
    public function getViews()
    {
        return $this->getAdapter()->getViews();
    }

    /**
     *
     * @return integer|null
     */
    public function getWidthC()
    {
        return $this->getAdapter()->getWidthC();
    }

    /**
     *
     * @return integer|null
     */
    public function getWidthM()
    {
        return $this->getAdapter()->getWidthM();
    }

    /**
     *
     * @return integer|null
     */
    public function getWidthN()
    {
        return $this->getAdapter()->getWidthN();
    }

    /**
     *
     * @return integer|null
     */
    public function getWidthO()
    {
        return $this->getAdapter()->getWidthO();
    }

    /**
     * @return integer|null
     */
    public function getWidthQ()
    {

    }

    /**
     *
     * @return integer|null
     */
    public function getWidthS()
    {
        return $this->getAdapter()->getWidthS();
    }

    /**
     *
     * @return integer|null
     */
    public function getWidthSq()
    {
        return $this->getAdapter()->getWidthSq();
    }

    /**
     *
     * @return integer|null
     */
    public function getWidthT()
    {
        return $this->getAdapter()->getWidthT();
    }

    /**
     *
     * @return integer|null
     */
    public function getWidthZ()
    {
        return $this->getAdapter()->getWidthZ();
    }

    /**
     *
     * @return boolean|null
     */
    public function isFamily()
    {
        return $this->getAdapter()->isFamily();
    }

    /**
     *
     * @return boolean|null
     */
    public function isFriend()
    {
        return $this->getAdapter()->isFriend();
    }

    /**
     *
     * @return boolean|null
     */
    public function isPublic()
    {
        return $this->getAdapter()->isPublic();
    }

}