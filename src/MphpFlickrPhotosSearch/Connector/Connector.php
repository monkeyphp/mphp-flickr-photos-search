<?php
/**
 * Connector.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosSearch
 * @package    MphpFlickrPhotosSearch
 * @subpackage MphpFlickrPhotosSearch\Connector
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosSearch\Connector;

/**
 * Connector
 *
 * Connector class for accessing the flickr.photos.search method endpoint
 * {@link http://www.flickr.com/services/api/flickr.photos.search.html}
 *
 * @category   MphpFlickrPhotosSearch
 * @package    MphpFlickrPhotosSearch
 * @subpackage MphpFlickrPhotosSearch\Connector
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class Connector extends \MphpFlickrBase\Connector\AbstractConnector
{

    /**
     * The url parameter value for content type
     *
     * @var string
     */
    protected $argumentContentType = 'content_type';

    /**
     * The url parameter value for extras
     *
     * @var string
     */
    protected $argumentExtras = 'extras';

    /**
     * The url parameter value for in_gallery
     *
     * @var string
     */
    protected $argumentInGallery = 'in_gallery';

    /**
     * The url parameter value for in_getty
     * @var string
     */
    protected $argumentInGetty = 'in_getty';

    /**
     * The url parameter for is commons
     *
     * @var string
     */
    protected $argumentIsCommons = 'is_commons';

    /**
     * The url parameter value for media
     *
     * @var string
     */
    protected $argumentMedia = 'media';

    /**
     * The url parameter value for page
     *
     * @var string
     */
    protected $argumentPage = 'page';

    /**
     * The url parameter value for per page
     *
     * @var string
     */
    protected $argumentPerPage = 'per_page';

    /**
     * The url parameter value for safe search
     *
     * @var string
     */
    protected $argumentSafeSearch = 'safe_search';

    /**
     * The url parameter type for sort
     *
     * @var string
     */
    protected $argumentSort = 'sort';

    /**
     * A comma-delimited list of tags. Photos with one or more of the tags
     * listed will be returned.
     * You can exclude results that match a term by prepending it with a - character.
     *
     * @var array
     */
    protected $argumentTags = 'tags';

    /**
     * The default value for content type
     *
     * Content Type setting:
     *  1 for photos only.
     *  2 for screenshots only.
     *  3 for 'other' only.
     *  4 for photos and screenshots.
     *  5 for screenshots and 'other'.
     *  6 for photos and 'other'.
     *  7 for photos, screenshots, and 'other' (all).
     *
     * Defaults to 7
     *
     * @var int
     */
    protected $defaultContentType = 7;

    /**
     * The default value for extras
     *
     * Defaults to all available extras at time of writing
     *
     * @var array
     */
    protected $defaultExtras = array(
        'description          ',
        '        license',
        'date_upload       ',
        '   date_taken          ',
        'owner_name',
        '   icon_server',
        'original_format',
        '  last_update  ',
        'geo   ',
        'tags',
        'machine_tags',
        'o_dims',
        'views',
        'media',
        'path_alias',
        'url_sq',
        'url_t',
        'url_s',
        'url_q',
        'url_m',
        'url_n',
        'url_z',
        'url_c',
        'url_l',
        'url_o'
    );

    /**
     * The default value for in gallery
     *
     * @var boolean
     */
    protected $defaultInGallery = false;

    /**
     * The default value for in getty
     *
     * @var boolean
     */
    protected $defaultInGetty = false;

    /**
     * The default value for is commons
     *
     * @var boolean
     */
    protected $defaultIsCommons = false;

    /**
     * The default value for media
     *
     * @var string
     */
    protected $defaultMedia = 'all';

    /**
     * The default value for page
     *
     * @var int
     */
    protected $defaultPage = 1;

    /**
     * The default value for per page
     *
     * @var int
     */
    protected $defaultPerPage = 100;

    /**
     * The default value for sort
     *
     * @var string
     */
    protected $defaultSort = 'date-posted-desc';

    /**
     * The default value for safe search
     *
     * @var int
     */
    protected $defaultSafeSearch = 1;

    /**
     * The method name that this Connector will connect to
     *
     * @var string
     */
    protected $method = 'flickr.photos.search';

    /**
     * The name of the adapter class that a call to dispatch should return
     *
     * @var string
     */
    protected $resultAdapterClass = 'MphpFlickrPhotosSearch\Adapter\ResultSet\ResultSet';

    /**
     * Return the url parameter for the content type
     *
     * @return string
     */
    public function getArgumentContentType()
    {
        return $this->argumentContentType;
    }

    /**
     * Return the url parameter for the extras
     *
     * @return string
     */
    public function getArgumentExtras()
    {
        return $this->argumentExtras;
    }

    /**
     * Return the url value for in gallery
     *
     * @return string
     */
    protected function getArgumentInGallery()
    {
        return $this->argumentInGallery;
    }

    /**
     * Return the url parameter for in getty
     *
     * @return string
     */
    public function getArgumentInGetty()
    {
        return $this->argumentInGetty;
    }

    /**
     * Return the url parameter for is commons
     *
     * @return string
     */
    public function getArgumentIsCommons()
    {
        return $this->argumentIsCommons;
    }

    /**
     * Return the url parameter for media
     *
     * @return string
     */
    public function getArgumentMedia()
    {
        return $this->argumentMedia;
    }

    /**
     * Return the url parameter for page
     *
     * @return string
     */
    public function getArgumentPage()
    {
        return $this->argumentPage;
    }

    /**
     * Return the url parameter for per page
     *
     * @return string
     */
    public function getArgumentPerPage()
    {
        return $this->argumentPerPage;
    }

    /**
     * Return the url parameter for safe search
     *
     * @return string
     */
    public function getArgumentSafeSearch()
    {
        return $this->argumentSafeSearch;
    }

    /**
     * Return the url parameter  for sort
     *
     * @return string
     */
    protected function getArgumentSort()
    {
        return $this->argumentSort;
    }

    protected function getArgumentTags()
    {
        return $this->argumentTags;
    }

    /**
     * Return the default content type value
     *
     * @return int
     */
    public function getDefaultContentType()
    {
        return $this->defaultContentType;
    }

    /**
     * Return the default extras value
     *
     * @return array
     */
    public function getDefaultExtras()
    {
        return $this->defaultExtras;
    }

    /**
     * Return the default in gallery value
     *
     * @return boolean
     */
    protected function getDefaultInGallery()
    {
        return $this->defaultInGallery;
    }

    /**
     * Return the default in getty value
     *
     * @return boolean
     */
    public function getDefaultInGetty()
    {
        return $this->defaultInGetty;
    }

    /**
     * Return the default is commons value
     *
     * @return boolean
     */
    public function getDefaultIsCommons()
    {
        return $this->defaultIsCommons;
    }

    /**
     * Return the default media value
     *
     * @return string
     */
    public function getDefaultMedia()
    {
        return $this->defaultMedia;
    }

    /**
     * Return the default page value
     *
     * @return int
     */
    public function getDefaultPage()
    {
        return $this->defaultPage;
    }

    /**
     * Return an array of default values to include in the request to the Flickr
     * api.
     *
     * These values supplied in the call to dispatch are merged with these
     *
     * @return array
     */
    protected function getDefaultParameters()
    {
        return array(
            $this->getArgumentSort()        => $this->getDefaultSort(),
            $this->getArgumentInGallery()   => $this->getDefaultInGallery(),
            $this->getArgumentInGetty()     => $this->getDefaultInGetty(),
            $this->getArgumentIsCommons()   => $this->getDefaultIsCommons(),
            $this->getArgumentSafeSearch()  => $this->getDefaultSafeSearch(),
            $this->getArgumentContentType() => $this->getDefaultContentType(),
            $this->getArgumentMedia()       => $this->getDefaultMedia(),
            $this->getArgumentPage()        => $this->getDefaultPage(),
            $this->getArgumentPerPage()     => $this->getDefaultPerPage(),
            $this->getArgumentExtras()      => $this->getDefaultExtras()
        );
    }

    /**
     * Return the default per page value
     *
     * @return int
     */
    public function getDefaultPerPage()
    {
        return $this->defaultPerPage;
    }

    /**
     * Return the default safe search value
     *
     * @return int
     */
    public function getDefaultSafeSearch()
    {
        return $this->defaultSafeSearch;
    }

    /**
     * Return the default sort value
     *
     * @return string
     */
    protected function getDefaultSort()
    {
        return $this->defaultSort;
    }

    /**
     * Return an array of valid content type values
     *
     * @return array
     */
    protected function getValidContentTypeValues()
    {
        return array(
            1, 2, 3, 4, 5, 6, 7,
            '1', '2', '3', '4', '5', '6', '7',
            // 'photos', 'screenshots', 'other', 'all',
        );
    }

    /**
     * Return an array of valid extras values
     *
     * @return array
     */
    protected function getValidExtras()
    {
        return array(
            'description',
            'license',
            'date_upload',
            'date_taken',
            'owner_name',
            'icon_server',
            'original_format',
            'last_update',
            'geo',
            'tags',
            'machine_tags',
            'o_dims',
            'views',
            'media',
            'path_alias',
            'url_sq',
            'url_t',
            'url_s',
            'url_q',
            'url_m',
            'url_n',
            'url_z',
            'url_c',
            'url_l',
            'url_o'
        );
    }

    /**
     * Return an array of valid media values
     *
     * @return array
     */
    protected function getValidMediaValues()
    {
        return array(
            'all',
            'photos',
            'videos'
        );
    }

    /**
     * Return an array of valid safe search values
     *
     * @return string
     */
    protected function getValidSafeSearchValues()
    {
        return array(
            1, 2, 3, '1', '2', '3'
        );
    }

    /**
     * The order in which to sort returned photos.
     * Deafults to date-posted-desc (unless you are doing a radial geo query,
     * in which case the default sorting is by ascending distance from the
     * point specified).
     *
     * The possible values are:
     * date-posted-asc,
     * date-posted-desc,
     * date-taken-asc,
     * date-taken-desc,
     * interestingness-desc,
     * interestingness-asc, and relevance
     *
     * @return array
     */
    protected function getValidSortValues()
    {
        return array(
            'date-posted-asc',
            'date-posted-desc',
            'date-taken-asc',
            'date-taken-desc',
            'interestingness-desc',
            'interestingness-asc',
            'relevance'
        );
    }

    /**
     * Prepare the supplied values to send to the Flickr api
     *
     * @param array $parameters The parameters to validate
     *
     * @throws \MphpFlickrBase\Exception\InvalidParameterException
     * @return array
     */
    protected function prepareParameters($parameters = array())
    {
        $parameters = array_merge($this->getDefaultParameters(), $parameters);

        // parent::prepareParameters should add the api_key and method values
        $parameters = parent::prepareParameters($parameters);

        // validate tags
        if (array_key_exists($this->getArgumentTags(), $parameters)) {
            if (false === $this->validateTags($parameters[$this->getArgumentTags()])) {
                throw new \MphpFlickrBase\Exception\InvalidParameterException();
            }
            // the supplied extras parameter may be a string or an array of strings
            // but we must prepare each of the tags values (explode to array if string)
            $parameters[$this->getArgumentTags()] = (is_string($parameters[$this->getArgumentTags()])) ? explode(',', $parameters[$this->getArgumentTags()]) : $parameters[$this->getArgumentTags()];
            $tags = &$parameters[$this->getArgumentTags()];
            array_walk($tags, function(&$v, $i) use (&$tags){
                $tags[$i] = trim($v);
            });
            $parameters[$this->getArgumentTags()] = implode(',', $parameters[$this->getArgumentTags()]);
        }

        // validate sort
        if (array_key_exists($this->getArgumentSort(), $parameters) && (false === $this->validateSort($parameters[$this->getArgumentSort()]))) {
            throw new \MphpFlickrBase\Exception\InvalidParameterException();
        }

        // validate in_gallery
        if (array_key_exists($this->getArgumentInGallery(), $parameters) && (false === $this->validateInGallery($parameters[$this->getArgumentInGallery()]))) {
            throw new \MphpFlickrBase\Exception\InvalidParameterException();
        }

        // validate in_getty
        if (array_key_exists($this->getArgumentInGetty(), $parameters) && (false === $this->validateInGetty($parameters[$this->getArgumentInGetty()]))) {
            throw new \MphpFlickrBase\Exception\InvalidParameterException();
        }

        // validate is_commons
        if (array_key_exists($this->getArgumentIsCommons(), $parameters) && (false === $this->validateIsCommons($parameters[$this->getArgumentIsCommons()]))) {
            throw new \MphpFlickrBase\Exception\InvalidParameterException();
        }

        // validate safe_search
        if (array_key_exists($this->getArgumentSafeSearch(), $parameters) && (false === $this->validateSafeSearch($parameters[$this->getArgumentSafeSearch()]))) {
            throw new \MphpFlickrBase\Exception\InvalidParameterException();
        }

        // validate content_type
        if (array_key_exists($this->getArgumentContentType(), $parameters) && (false === $this->validateContentType($parameters[$this->getArgumentContentType()]))) {
            throw new \MphpFlickrBase\Exception\InvalidParameterException();
        }

        // validate media
        if (array_key_exists($this->getArgumentMedia(), $parameters) && (false === $this->validateMedia($parameters[$this->getArgumentMedia()]))) {
            throw new \MphpFlickrBase\Exception\InvalidParameterException();
        }

        // validate page
        if (array_key_exists($this->getArgumentPage(), $parameters) && (false === $this->validatePage($parameters[$this->getArgumentPage()]))) {
            throw new \MphpFlickrBase\Exception\InvalidParameterException();
        }
        // validate per_page
        if (array_key_exists($this->getArgumentPerPage(), $parameters) && (false === $this->validatePerPage($parameters[$this->getArgumentPerPage()]))) {
            throw new \MphpFlickrBase\Exception\InvalidParameterException();
        }
        // validate extras
        if (array_key_exists($this->getArgumentExtras(), $parameters)) {
            // validate the supplied parameters
            if (false === $this->validateExtras($parameters[$this->getArgumentExtras()])) {
                throw new \MphpFlickrBase\Exception\InvalidParameterException();
            }
            // the supplied extras parameter may be a string or an array of strings
            // but we must prepare each of the extras values explode to array if string
            $parameters[$this->getArgumentExtras()] = (is_string($parameters[$this->getArgumentExtras()])) ? explode(',', $parameters[$this->getArgumentExtras()]) : $parameters[$this->getArgumentExtras()];
            $extras = &$parameters[$this->getArgumentExtras()];
            array_walk($extras, function(&$v, $i) use (&$extras){
                $extras[$i] = trim($v);
            });
            $parameters[$this->getArgumentExtras()] = implode(',', $parameters[$this->getArgumentExtras()]);
        }

        return $parameters;
    }

    /**
     * Validate that the supplied value is a valid value for content_type
     *
     * @param string|int $value The value to validate
     *
     * @return boolean
     */
    protected function validateContentType($value)
    {
        return in_array($value, $this->getValidContentTypeValues(), true);
    }

    /**
     * Validate that the supplied value is valid for the extras value
     *
     * Accepts either an array of strings _or_ a comma separated list of values
     *
     * @param string|array $value The value to validate
     *
     * @return boolean
     */
    protected function validateExtras($value)
    {
        if (is_string($value)) {
            $value = explode(',', $value);
        }

        if (!is_array($value)) {
            return false;
        }

        array_walk($value, function(&$v, $i) use(&$value){
            $value[$i] = trim($v);

        });
        return (!(bool)count(array_diff($value, $this->getValidExtras())));
    }

    /**
     * Validate that the supplied value is a valid in_gallery value
     *
     * @param string|int|boolean $value The value to validate
     *
     * @return boolean
     */
    protected function validateInGallery($value)
    {
        return (is_bool($value) || in_array($value, array('true', 'false', '1', '0', 1, 0), true));
    }
    /**
     * Validate that the supplied value is a valid value for in_gettty
     *
     * Limit the scope of the search to only photos that are for sale on Getty.
     * Default is false.
     *
     * @param string|int|boolean $value The value to validate
     *
     * @return boolean
     */
    protected function validateInGetty($value)
    {
        return (is_bool($value) || in_array($value, array('true', 'false', '1', '0', 1, 0), true));
    }

    /**
     * Validate that the supplied value is a valid is_commons value
     *
     * Limit the scope of the search to only photos that are part of the
     * Flickr Commons project. Default is false.
     *
     * @param string|int|boolean $value The value to validate
     *
     * @return boolean
     */
    protected function validateIsCommons($value)
    {
        return (is_bool($value) || in_array($value, array('true', 'false', '1', '0', 1, 0), true));
    }

    /**
     * Validate that the supplied valus is a valid media type
     *
     * @param string $value The value to validate
     *
     * @return boolean
     */
    protected function validateMedia($value)
    {
        return in_array($value, $this->getValidMediaValues(), true);
    }

    /**
     * Validate that the supplied value is a valid page value
     *
     * @param string|int $value The value to validate
     *
     * @return boolean
     */
    protected function validatePage($value)
    {
        return !preg_match('#[^\d]#', $value);
    }

    /**
     * Validate that the supplied value is a valid per page value
     *
     * @param string|int $value The value to validate
     *
     * @return boolean
     */
    protected function validatePerPage($value)
    {
        return (!preg_match('#[^\d]#', $value) && ($value < 500 && $value > 1));
    }

    /**
     * Validate that the supplied value is a valid safe search value
     *
     * @param string $value The value to validate
     *
     * @return boolean
     */
    protected function validateSafeSearch($value)
    {
        return in_array($value, $this->getValidSafeSearchValues(), true);
    }

    /**
     * Validate that the supplied value is a valid sort value
     *
     * @param string $value The value to validate
     *
     * @return boolean
     */
    protected function validateSort($value)
    {
        return (in_array($value, $this->getValidSortValues()));
    }

    /**
     * Validate the supplied tags value
     *
     * @param array|string $value The value to be validated
     *
     * @return boolean
     */
    protected function validateTags($value)
    {
        if (is_string($value)) {
            $value = explode(',', $value);
        }

        if (! is_array($value)) {
            return false;
        }

        // foreach of the values
        foreach ($value as $tag) {
            if (preg_match('#[^\d\w ]#', $tag)) {
                return false;
            }
        }

        return true;
    }

}