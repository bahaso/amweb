<?php

namespace App\Models\Traits;

use Illuminate\Http\Request;

trait RouteTrait
{
    /**
     * @param string $pattern
     * @param string|null $key
     *
     * @return array|string
     */
    protected function _getPattern($pattern, $key = null)
    {
        if (! is_null($key)) {
            return array_has($this->$pattern, $key)
                ? array_get($this->$pattern, $key)
                : [];
        }

        return $this->$pattern;
    }

    /**
     * @param string|null $key
     *
     * @return string
     */
    public function getUrlPattern($key = null)
    {
        return $this->_getPattern('url_pattern', $key);
    }

    /**
     * @param $key
     * @param array $query
     *
     * @return string
     */
    public function getUrlFor($key, $query = [])
    {
        $params = $this->getUrlPatternParams($key);
        $url    = route($this->getUrlPattern($key), $params);
        $query  = collect(Request::capture()->query())->merge($query)->toArray();
        // $url   .= $query ? '?'.http_build_query($query) : '';

        return $url;
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    protected function hasUrlPatternParams($key)
    {
        return array_has($this->_getPattern('url_pattern_params'), $key);
    }

    /**
     * @param string|null $key
     *
     * @return array
     */
    public function getUrlPatternParams($key = null)
    {
        $params = [];
        if (! is_null($key) && $this->hasUrlPatternParams($key)) {
            array_map(function($k) use (& $params) {
                $params[$k] = $this->$k;
            }, $this->_getPattern('url_pattern_params', $key));
        }

        return $params;
    }

    public function editUrl()
    {
        return $this->getUrlFor( 'b.edit' );
    }

    public function deleteUrl()
    {
        return $this->getUrlFor( 'b.delete' );
    }

    public function storeUrl()
    {
        return $this->getUrlFor( 'b.store' );
    }
}
