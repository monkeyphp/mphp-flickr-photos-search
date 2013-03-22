<?php
/**
 * ResultAdapter.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosSearch
 * @package     MphpFlickrPhotosSearch
 * @subpackage  MphpFlickrPhotosSearch\Adapter\Xml\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosSearch\Adapter\Xml\Result;

/**
 * ResultAdapter
 *
 *
 * @category    MphpFlickrPhotosSearch
 * @package     MphpFlickrPhotosSearch
 * @subpackage  MphpFlickrPhotosSearch\Adapter\Xml\Result
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultAdapter extends \MphpFlickrBase\Adapter\Xml\Result\AbstractResultAdapter implements \MphpFlickrPhotosSearch\Adapter\Interfaces\Result\ResultAdapterInterface
{
    
    /**
     * The accuracy property of the Photo result
     *
     * @var string|null
     */
    protected $accuracy;
    
    /**
     * DOMXPath query string used to retrieve the accuracy value from the 
     * results
     * 
     * @var string
     */
    protected $accuracyQuery = '/photo/@accuracy';
    
    /**
     * The context property of the Photo result
     *
     * @var string|null
     */
    protected $context;
    
    /**
     * DOMXPath query string used to retrieve the context value from the results
     * 
     * @var string
     */
    protected $contextQuery = '/photo/@context';
    
    /**
     * The unix timestamp or MySQL date string
     *
     * @var string
     */
    protected $dateTaken;
    
    /**
     * 
     * @var string|null
     */
    protected $dateTakenGranularity;
    
    /**
     * DOMXPath query string used to retrieve the date taken granularity value
     * from the results
     * 
     * @var string
     */
    protected $dateTakenGranularityQuery = '/photo/@datetakengranularity';
    
    /**
     * DOMXPath query string used to retrieve the date taken value from the 
     * results
     * 
     * @var string
     */
    protected $dateTakenQuery = '/photo/@datetaken';
    
    /**
     * The Photo date upload either a UNIX timestamp or a MySQL date time string
     *
     * @var string
     */
    protected $dateUpload;
    
    /**
     * DOMXPath query string used to retrieve the dateupload value from 
     * the results
     * 
     * @var string
     */
    protected $dateUploadQuery = '/photo/@dateupload';
    
    /**
     * The Photo description
     *
     * @var string|null
     */
    protected $description;
    
    /**
     * DOMXPath query string used to retrieve the description value from 
     * the results
     * 
     * @var string
     */
    protected $descriptionQuery = '/photo/description';
    
    /**
     * The value of the farm
     * 
     * @var string|null
     */
    protected $farm;
    
    /**
     * DOMXPath query string used to retrieve the farm value from the results
     * 
     * @var string
     */
    protected $farmQuery = '/photo/@farm';
    
    /**
     *
     * @var string|null
     */
    protected $heightC;
    
    /**
     *
     * @var string|null
     */
    protected $heightM;
    
    /**
     *
     * @var string|null
     */
    protected $heightN;
    
    /**
     *
     * @var string|null
     */
    protected $heightO;
    
    /**
     *
     * @var string|null
     */
    protected $heightQ;
    
    /**
     *
     * @var string|null
     */
    protected $heightSq;
    
    /**
     *
     * @var string|null
     */
    protected $heightT;
    
    /**
     *
     * @var string|null
     */
    protected $heightZ;
    
    /**
     * The name of the id attribute
     *
     * @var string
     */
    const ATTRIBUTE_ID = 'id';

    /**
     * The name of the owner attribute
     *
     * @var string
     */
    const ATTRIBUTE_OWNER_NSID = 'owner';

    /**
     * The name of the secret attribute
     *
     * @var string
     */
    const ATTRIBUTE_SECRET ='secret';

    /**
     * The name of the server attribute
     *
     * @var string
     */
    const ATTRIBUTE_SERVER = 'server';

    /**
     * The name of the farm attribute
     *
     * @var string
     */
    const ATTRIBUTE_FARM = 'farm';

    /**
     * The name of the title attribute
     *
     * @var string
     */
    const ATTRIBUTE_TITLE = 'title';

    /**
     * The name of the is_public attribute
     *
     * @var string
     */
    const ATTRIBUTE_IS_PUBLIC = 'ispublic';

    /**
     * The name of the is_friend attribute
     *
     * @var string
     */
    const ATTRIBUTE_IS_FRIEND = 'isfriend';

    /**
     * The name of the is_family attribute
     *
     * @var string
     */
    const ATTRIBUTE_IS_FAMILY = 'isfamily';

    /**
     * The name of the license attribute
     *
     * @var string
     */
    const ATTRIBUTE_LICENSE = 'license';

    /**
     * The name of the dateupload attribute
     *
     * @var string
     */
    const ATTRIBUTE_DATE_UPLOAD = 'dateupload';

    /**
     * The name of the datetaken attribute
     *
     * @var string
     */
    const ATTRIBUTE_DATE_TAKEN = 'datetaken';

    /**
     * The name of the datetakengranularity attribute
     *
     * @var string
     */
    const ATTRIBUTE_DATE_TAKEN_GRANULARITY = 'datetakengranularity';

    /**
     * The name of the ownername attribute
     *
     * @var string
     */
    const ATTRIBUTE_OWNER_NAME = 'ownername';

    /**
     * The name of the iconserver attribute
     *
     * @var string
     */
    const ATTRIBUTE_ICON_SERVER = 'iconserver';

    /**
     * The name of the iconfarm attribute
     *
     * @var string
     */
    const ATTRIBUTE_ICON_FARM = 'iconfarm';

    /**
     * The name of the original secret attribute
     *
     * @var string
     */
    const ATTRIBUTE_ORIGINAL_SECRET = 'originalsecret';

    /**
     * The name of the originalformat attribute
     *
     * @var string
     */
    const ATTRIBUTE_ORIGINAL_FORMAT = 'originalformat';

    /**
     * The name of the lastupdate attribute
     *
     * @var string
     */
    const ATTRIBUTE_LAST_UPDATE = 'lastupdate';

    /**
     * The name of the latitude attribute
     *
     * @var string
     */
    const ATTRIBUTE_LATITUDE = 'latitude';

    /**
     * The name of the longitude attribute
     *
     * @var string
     */
    const ATTRIBUTE_LONGITUDE = 'longitude';

    /**
     * The name of the accuract attribute
     *
     * @var string
     */
    // const ATTRIBUTE_ACCURACY = 'accuracy';
    
    
    
    protected function getAccuracyQuery()
    {
        return $this->accuracyQuery;
    }

    /**
     * The name of the context attribute
     *
     * @var string
     */
    const ATTRIBUTE_CONTEXT = 'context';

    /**
     * The name of the tags attribute
     *
     * @var string
     */
    const ATTRIBUTE_TAGS = 'tags';

    /**
     * The name of the machine_tags attribute
     *
     * @var string
     */
    const ATTRIBUTE_MACHINE_TAGS = 'machine_tags';

    /**
     * The name of the o width attribute
     *
     * @var string
     */
    const ATTRIBUTE_O_WIDTH = 'o_width';

    /**
     * The name of the o height attribute
     *
     * @var string
     */
    const ATTRIBUTE_O_HEIGHT = 'o_height';

    const ATTRIBUTE_VIEWS = 'views';

    const ATTRIBUTE_MEDIA = 'media';

    const ATTRIBUTE_MEDIA_STATUS = 'media_status';

    const ATTRIBUTE_PATH_ALIAS = 'pathalias';

    const ATTRIBUTE_URL_SQ = 'url_sq';
    const ATTRIBUTE_HEIGHT_SQ = 'height_sq';
    const ATTRIBUTE_WIDTH_SQ = 'widht_sq';

    const ATTRIBUTE_URL_T = 'url_t';
    const ATTRIBUTE_HEIGHT_T = 'height_t';
    const ATTRIBUTE_WIDTH_T ='width_t';

    const ATTRIBUTE_URL_S ='url_s';
    const ATTRIBUTE_HEIGHT_S = 'height_s';
    const ATTRIBUTE_WIDTH_S = 'width_s';

    const ATTRIBUTE_URL_Q = 'url_q';
    const ATTRIBUTE_HEIGHT_Q = 'height_q';
    const ATTRIBUTE_WIDTH_Q = 'width_q';

    const ATTRIBUTE_URL_M = 'url_m';
    const ATTRIBUTE_HEIGHT_M = 'height_m';
    const ATTRIBUTE_WIDTH_M = 'width_m';

    const ATTRIBUTE_URL_N = 'url_n';
    const ATTRIBUTE_HEIGHT_N = 'height_n';
    const ATTRIBUTE_WIDTH_N = 'width_n';

    const ATTRIBUTE_URL_Z = 'url_z';
    const ATTRIBUTE_HEIGHT_Z = 'height_z';
    const ATTRIBUTE_WIDTH_Z = 'width_z';

    const ATTRIBUTE_URL_C = 'url_c';
    const ATTRIBUTE_HEIGHT_C = 'height_c';
    const ATTRIBUTE_WIDTH_C = 'width_c';

    const ATTRIBUTE_URL_O = 'url_o';
    const ATTRIBUTE_HEIGHT_O = 'height_o';
    const ATTRIBUTE_WIDTH_O = 'width_o';

    const QUERY_DESCRIPTION = 'description';

    

    

    

    

    

    

    
    

    /**
     * Retrieve the accuracy property
     *
     * @return string|null
     */
    public function getAccuracy()
    {
        if (!isset($this->accuracy)) {
            
            $this->accuracy = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getAccuracyQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->accuracy;
    }

    /**
     * Retrieve the context property
     *
     * @return string|null
     */
    public function getContext()
    {
        if (!isset($this->context)) {
            $this->context = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getContextQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->context;
    }

    
    
    protected function getContextQuery()
    {
        return $this->contextQuery;
    }
    
    /**
     * Retrieve the date taken property
     *
     * @return string|null
     */
    public function getDateTaken()
    {
        if (!isset($this->dateTaken)) {
            $this->dateTaken = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getDateTakenQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->dateTaken;
    }

    
    
    protected function getDateTakenQuery()
    {
        return $this->dateTakenQuery;
    }
    
    /**
     * Return the date taken granularity property
     *
     * @return string|null
     */
    public function getDateTakenGranularity()
    {
        if (!isset($this->dateTakenGranularity)) {
            $this->dateTakenGranularity = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getDateTakenGranularityQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->dateTakenGranularity;
    }

    
    
    protected function getDateTakenGranularityQuery()
    {
        return $this->dateTakenGranularityQuery;
    }
    
    /**
     * Return the date upload property
     *
     * @return string|null
     */
    public function getDateUpload()
    {
        if (!isset($this->dateUpload)) {
            $this->dateUpload = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getDateUploadQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->dateUpload;
    }

    
    
    protected function getDateUploadQuery()
    {
        return $this->dateUploadQuery;
    }
    
    /**
     * The description string that has been given to the Photo
     *
     * @return string|null
     */
    public function getDescription()
    {
        if (!isset($this->description)) {
            $this->description =
                (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getDescriptionQuery())) && $nodeList->length)
                ? $nodeList->item(0)->nodeValue
                : null;
        }
        return $this->description;
    }

    
    
    protected function getDescriptionQuery()
    {
        return $this->descriptionQuery;
    }
    
    /**
     *
     * @return string|null
     */
    public function getFarm()
    {
        if (! isset($this->farm)) {
            $this->farm = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getFarmQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->farm;
    }

    
    
    protected function getFarmQuery()
    {
        return $this->farmQuery;
    }
    
    /**
     *
     * @return string|null
     */
    public function getHeightC()
    {
        if (! isset($this->heightC)) {
            $this->heightC = $this->getDomElement()->getAttribute(self::ATTRIBUTE_HEIGHT_C);
        }
        return $this->heightC;
    }

    /**
     *
     * @return string|null
     */
    public function getHeightM()
    {
        if (! isset($this->heightM)) {
            $this->heightM = $this->getDomElement()->getAttribute(self::ATTRIBUTE_HEIGHT_M);
        }
        return $this->heightM;
    }





    public function getHeightN()
    {
        if (! isset($this->heightN)) {
            $this->heightN = $this->getDomElement()->getAttribute(self::ATTRIBUTE_HEIGHT_N);
        }
        return $this->heightN;
    }



    public function getHeightO()
    {
        if (! isset($this->heightO)) {
            $this->heightO = $this->getDomElement()->getAttribute(self::ATTRIBUTE_HEIGHT_O);
        }
        return $this->heightO;
    }



    public function getHeightQ()
    {
        if (! isset($this->heightQ)) {
            $this->heightQ = $this->getDomElement()->getAttribute(self::ATTRIBUTE_HEIGHT_Q);
        }
        return $this->heightQ;
    }

    public function getHeightS()
    {
        if (! isset($this->heightS)) {
            $this->heightS = $this->getDomElement()->getAttribute(self::ATTRIBUTE_HEIGHT_S);
        }
        return $this->heightS;
    }



    public function getHeightSq()
    {
        if (! isset($this->heightSq)) {
            $this->heightSq = $this->getDomElement()->getAttribute(self::ATTRIBUTE_HEIGHT_SQ);
        }
        return $this->heightSq;
    }

    

    public function getHeightT()
    {
        if (! isset($this->heightT)) {
            $this->heightT = $this->getDomElement()->getAttribute(self::ATTRIBUTE_HEIGHT_T);
        }
        return $this->heightT;
    }

    

    public function getHeightZ()
    {
        if (! isset($this->heightZ)) {
            $this->heightZ = $this->getDomElement()->getAttribute(self::ATTRIBUTE_HEIGHT_Z);
        }
        return $this->heightZ;
    }











    protected $iconFarm;

    public function getIconFarm()
    {
        if (! isset($this->iconFarm)) {
            $this->iconFarm = $this->getDomElement()->getAttribute(self::ATTRIBUTE_ICON_FARM);
        }
        return $this->iconFarm;
    }

    protected $iconServer;

    public function getIconServer()
    {
        if (! isset($this->iconServer)) {
            $this->iconServer = $this->getDomElement()->getAttribute(self::ATTRIBUTE_ICON_SERVER);
        }
        return $this->iconServer;
    }

    protected $id;

    public function getId()
    {
        if (! isset($this->id)) {
            $this->id = $this->getDomElement()->getAttribute(self::ATTRIBUTE_ID);
        }
        return $this->id;
    }

    protected $lastUpdate;

    public function getLastUpdate()
    {
        if (! isset($this->lastUpdate)) {
            $this->lastUpdate = $this->getDomElement()->getAttribute(self::ATTRIBUTE_LAST_UPDATE);
        }
        return $this->lastUpdate;
    }
















    protected $latitude;

    public function getLatitude()
    {
        if (! isset($this->latitude)) {
            $this->latitude = $this->getDomElement()->getAttribute(self::ATTRIBUTE_LATITUDE);
        }
        return $this->latitude;
    }

    protected $license;

    public function getLicense()
    {
        if (! isset($this->license)) {
            $this->license = $this->getDomElement()->getAttribute(self::ATTRIBUTE_LICENSE);
        }
        return $this->license;
    }

    protected $longitude;

    public function getLongitude()
    {
        if (! isset($this->longitude)) {
            $this->longitude = $this->getDomElement()->getAttribute(self::ATTRIBUTE_LONGITUDE);
        }
        return $this->longitude;
    }

    protected $machineTags;

    public function getMachineTags()
    {
        if (! isset($this->machineTags)) {
            $this->machineTags = $this->getDomElement()->getAttribute(self::ATTRIBUTE_MACHINE_TAGS);
        }
        return $this->machineTags;
    }

    protected $media;

    public function getMedia()
    {
        if (! isset($this->media)) {
            $this->media = $this->getDomElement()->getAttribute(self::ATTRIBUTE_MEDIA);
        }
        return $this->media;
    }

    protected $mediaStatus;

    public function getMediaStatus()
    {
        if (! isset($this->mediaStatus)) {
            $this->mediaStatus = $this->getDomElement()->getAttribute(self::ATTRIBUTE_MEDIA_STATUS);
        }
        return $this->mediaStatus;
    }

    protected $oHeight;

    public function getOHeight()
    {
        if (! isset($this->oHeight)) {
            $this->oHeight = $this->getDomElement()->getAttribute(self::ATTRIBUTE_O_HEIGHT);
        }
        return $this->oHeight;
    }

    protected $oWidth;

    public function getOWidth()
    {
        if (! isset($this->oWidth)) {
            $this->oWidth = $this->getDomElement()->getAttribute(self::ATTRIBUTE_O_WIDTH);
        }
        return $this->oWidth;
    }

    protected $originalFormat;

    public function getOriginalFormat()
    {
        if (! isset($this->originalFormat)) {
            $this->originalFormat = $this->getDomElement()->getAttribute(self::ATTRIBUTE_ORIGINAL_FORMAT);
        }
        return $this->originalFormat;
    }

    protected $originalSecret;

    public function getOriginalSecret()
    {
        if (! isset($this->originalSecret)) {
            $this->originalSecret = $this->getDomElement()->getAttribute(self::ATTRIBUTE_ORIGINAL_SECRET);
        }
        return $this->originalSecret;
    }

    protected $ownerName;

    public function getOwnerName()
    {
        if (! isset($this->ownerName)) {
            $this->ownerName = $this->getDomElement()->getAttribute(self::ATTRIBUTE_OWNER_NAME);
        }
        return $this->ownerName;
    }

    protected $ownerNsid;

    public function getOwnerNsid()
    {
        if (! isset($this->ownerNsid)) {
            $this->ownerNsid = $this->getDomElement()->getAttribute(self::ATTRIBUTE_OWNER_NSID);
        }
        return $this->ownerNsid;
    }

    protected $pathAlias;

    public function getPathAlias()
    {
        if (! isset($this->pathAlias)) {
            $this->pathAlias = $this->getDomElement()->getAttribute(self::ATTRIBUTE_PATH_ALIAS);
        }
        return $this->pathAlias;
    }

    protected $secret;

    public function getSecret()
    {
        if (! isset($this->secret)) {
            $this->secret = $this->getDomElement()->getAttribute(self::ATTRIBUTE_SECRET);
        }
        return $this->secret;
    }

    protected $server;

    public function getServer()
    {
        if (! isset($this->server)) {
            $this->server = $this->getDomElement()->getAttribute(self::ATTRIBUTE_SERVER);
        }
        return $this->server;
    }

    protected $tags;

    public function getTags()
    {
        if (! isset($this->tags)) {
            $this->tags = $this->getDomElement()->getAttribute(self::ATTRIBUTE_TAGS);
        }
        return $this->tags;
    }

    protected $title;

    public function getTitle()
    {
        if (! isset($this->title)) {
            $this->title = $this->getDomElement()->getAttribute(self::ATTRIBUTE_TITLE);
        }
        return $this->title;
    }

    protected $urlC;

    public function getUrlC()
    {
        if (! isset($this->urlC)) {
            $this->urlC = $this->getDomElement()->getAttribute(self::ATTRIBUTE_URL_C);
        }
        return $this->urlC;
    }


    protected $urlM;

    public function getUrlM()
    {
        if (! isset($this->urlM)) {
            $this->urlM = $this->getDomElement()->getAttribute(self::ATTRIBUTE_URL_M);
        }
        return $this->urlM;
    }

    protected $urlN;

    public function getUrlN()
    {
        if (! isset($this->urlN)) {
            $this->urlN = $this->getDomElement()->getAttribute(self::ATTRIBUTE_URL_N);
        }
        return $this->urlN;
    }

    protected $urlO;

    public function getUrlO()
    {
        if (! isset($this->urlO)) {
            $this->urlO = $this->getDomElement()->getAttribute(self::ATTRIBUTE_URL_O);
        }
        return $this->urlO;
    }

    protected $urlQ;

    public function getUrlQ()
    {
        if (! isset($this->urlQ)) {
            $this->urlQ = $this->getDomElement()->getAttribute(self::ATTRIBUTE_URL_Q);
        }
        return $this->urlQ;
    }

    protected $urlS;

    public function getUrlS()
    {
        if (! isset($this->urlS)) {
            $this->urlS = $this->getDomElement()->getAttribute(self::ATTRIBUTE_URL_S);
        }
        return $this->urlS;
    }

    protected $urlSq;

    public function getUrlSq()
    {
        if (! isset($this->urlSq)) {
            $this->urlSq = $this->getDomElement()->getAttribute(self::ATTRIBUTE_URL_SQ);
        }
        return $this->urlSq;
    }

    protected $urlT;

    public function getUrlT()
    {
        if (! isset($this->urlT)) {
            $this->urlT = $this->getDomElement()->getAttribute(self::ATTRIBUTE_URL_T);
        }
        return $this->urlT;
    }

    protected $urlZ;

    public function getUrlZ()
    {
        if (! isset($this->urlZ)) {
            $this->urlZ = $this->getDomElement()->getAttribute(self::ATTRIBUTE_URL_Z);
        }
        return $this->urlZ;
    }

    protected $views;

    public function getViews()
    {
        if (! isset($this->views)) {
            $this->views = $this->getDomElement()->getAttribute(self::ATTRIBUTE_VIEWS);
        }
        return $this->views;
    }

    protected $widthC;

    public function getWidthC()
    {
        if (! isset($this->widthC)) {
            $this->widthC = $this->getDomElement()->getAttribute(self::ATTRIBUTE_WIDTH_C);
        }
        return $this->widthC;
    }

    protected $widthM;

    public function getWidthM()
    {
        if (! isset($this->widthM)) {
            $this->widthM = $this->getDomElement()->getAttribute(self::ATTRIBUTE_WIDTH_N);
        }
        return $this->widthM;
    }

    protected $widthN;

    public function getWidthN()
    {
        if (! isset($this->widthN)) {
            $this->widthN = $this->getDomElement()->getAttribute(self::ATTRIBUTE_WIDTH_N);
        }
        return $this->widthN;
    }

    protected $widthO;
    protected $widthQ;
    protected $widthS;
    protected $widthSq;
    protected $widthT;
    protected $widthZ;
    protected $isFamily;
    protected $isFriend;
    protected $isPublic;

    /**
     * Return the width o value
     *
     * @return string|null
     */
    public function getWidthO()
    {
        if (! isset($this->widthO)) {
            $this->widthO = $this->getDomElement()->getAttribute(self::ATTRIBUTE_WIDTH_O);
        }
        return $this->widthO;
    }

    /**
     * Return the width q value
     *
     * @return string|null
     */
    public function getWidthQ()
    {
        if (! isset($this->widthQ)) {
            $this->widthQ = $this->getDomElement()->getAttribute(self::ATTRIBUTE_WIDTH_Q);
        }
        return $this->widthQ;
    }

    /**
     * Return the width s value
     *
     * @return string|null
     */
    public function getWidthS()
    {
        if (! isset($this->widthSq)) {
            $this->widthSq = $this->getDomElement()->getAttribute(self::ATTRIBUTE_WIDTH_S);
        }
        return $this->widthS;
    }

    /**
     * Return the width sq value
     *
     * @return string|null
     */
    public function getWidthSq()
    {
        if (! isset($this->widthSq)) {
            $this->widthSq = $this->getDomElement()->getAttribute(self::ATTRIBUTE_WIDTH_SQ);
        }
        return $this->widthSq;
    }

    /**
     * Return the width t value
     *
     * @return string|null
     */
    public function getWidthT()
    {
        if (! isset($this->widthT)) {
            $this->widthT = $this->getDomElement()->getAttribute(self::ATTRIBUTE_WIDTH_T);
        }
        return $this->widthT;
    }

    /**
     * Return the width z value
     *
     * @return string|null
     */
    public function getWidthZ()
    {
        if (! isset($this->widthZ)) {
            $this->widthZ = $this->getDomElement()->getAttribute(self::ATTRIBUTE_WIDTH_Z);
        }
        return $this->widthZ;
    }

    /**
     * Return the is family flag
     *
     * @return string|null
     */
    public function isFamily()
    {
        if (! isset($this->isFamily)) {
            $this->isFamily = $this->getDomElement()->getAttribute(self::ATTRIBUTE_IS_FAMILY);
        }
        return $this->isFamily;
    }

    /**
     * Return the is friend flag
     *
     * @return string|null
     */
    public function isFriend()
    {
        if (! isset($this->isFriend)) {
            $this->isFriend = $this->getDomElement()->getAttribute(self::ATTRIBUTE_IS_FRIEND);
        }
        return $this->isFriend;
    }

    /**
     * Return the publicly viewable flag of the Photo
     *
     * @return string|null
     */
    public function isPublic()
    {
        if (! isset($this->isPublic)) {
            $this->isPublic = $this->getDomElement()->getAttribute(self::ATTRIBUTE_IS_PUBLIC);
        }
        return $this->isPublic;
    }

}