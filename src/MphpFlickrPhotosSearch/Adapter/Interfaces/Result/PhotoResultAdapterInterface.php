<?php
/**
 * ResultAdapterInterface.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosSearch
 * @package    MphpFlickrPhotosSearch
 * @subpackage MphpFlickrPhotosSearch\Adapter\Interfaces\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosSearch\Adapter\Interfaces\Result;

/**
 * ResultAdapterInterface
 *
 * The interface to be implemented by ResultAdapters
 *
 * @category   MphpFlickrPhotosSearch
 * @package    MphpFlickrPhotosSearch
 * @subpackage MphpFlickrPhotosSearch\Adapter\Interfaces\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
interface PhotoResultAdapterInterface
{

    /**
     * Return the Accuracy of the Photo lon/lat values
     *
     * @return string|null
     */
    public function getAccuracy();

    /**
     * Return the context value of the Photo
     *
     * @return string|null
     */
    public function getContext();

    /**
     * Return a MySQL compatible datetime string
     *
     * @return string
     */
    public function getDateTaken();

    /**
     * @return string|null
     */
    public function getDateTakenGranularity();

    /**
     * Return a unix timestamp
     *
     * @return string|null
     */
    public function getDateUpload();

    /**
     * Return the Photo description
     *
     * @return string|null
     */
    public function getDescription();

    /**
     * Return the name of the farm
     *
     * @return string|null
     */
    public function getFarm();

    /**
     * Return the height c value
     *
     * @return string|null
     */
    public function getHeightC();

    /**
     * Return the height m value
     *
     * @return string|null
     */
    public function getHeightM();

    /**
     * Return the height n value
     *
     * @return string|null
     */
    public function getHeightN();

    /**
     * Return the height o value
     *
     * @return string|null
     */
    public function getHeightO();

    /**
     * Return the height q value
     *
     * @return string|null
     */
    public function getHeightQ();

    /**
     * Return the height s value
     *
     * @return string|null
     */
    public function getHeightS();

    /**
     * Return the height sq value
     *
     * @return string|null
     */
    public function getHeightSq();

    /**
     * Return the height t value
     *
     * @return string|null
     */
    public function getHeightT();

    /**
     * Return the height z value
     *
     * @return string|null
     */
    public function getHeightZ();

    /**
     * Return the name of the icon farm
     *
     * @return string|null
     */
    public function getIconFarm();

    /**
     * Return the name of the icon server
     *
     * @return string|null
     */
    public function getIconServer();

    /**
     * Return the photo id
     *
     * @return string|null
     */
    public function getId();

    /**
     * Return a unix timestamp
     *
     * @return string
     */
    public function getLastUpdate();

    /**
     * Return the latitude of the Photo (if available)
     *
     * @return string|null
     */
    public function getLatitude();

    /**
     * Return the license value
     *
     * @return string|null
     */
    public function getLicense();

    /**
     * Return the longitude of the Photo (if available)
     *
     * @return string|null
     */
    public function getLongitude();

    /**
     * Dont know
     */
    public function getMachineTags();

    /**
     * Return the name of the Photo media
     *
     * @return string|null
     */
    public function getMedia();

    /**
     * Return status of the media
     *
     * @return string|null
     */
    public function getMediaStatus();

    /**
     * Return the original format of the Photo
     *
     * @return string|null
     */
    public function getOriginalFormat();

    /**
     * Return the original secret
     *
     * @return string
     */
    public function getOriginalSecret();

    /**
     * Return the owner name
     *
     * @return string|null
     */
    public function getOwnerName();

    /**
     * Return the NSID of the owner
     *
     * @return string|null
     */
    public function getOwnerNsid();

    /**
     * Return the path alias value
     *
     * @return string|null
     */
    public function getPathAlias();

    /**
     * Return the secret string
     *
     * @return string|null
     */
    public function getSecret();

    /**
     * Return the name of the server
     *
     * @return string|null
     */
    public function getServer();

    /**
     * Return a string containing Tags that have been applied to this
     * Photo
     *
     * @return string|null
     */
    public function getTags();

    /**
     * Return the title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Return the c url
     *
     * @return string|null
     */
    public function getUrlC();

    /**
     * Return the m url
     *
     * @return string|null
     */
    public function getUrlM();

    /**
     * Return the n url
     *
     * @return string|null
     */
    public function getUrlN();

    /**
     * Return the d url
     *
     * @return string|null
     */
    public function getUrlO();

    /**
     * Return the q url
     *
     * @return string|null
     */
    public function getUrlQ();

    /**
     * Return the s url
     *
     * @return string|null
     */
    public function getUrlS();

    /**
     * Return the sql url
     *
     * @return string|null
     */
    public function getUrlSq();

    /**
     * Return the t url
     *
     * @return string|null
     */
    public function getUrlT();

    /**
     * Return the z url
     *
     * @return string|null
     */
    public function getUrlZ();

    /**
     * Return the number of views
     *
     * @return string|null
     */
    public function getViews();

    /**
     * Return the c width
     *
     * @return string|null
     */
    public function getWidthC();

    /**
     * Return the m width
     *
     * @return string|null
     */
    public function getWidthM();

    /**
     * Return the n width
     *
     * @return string|null
     */
    public function getWidthN();

    /**
     * Return the o width
     *
     * @return string|null
     */
    public function getWidthO();

    /**
     * Return the q width
     *
     * @return string|null
     */
    public function getWidthQ();

    /**
     * Return the s width
     *
     * @return string|null
     */
    public function getWidthS();

    /**
     * Return the sq width
     *
     * @return string|null
     */
    public function getWidthSq();

    /**
     * Return the t width
     *
     * @return string|null
     */
    public function getWidthT();

    /**
     * Return the z width
     *
     * @return string|null
     */
    public function getWidthZ();

    /**
     * Return the is family value
     *
     * @todo Should this method be changed to getPublic since it returns a string
     * and not a boolean
     *
     * @return string|null
     */
    public function isFamily();

    /**
     * Return the is friend value
     *
     * @todo Should this method be changed to getPublic since it returns a string
     * and not a boolean
     *
     * @return string|null
     */
    public function isFriend();

    /**
     * Return the is public value
     *
     * @todo Should this method be changed to getPublic since it returns a string
     * and not a boolean
     *
     * @return string|null
     */
    public function isPublic();

}