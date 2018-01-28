<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait StandardTrait
{
    protected $trait_time_field = 'created_at';

	/**
	 * @return string
	 */
	public static function getTableName()
	{
		return ( new static )->getTable();
	}

	/**
	 * @return string
	 */
	public static function getMappingTableName()
	{
		$table_name = self::getTableName();
		return str_singular( $table_name ) . '_maps';
	}

    /**
     * @param  integer $id
     * @return self    
     */
    public static function findOrNew( $id )
    {
    	$obj = static::find( $id );

    	if( $obj ) return $obj;
    	else return new static;
    }

    /**
     * @param  Builder $q 
     * @param  integer $id
     * @return Builder     
     */
    public function scopeExcept( Builder $q, $id )
    {
    	return $q->where( 'id', '!=', $id );
    }

    /**
     * @param  Builder $q   
     * @param  string  $sort
     * @return Builder       
     */
    public function scopeOrderByName( Builder $q, $sort = 'asc' )
    {
    	return $q->orderBy( 'name', $sort );
    }

    public function getTimeField()
    {
        if( isset( $this->time_field ) )
        {
            return $this->time_field;
        }

        return $this->trait_time_field;
    }

    public function scopeOrderByTimeField( Builder $q, $sort= 'desc' )
    {
        return $q->orderBy( $this->getTImeField(), $sort );
    }

    public function delete()
    {
        /**
         * Delete related seo
         */
        if( $seo = $this->seo )
        {
            $seo->delete();
        }

        parent::delete();
    }

    public function scopeWhereIds( Builder $q, $ids = [])
    {
        return $q->whereIn( 'id', $ids );
    }
}