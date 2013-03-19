<?php
/**
 * Result.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotoSearch
 * @package     MphpFlickrPhotoSearch
 * @subpackage  MphpFlickrPhotoSearch\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotoSearch\Result;

/**
 * Result
 *
 * @category    MphpFlickrPhotoSearch
 * @package     MphpFlickrPhotoSearch
 * @subpackage  MphpFlickrPhotoSearch\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class Result extends \MphpFlickrBase\Result\AbstractResult
{

    /**
     * 
     * @param \MphpFlickrPhotoSearch\Adapter\Interfaces\Result\ResultInterface $adapter
     */
    public function setAdapter(\MphpFlickrPhotoSearch\Adapter\Interfaces\Result\ResultInterface $adapter) 
    {
        parent::setAdapter($adapter);
        return $this;
    }
    
    public function getId()
    {
        return $this->getAdapter()->getId();
    }

    public function getOwnerNsid()
    {
        return $this->getAdapter()->getOwnerNsid();
    }

    public function getSecret()
    {
        return $this->getAdapter()->getSecret();
    }

    public function getServer()
    {
        return $this->getAdapter()->getServer();
    }

    public function getFarm()
    {
        return $this->getAdapter()->getFarm();
    }

    public function getTitle()
    {
        return $this->getAdapter()->getTitle();
    }

    public function getIsPublic()
    {
        return $this->getAdapter()->getIsPublic();
    }

    public function getIsFriend()
    {
        return $this->getAdapter()->getIsFriend();
    }

    public function getIsFamily()
    {
        return $this->getAdapter()->getIsFamily();
    }

    public function getLicense()
    {
        return $this->getAdapter()->getLicense();
    }

    public function getDateUpload()
    {
        return $this->getAdapter()->getDateUpload();
    }

    public function getDateTaken()
    {
        return $this->getAdapter()->getDateTaken();
    }

    public function getDateTakenGranularity()
    {
        return $this->getAdapter()->getDateTakenGranularity();
    }

    public function getOwnerName()
    {
        return $this->getAdapter()->getOwnerName();
    }

    public function getIconServer()
    {
        return $this->getAdapter()->getIconServer();
    }

    public function getIconFarm()
    {
        return $this->getAdapter()->getIconFarm();
    }

    public function getOriginalSecret()
    {
        return $this->getAdapter()->getOriginalSecret();
    }

    public function getOriginalFormat()
    {
        return $this->getAdapter()->getOriginalFormat();
    }

    public function getLastUpdate()
    {
        return $this->getAdapter()->getLastUpdate();
    }

    public function getLatitude()
    {
        return $this->getAdapter()->getLatitude();
    }

    public function getLongitude()
    {
        return $this->getAdapter()->getLongitude();
    }

    public function getAccuracy()
    {
        return $this->getAdapter()->getAccuracy();
    }

    public function getContext()
    {
        return $this->getAdapter()->getContext();
    }

    public function getTags()
    {
        return $this->getAdapter()->getTags();
    }

    public function getMachineTags()
    {
        return $this->getAdapter()->getMachineTags();
    }

    public function getOWidth()
    {
        return $this->getAdapter()->getOWidth();
    }

    public function getOHeight()
    {
        return $this->getAdapter()->getOHeight();
    }

    public function getViews()
    {
        return $this->getAdapter()->getViews();
    }

    public function getMedia()
    {
        return $this->getAdapter()->getMedia();
    }

    public function getMediaStatus()
    {
        return $this->getAdapter()->getMediaStatus();
    }

    public function getPathAlias()
    {
        return $this->getAdapter()->getPathAlias();
    }

    public function getUrlSq()
    {
        return $this->getAdapter()->getUrlSq();
    }

    public function getHeightSq()
    {
        return $this->getAdapter()->getHeightSq();
    }

    public function getWidthSq()
    {
        return $this->getAdapter()->getWidthSq();
    }

    public function getUrlT()
    {
        return $this->getAdapter()->getUrlT();
    }

    public function getHeightT()
    {
        return $this->getAdapter()->getHeightT();
    }

    public function getWidthT()
    {
        return $this->getAdapter()->getWidthT();
    }

    public function getUrlS()
    {
        return $this->getAdapter()->getUrlS();
    }

    public function getHeightS()
    {
        return $this->getAdapter()->getHeightS();
    }

    public function getWidthS()
    {
        return $this->getAdapter()->getWidthS();
    }

    public function getUrlQ()
    {
        return $this->getAdapter()->getUrlQ();
    }

    public function getHeightQ()
    {
        return $this->getAdapter()->getHeightQ();
    }

    public function getWidthQ()
    {
        return $this->getAdapter()->getWidthQ();
    }

    public function getUrlM()
    {
        return $this->getAdapter()->getUrlM();
    }

    public function getHeightM()
    {
        return $this->getAdapter()->getHeightM();
    }

    public function getWidthM()
    {
        return $this->getAdapter()->getWidthM();
    }

    public function getUrlN()
    {
        return $this->getAdapter()->getUrlN();
    }

    public function getHeightN()
    {
        return $this->getAdapter()->getHeightN();
    }

    public function getWidthN()
    {
        return $this->getAdapter()->getWidthN();
    }

    public function getUrlZ()
    {
        return $this->getAdapter()->getUrlZ();
    }

    public function getHeightZ()
    {
        return $this->getAdapter()->getHeightZ();
    }

    public function getWidthZ()
    {
        return $this->getAdapter()->getWidthZ();
    }

    public function getUrlC()
    {
        return $this->getAdapter()->getUrlC();
    }

    public function getHeightC()
    {
        return $this->getAdapter()->getHeightC();
    }

    public function getWidthC()
    {
        return $this->getAdapter()->getWidthC();
    }

    public function getUrlO()
    {
        return $this->getAdapter()->getUrlO();
    }

    public function getHeightO()
    {
        return $this->getAdapter()->getHeightO();
    }

    public function getWidthO()
    {
        return $this->getAdapter()->getWidthO();
    }

    
}