<?php
/**
 * ResultInterface.php
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
 * ResultInterface
 * 
 * @category   MphpFlickrPhotosSearch
 * @package    MphpFlickrPhotosSearch
 * @subpackage MphpFlickrPhotosSearch\Adapter\Interfaces\Result
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
interface ResultInterface 
{
    
    /**
     * Return the photo id
     *
     * @return string|null
     */
    public function getId();

    /**
     * Return the NSID of the owner
     *
     * @return string|null
     */
    public function getOwnerNsid();

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
     * Return the name of the farm
     *
     * @return string|null
     */
    public function getFarm();

    /**
     * Return the title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Return a boolean indicating the photo is public
     *
     * @return boolean|null
     */
    public function isPublic();

    /**
     * @return boolean|null
     */
    public function isFriend();

    /**
     * @return boolean|null
     */
    public function isFamily();

    /**
     * @return string|null
     */
    public function getLicense();

    /**
     * Return a unix timestamp
     *
     * @return string|null
     */
    public function getDateUpload();

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
     * @return string|null
     */
    public function getOwnerName();

    /**
     * Return the name of the icon server
     *
     * @return string|null
     */
    public function getIconServer();

    /**
     * Return the name of the icon farm
     *
     * @return string|null
     */
    public function getIconFarm();

    /**
     * Return the original secret
     *
     * @return string
     */
    public function getOriginalSecret();

    /**
     * Return the original format of the Photo
     *
     * @return string|null
     */
    public function getOriginalFormat();

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
     * Return the longitude of the Photo (if available)
     *
     * @return string|null
     */
    public function getLongitude();

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
     * Return a string containing Tags that have been applied to this
     * Photo
     *
     * @return string|null
     */
    public function getTags();

    /**
     * Dont know
     */
    public function getMachineTags();

    /**
     * Return the o_width value
     *
     * @return string|null
     */
    public function getOWidth();

    /**
     * Return the o_height value
     *
     * @return string|null
     */
    public function getOHeight();

    /**
     * Return the number of views
     *
     * @return string|null
     */
    public function getViews();

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
     * @return string|null
     */
    public function getPathAlias();


    public function getUrlSq();
    public function getHeightSq();
    public function getWidthSq();

    public function getUrlT();
    public function getHeightT();
    public function getWidthT();

    public function getUrlS();
    public function getHeightS();
    public function getWidthS();

    public function getUrlQ();
    public function getHeightQ();
    public function getWidthQ();

    public function getUrlM();
    public function getHeightM();
    public function getWidthM();

    public function getUrlN();
    public function getHeightN();
    public function getWidthN();

    public function getUrlZ();
    public function getHeightZ();
    public function getWidthZ();

    public function getUrlC();
    public function getHeightC();
    public function getWidthC();

    public function getUrlO();
    public function getHeightO();
    public function getWidthO();

    /**
     * Return the Photo description
     *
     * @return string|null
     */
    public function getDescription();
}