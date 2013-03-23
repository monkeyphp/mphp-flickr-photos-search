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

    protected $iconServer;
    protected $id;
    protected $lastUpdate;
    protected $latitude;
    protected $license;
    protected $longitude;
    protected $machineTags;
    protected $media;
    protected $mediaStatus;
    protected $oHeight;
    protected $oWidth;
    protected $originalFormat;
    protected $originalSecret;
    protected $ownerName;
    protected $ownerNsid;
    protected $pathAlias;
    protected $secret;
    protected $server;
    protected $tags;
    protected $title;
    protected $urlC;
    protected $urlM;
    protected $urlN;
    protected $urlO;
    protected $urlQ;
    protected $urlS;
    protected $urlSq;
    protected $urlT;
    protected $urlZ;
    protected $views;
    protected $widthC;
    protected $widthM;
    protected $widthN;
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
     * DOMXPath query string used to retrieve the height_c value from the results
     *
     * @var string
     */
    protected $heightCQuery = '/photo/@height_c';

    /**
     *
     * @var string|null
     */
    protected $heightM;

    /**
     * DOMXPath query string used to retrieve the height_m value from the
     * results
     *
     * @var string
     */
    protected $heightMQuery = '/photo/@height_m';

    /**
     *
     * @var string|null
     */
    protected $heightN;

    /**
     * DOMXPath query string used to retrieve the height n value from the results
     *
     * @var string
     */
    protected $heightNQuery = '/photo/@height_n';

    /**
     * The height o value
     *
     * @var string|null
     */
    protected $heightO;

    /**
     * DOMXPath query string used to retrieve the height o value from the results
     *
     * @var string
     */
    protected $heightOQuery = '/photo/@height_o';

    /**
     *
     * @var string|null
     */
    protected $heightQ;

    /**
     * DOMXPath query string used to retrieve the height q value from the results
     *
     * @var string
     */
    protected $heightQQuery = '/photo/@height_q';

    /**
     * The height sq value
     *
     * @var string|null
     */
    protected $heightSq;

    /**
     * DOMXPath query string used to retrieve the height sq value from the results
     *
     * @var string
     */
    protected $heightSqQuery = '/photo/@height_sq';

    /**
     * The height t value
     *
     * @var string|null
     */
    protected $heightT;

    /**
     * DOMXPath query string used to retrieve the height t value from the results
     *
     * @var string
     */
    protected $heightTQuery = '/photo/@height_t';

    /**
     *
     * @var string|null
     */
    protected $heightZ;

    /**
     * DOMXPath query string used to retrieve the height z value from the results
     *
     * @var string
     */
    protected $heightZQuery = '/photo/@height_z';

    /**
     *
     * @var string|null
     */
    protected $iconFarm;

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
     * Return the DOMXPath query string used to retrieve the accuracy value from
     * the results
     *
     * @return string
     */
    protected function getAccuracyQuery()
    {
        return $this->accuracyQuery;
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

    /**
     * Return the DOMXPath query string used to retrieve the context value
     * from the results
     *
     * @return string
     */
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

    /**
     * Return the DOMXPath query string used to retrieve the date taken value
     * from the results
     *
     * Returns a MySql datetime string
     *
     * @return string
     */
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

    /**
     * Return the DOMXPath query string used to retrieve the
     * date taken granularity value from the results
     *
     * @return string
     */
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

    /**
     * Return the DOMXPath query string used to retrieve the date
     * upload value from the results
     *
     * @return string
     */
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

    /**
     * Return the DOMXPath query string used to retrieve the
     * description value from the results
     *
     * @return string
     */
    protected function getDescriptionQuery()
    {
        return $this->descriptionQuery;
    }

    /**
     * Return the farm value
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

    /**
     * Return the DOMXPath query string used to retrieve the
     * farm value from the results
     *
     * @return string
     */
    protected function getFarmQuery()
    {
        return $this->farmQuery;
    }

    /**
     * Return the height c value
     *
     * @return string|null
     */
    public function getHeightC()
    {
        if (! isset($this->heightC)) {
            $this->heightC = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getHeightCQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->heightC;
    }

    /**
     * Return the DOMXPath query string used to retrieve the height c value
     * from the results
     *
     * @return string
     */
    protected function getHeightCQuery()
    {
        return $this->heightCQuery;
    }

    /**
     * Return the height m value
     *
     * @return string|null
     */
    public function getHeightM()
    {
        if (! isset($this->heightM)) {
            $this->heightM = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getHeightMQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->heightM;
    }

    /**
     * Return the DOMXPath query string used to retrieve the height m value from
     * the results
     *
     * @return string
     */
    protected function getHeightMQuery()
    {
        return $this->heightMQuery;
    }

    /**
     * Return the height n value
     *
     * @return string|null
     */
    public function getHeightN()
    {
        if (! isset($this->heightN)) {
            $this->heightN = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getHeightNQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->heightN;
    }

    /**
     * Return the DOMXPath query string used to retrieve the height n value from
     * the results
     *
     * @return string
     */
    protected function getHeightNQuery()
    {
        return $this->heightNQuery;
    }

    /**
     * Return the height o value
     *
     * @return string|null
     */
    public function getHeightO()
    {
        if (! isset($this->heightO)) {
            $this->heightO = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getHeightOQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->heightO;
    }

    /**
     * Return the DOMXPath query string used to retrieve the height o value from
     * the results
     *
     * @return string
     */
    protected function getHeightOQuery()
    {
        return $this->heightOQuery;
    }

    /**
     * Return the height q value
     *
     * @return string|null
     */
    public function getHeightQ()
    {
        if (! isset($this->heightQ)) {
            $this->heightQ = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getHeightQQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->heightQ;
    }

    /**
     * Return the DOMXPath query string used to retrieve the height q value
     * from the results
     *
     * @return string
     */
    protected function getHeightQQuery()
    {
        return $this->heightQQuery;
    }

    /**
     * Return the height s value
     *
     * @return string|null
     */
    public function getHeightS()
    {
        if (! isset($this->heightS)) {
            $this->heightS = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getHeightSQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->heightS;
    }

    /**
     * Return the DOMXPath query string used to retrieve the height s value
     * from the results
     *
     * @return string
     */
    protected function getHeightSQuery()
    {
        return $this->heightSqQuery;
    }

    /**
     * Return the height sq value
     *
     * @return string|null
     */
    public function getHeightSq()
    {
        if (! isset($this->heightSq)) {
            $this->heightSq = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getHeightSqQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->heightSq;
    }

    /**
     * Return the DOMXPath query string used to retrieve the height sq value
     * from the results
     *
     * @return string
     */
    protected function getHeightSqQuery()
    {
        return $this->heightSqQuery;
    }

    /**
     * Return the height t value
     *
     * @return string|null
     */
    public function getHeightT()
    {
        if (! isset($this->heightT)) {
            $this->heightT =  (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getHeightTQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->heightT;
    }

    /**
     * Return the DOMXPath query string used to retrieve the height t value from
     * the results
     *
     * @return string
     */
    protected function getHeightTQuery()
    {
        return $this->heightTQuery;
    }

    /**
     * Return the height z value
     *
     * @return string|null
     */
    public function getHeightZ()
    {
        if (! isset($this->heightZ)) {
            $this->heightZ = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getHeightZQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->heightZ;
    }

    /**
     * Return the DOMXPath query string used to retrieve the height z value from
     * the results
     *
     * @return string
     */
    protected function getHeightZQuery()
    {
        return $this->heightZQuery;
    }

    public function getIconFarm()
    {
        if (! isset($this->iconFarm)) {
            $this->iconFarm = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getIconFarmQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->iconFarm;
    }

    protected function getIconFarmQuery()
    {
        return $this->iconFarmQuery;
    }

    public function getIconServer()
    {
        if (! isset($this->iconServer)) {
            $this->iconServer = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getIconServerQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->iconServer;
    }

    protected function getIconServerQuery()
    {
        return $this->iconServerQuery;
    }

    public function getId()
    {
        if (! isset($this->id)) {
            $this->id = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getIdQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->id;
    }

    protected function getIdQuery()
    {
        return $this->idQuery;
    }

    public function getLastUpdate()
    {
        if (! isset($this->lastUpdate)) {
            $this->lastUpdate = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getLastUpdateQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->lastUpdate;
    }

    protected function getLastUpdateQuery()
    {
        return $this->lastUpdateQuery;
    }

    public function getLatitude()
    {
        if (! isset($this->latitude)) {
            $this->latitude = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getLatitudeQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->latitude;
    }

    protected function getLatitudeQuery()
    {
        return $this->latitudeQuery;
    }

    public function getLicense()
    {
        if (! isset($this->license)) {
            $this->license = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getLicenseQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->license;
    }

    protected function getLicenseQuery()
    {
        return $this->licenseQuery;
    }

    public function getLongitude()
    {
        if (! isset($this->longitude)) {
            $this->longitude = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getLongitudeQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->longitude;
    }

    protected function getLongitudeQuery()
    {
        return $this->longitudeQuery;
    }

    public function getMachineTags()
    {
        if (! isset($this->machineTags)) {
            $this->machineTags = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getMachineTagsQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->machineTags;
    }

    protected function getMachineTagsQuery()
    {
        return $this->machineTagsQuery;
    }

    public function getMedia()
    {
        if (! isset($this->media)) {
            $this->media = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getMediaQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->media;
    }

    protected function getMediaQuery()
    {
        return $this->mediaQuery;
    }

    public function getMediaStatus()
    {
        if (! isset($this->mediaStatus)) {
            $this->mediaStatus = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getMediaStatusQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->mediaStatus;
    }

    protected function getMediaStatusQuery()
    {
        return $this->mediaStatusQuery;
    }

    public function getOHeight()
    {
        if (! isset($this->oHeight)) {
            $this->oHeight = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOHeightQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->oHeight;
    }

    protected function getOHeightQuery()
    {
        return $this->oHeightQuery;
    }

    public function getOWidth()
    {
        if (! isset($this->oWidth)) {
            $this->oWidth = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOWidthQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->oWidth;
    }

    protected function getOWidthQuery()
    {
        return $this->oWidthQuery;
    }

    public function getOriginalFormat()
    {
        if (! isset($this->originalFormat)) {
            $this->originalFormat = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOriginalFormatQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->originalFormat;
    }

    protected function getOriginalFormatQuery()
    {
        return $this->originalFormatQuery;
    }

    public function getOriginalSecret()
    {
        if (! isset($this->originalSecret)) {
            $this->originalSecret = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOriginalSecretQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->originalSecret;
    }

    protected function getOriginalSecretQuery()
    {
        return $this->originalSecretQuery;
    }

    public function getOwnerName()
    {
        if (! isset($this->ownerName)) {
            $this->ownerName = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOwnerNameQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->ownerName;
    }

    protected function getOwnerNameQuery()
    {
        return $this->ownerNameQuery;
    }

    public function getOwnerNsid()
    {
        if (! isset($this->ownerNsid)) {
            $this->ownerNsid = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getOwnerNsidQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->ownerNsid;
    }

    protected function getOwnerNsidQuery()
    {
        return $this->ownerNsidQuery;
    }

    public function getPathAlias()
    {
        if (! isset($this->pathAlias)) {
            $this->pathAlias = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getPathAliasQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->pathAlias;
    }

    protected function getPathAliasQuery()
    {
        return $this->pathAliasQuery;
    }

    public function getSecret()
    {
        if (! isset($this->secret)) {
            $this->secret = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getSecretQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->secret;
    }

    protected function getSecretQuery()
    {
        return $this->secretQuery;
    }

    public function getServer()
    {
        if (! isset($this->server)) {
            $this->server = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getServerQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->server;
    }

    protected function getServerQuery()
    {
        return $this->serverQuery;
    }

    public function getTags()
    {
        if (! isset($this->tags)) {
            $this->tags =(($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getTagsQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->tags;
    }

    protected function getTagsQuery()
    {
        return $this->tagsQuery;
    }

    public function getTitle()
    {
        if (! isset($this->title)) {
            $this->title = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getTitleQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->title;
    }

    protected function getTitleQuery()
    {
        return $this->titleQuery;
    }

    public function getUrlC()
    {
        if (! isset($this->urlC)) {
            $this->urlC = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getUrlCQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->urlC;
    }

    protected function getUrlCQuery()
    {
        return $this->urlCQuery;
    }

    public function getUrlM()
    {
        if (! isset($this->urlM)) {
            $this->urlM =(($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getUrlMQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->urlM;
    }

    protected function getUrlMQuery()
    {
        return $this->urlMQuery;
    }

    public function getUrlN()
    {
        if (! isset($this->urlN)) {
            $this->urlN = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getUrlNQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->urlN;
    }

    protected function getUrlNQuery()
    {
        return $this->urlNQuery;
    }

    public function getUrlO()
    {
        if (! isset($this->urlO)) {
            $this->urlO = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getUrlOQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->urlO;
    }

    protected function getUrlOQuery()
    {
        return $this->urlOQuery;
    }

    public function getUrlQ()
    {
        if (! isset($this->urlQ)) {
            $this->urlQ = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getUrlQQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->urlQ;
    }

    protected function getUrlQQuery()
    {
        return $this->urlQQuery;
    }

    public function getUrlS()
    {
        if (! isset($this->urlS)) {
            $this->urlS = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getUrlSQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->urlS;
    }

    protected function getUrlSQuery()
    {
        return $this->urlSQuery;
    }

    public function getUrlSq()
    {
        if (! isset($this->urlSq)) {
            $this->urlSq =(($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getUrlSqQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->urlSq;
    }

    protected function getUrlSqQuery()
    {
        return $this->urlSqQuery;
    }

    public function getUrlT()
    {
        if (! isset($this->urlT)) {
            $this->urlT = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getUrlTQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->urlT;
    }

    protected function getUrlTQuery()
    {
        return $this->urlTQuery;
    }

    public function getUrlZ()
    {
        if (! isset($this->urlZ)) {
            $this->urlZ = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getUrlZQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->urlZ;
    }

    protected function getUrlZQuery()
    {
        return $this->urlZQuery;
    }

    public function getViews()
    {
        if (! isset($this->views)) {
            $this->views = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getViewsQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->views;
    }

    protected function getViewsQuery()
    {
        return $this->viewsQuery;
    }

    public function getWidthC()
    {
        if (! isset($this->widthC)) {
            $this->widthC = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getMediaWidthCQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->widthC;
    }

    protected function getWidthCQuery()
    {
        return $this->widthCQuery;
    }

    public function getWidthM()
    {
        if (! isset($this->widthM)) {
            $this->widthM = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getWidthMQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->widthM;
    }

    protected function getWidthMQuery()
    {
        return $this->widthMQuery;
    }

    public function getWidthN()
    {
        if (! isset($this->widthN)) {
            $this->widthN = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getWidthNQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->widthN;
    }

    protected function getWidthNQuery()
    {
        return $this->widthNQuery;
    }

    /**
     * Return the width o value
     *
     * @return string|null
     */
    public function getWidthO()
    {
        if (! isset($this->widthO)) {
            $this->widthO = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getWidthOQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->widthO;
    }

    protected function getWidthOQuery()
    {
        return $this->widthOQuery;
    }

    /**
     * Return the width q value
     *
     * @return string|null
     */
    public function getWidthQ()
    {
        if (! isset($this->widthQ)) {
            $this->widthQ = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getWidthQQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->widthQ;
    }

    protected function getWidthQQuery()
    {
        return $this->widthQQuery;
    }

    /**
     * Return the width s value
     *
     * @return string|null
     */
    public function getWidthS()
    {
        if (! isset($this->widthSq)) {
            $this->widthSq = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getWidthSQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->widthS;
    }

    protected function getWidthSQuery()
    {
        return $this->widthSQuery;
    }

    /**
     * Return the width sq value
     *
     * @return string|null
     */
    public function getWidthSq()
    {
        if (! isset($this->widthSq)) {
            $this->widthSq = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getWidthSqQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->widthSq;
    }

    protected function getWidthSqQuery()
    {
        return $this->widthSqQuery;
    }

    /**
     * Return the width t value
     *
     * @return string|null
     */
    public function getWidthT()
    {
        if (! isset($this->widthT)) {
            $this->widthT = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getWidthTQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->widthT;
    }

    protected function getWidthTQuery()
    {
        return $this->widthTQuery;
    }

    /**
     * Return the width z value
     *
     * @return string|null
     */
    public function getWidthZ()
    {
        if (! isset($this->widthZ)) {
            $this->widthZ = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getWidthZQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->widthZ;
    }

    protected function getWidthZQuery()
    {
        return $this->widthZQuery;
    }


    /**
     * Return the is family flag
     *
     * @return string|null
     */
    public function isFamily()
    {
        if (! isset($this->isFamily)) {
            $this->isFamily = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getIsFamilyQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->isFamily;
    }

    protected function getIsFamilyQuery()
    {
        return $this->isFamilyQuery;
    }

    /**
     * Return the is friend flag
     *
     * @return string|null
     */
    public function isFriend()
    {
        if (! isset($this->isFriend)) {
            $this->isFriend = (($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getIsFriendQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->isFriend;
    }

    protected function getIsFriendQuery()
    {
        return $this->isFriendQuery;
    }

    /**
     * Return the publicly viewable flag of the Photo
     *
     * @return string|null
     */
    public function isPublic()
    {
        if (! isset($this->isPublic)) {
            $this->isPublic =(($nodeList = $this->getDomXPath($this->getDomDocument())->query($this->getIsQuery())) && $nodeList->length)
                ? $nodeList->item(0)->value
                : null;
        }
        return $this->isPublic;
    }

    protected function getIsPublicQuery()
    {
        return $this->isPublicQuery;
    }

}
