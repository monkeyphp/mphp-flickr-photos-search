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

    protected $argumentContentType = 'content_type';
    protected $argumentExtras = 'extras';
    protected $argumentInGallery = 'in_gallery';
    protected $argumentInGetty = 'in_getty';
    protected $argumentIsCommons = 'is_commons';
    protected $argumentMedia = 'media';
    protected $argumentPage = 'page';
    protected $argumentPerPage = 'per_page';
    protected $argumentSafeSearch = 'safe_search';
    protected $argumentSort = 'sort';

    protected $defaultContentType = 7;
    protected $defaultExtras = array();
    protected $defaultInGallery = false;
    protected $defaultInGetty = false;
    protected $defaultIsCommons = false;
    protected $defaultMedia = 'all';
    protected $defaultPage = 1;
    protected $defaultPerPage = 100;
    protected $defaultSort = 'date-posted-desc';
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

    public function getArgumentContentType()
    {
        return $this->argumentContentType;
    }
    public function getArgumentExtras()
    {
        return $this->argumentExtras;
    }
    protected function getArgumentInGallery()
    {
        return $this->argumentInGallery;
    }
    public function getArgumentInGetty()
    {
        return $this->argumentInGetty;
    }
    public function getArgumentIsCommons()
    {
        return $this->argumentIsCommons;
    }
    public function getArgumentMedia()
    {
        return $this->argumentMedia;
    }
    public function getArgumentPage()
    {
        return $this->argumentPage;
    }
    public function getArgumentPerPage()
    {
        return $this->argumentPerPage;
    }
    public function getArgumentSafeSearch()
    {
        return $this->argumentSafeSearch;
    }
    protected function getArgumentSort()
    {
        return $this->argumentSort;
    }

    public function getDefaultContentType()
    {
        return $this->defaultContentType;
    }
    public function getDefaultExtras()
    {
        return $this->defaultExtras;
    }
    protected function getDefaultInGallery()
    {
        return $this->defaultInGallery;
    }
    public function getDefaultInGetty()
    {
        return $this->defaultInGetty;
    }
    public function getDefaultIsCommons()
    {
        return $this->defaultIsCommons;
    }
    public function getDefaultMedia()
    {
        return $this->defaultMedia;
    }
    public function getDefaultPage()
    {
        return $this->defaultPage;
    }
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
    public function getDefaultPerPage()
    {
        return $this->defaultPerPage;
    }
    public function getDefaultSafeSearch()
    {
        return $this->defaultSafeSearch;
    }
    protected function getDefaultSort()
    {
        return $this->defaultSort;
    }

    protected function getValidContentTypeValues()
    {
        return array(
            1, 2, 3, 4, 5, 6, 7
        );
    }

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
            'url_o'
        );
    }

    protected function getValidMediaValues()
    {
        return array(
            'all',
            'photos',
            'videos'
        );
    }

    protected function getValidSafeSearchValues()
    {
        return array(
            1, 2, 3
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
     *
     * @param array $parameters
     *
     * @return array
     */
    protected function prepareParameters($parameters = array())
    {
        $parameters = array_merge($this->getDefaultParameters(), $parameters);

        // parent::prepareParameters should add the api_key and method values
        $parameters = parent::prepareParameters($parameters);

        // validate tags
        // @todo

        // validate sort
        if (array_key_exists($this->getArgumentSort(), $parameters) && (false === $this->validateSort($parameters[$this->getArgumentSort()]))) {
            throw new \InvalidArgumentException();
        }

        // validate in_gallery
        if (array_key_exists($this->getArgumentInGallery(), $parameters) && (false === $this->validateInGallery($parameters[$this->getArgumentInGallery()]))) {
            throw new \InvalidArgumentException();
        }

        // validate in_getty
        if (array_key_exists($this->getArgumentInGetty(), $parameters) && (false === $this->validateInGetty($parameters[$this->getArgumentInGetty()]))) {
            throw new \InvalidArgumentException();
        }

        // validate is_commons
        if (array_key_exists($this->getArgumentIsCommons(), $parameters) && (false === $this->validateIsCommons($parameters[$this->getArgumentIsCommons()]))) {
            throw new \InvalidArgumentException();
        }

        // validate safe_search
        if (array_key_exists($this->getArgumentSafeSearch(), $parameters) && (false === $this->validateSafeSearch($parameters[$this->getArgumentSafeSearch()]))) {
            throw new \InvalidArgumentException();
        }

        // validate content_type
        if (array_key_exists($this->getArgumentContentType(), $parameters) && (false === $this->validateContentType($parameters[$this->getArgumentContentType()]))) {
            throw new \InvalidArgumentException();
        }

        // validate media
        if (array_key_exists($this->getArgumentMedia(), $parameters) && (false === $this->validateMedia($parameters[$this->getArgumentMedia()]))) {
            throw new \InvalidArgumentException();
        }

        // validate page
        if (array_key_exists($this->getArgumentPage(), $parameters) && (false === $this->validatePage($parameters[$this->getArgumentPage()]))) {
            throw new \InvalidArgumentException();
        }
        // validate per_page
        if (array_key_exists($this->getArgumentPerPage(), $parameters) && (false === $this->validatePerPage($parameters[$this->getArgumentPerPage()]))) {
            throw new \InvalidArgumentException();
        }
        // validate extras
        if (array_key_exists($this->getArgumentExtras(), $parameters) && (false === $this->validateExtras($parameters[$this->getArgumentExtras()]))) {
            throw new \InvalidArgumentException();
        }

        return $parameters;
    }


    protected function validateContentType($value)
    {
        return in_array((int)$value, $this->getValidContentTypeValues());
    }
    protected function validateExtras($value)
    {
        if (is_string($value)) {
            $value = explode(',', $value);
        }

        if (!is_array($value)) {
            return false;
        }

        return (!(bool)count(array_diff($value, $this->getValidExtras())));
    }
    protected function validateInGallery($value)
    {
        return (is_bool($value) || in_array($value, array('true', 'false', '1', '0')));
    }
    /**
     * Limit the scope of the search to only photos that are for sale on Getty. Default is false.
     *
     * @param type $value
     */
    protected function validateInGetty($value)
    {
        return (is_bool($value) || in_array($value, array('true', 'false', '1', '0')));
    }
    /**
     * Limit the scope of the search to only photos that are part of the Flickr Commons project. Default is false.
     *
     * @param type $value
     * @return type
     */
    protected function validateIsCommons($value)
    {
        return (is_bool($value) || in_array($value, array('true', 'false', '1', '0')));
    }
    protected function validateMedia($value)
    {
        return in_array($value, $this->getValidMediaValues());
    }
    protected function validatePage($value)
    {
        return !preg_match('#[^\d]#', $value);
    }

    protected function validatePerPage($value)
    {
        return (!preg_match('#[^\d]#', $value) && ($value < 500 && $value > 1));
    }
    protected function validateSafeSearch($value)
    {
        return in_array((int)$value, $this->getValidSafeSearchValues());
    }
    protected function validateSort($value)
    {
        return (in_array($value, $this->getValidSortValues()));
    }

}