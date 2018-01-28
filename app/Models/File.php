<?php 

namespace App\Models;

use Image;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Intervention\Image\Constraint;

class File extends BaseModel
{
    use Traits\StandardTrait,
        Traits\FeaturedTrait;

    protected $table = 'system_files';

    protected $disk = 'web';

    /**
     * @return morphTo
     */
    public function attached()
    {
        return $this->morphTo();
    }

    /**
     * @param  Builder $q 
     * @param  integer $id
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function scopeWhereProductId( Builder $q, $id )
    {
        return $q->whereAttachmentType( Product::class )
                 ->whereAttachmentId( $id );
    }

    /**
     * @return array
     */
    protected function getDiskInfo()
    {
        $selected = $this->disk;
        return config( "filesystems.disks.$selected" );
    }

    /**
     * @param  string  $name 
     * @param  boolean $web_root 
     * @return string       
     */
    protected function getFullPath( $name = null, $web_root = false )
    {
        $disk_info = $this->getDiskInfo();
        $root      = $web_root? asset($disk_info[ 'web_root' ]) : $disk_info[ 'root' ];

        $path = substr( $this->disk_name, 0, 9 );
        $path = implode( '/', str_split( $path, '3' ) );

        $concats = 
        [
            $root,
            $disk_info[ 'visibility' ],
            $path
        ];

        if( $name ) $concats[] = $name;

        return implode( '/', $concats );
    }

    /**
     * @param  array  $configs 
     * @return string          
     */
    protected function getThumbPath( $configs )
    {
        $ext        = pathinfo( $this->disk_name,PATHINFO_EXTENSION );
        $filename   = basename( $this->disk_name, ".$ext" );

        $thumb_name = sprintf( '%s-t%s.%s', 
                            $filename,
                            $this->getSize( $configs ),
                            $ext );

        $web_root = isset( $configs[ 'web_root' ] )? $configs[ 'web_root' ] : false;

        return $this->getFullPath( $thumb_name, $web_root );
    }

    protected function getDiskPath()
    {
        return $this->getFullPath( $this->disk_name );
    }

    private function getSize( $configs )
    {
        $size = $configs[ 'size' ];

        /**
         * Maybe in the future size can contain label/key
         */
        $available_sizes = config( 'image.sizes' );
        if( !empty( $available_sizes ) )
        {
            if( isset( $available_sizes[ $size ]) )
                return $available_sizes[ $size ];
        }

        return $size;
    }

    /**
     * @return boolean
     */
    public function fileExists()
    {
        return file_exists( $this->getDiskPath() );
    }

    /**
     * @return string
     */
    public function createThumbnail( $configs )
    {
        if( !$this->fileExists() ) return '';

        $thumb_path = $this->getThumbPath( $configs );
        if( !file_exists( $thumb_path ) ) 
        {
            list( $w, $h ) = explode( 'x', $this->getSize( $configs ));
            $method = isset( $configs[ 'method' ] )? $configs[ 'method' ] : 'resize';

            /**
             * Create thumbnail
             */
            $img = Image::make( $this->getDiskPath() );

            $img->$method( $w, $h )
                ->save( $thumb_path );
        }

        $configs[ 'web_root' ] = true;   
        return $this->getThumbPath( $configs );
    }

    /**
     * @param  string $size   
     * @param  array  $configs
     * @return string         
     */
    public function thumb( $size, $configs = [] )
    {
        $configs[ 'size' ] = $size;
        return $this->createThumbnail( $configs );
    }

    /**
     * @return string
     */
    public function original()
    {
        return $this->getFullPath( $this->disk_name, true );
    }

    /**
     * @return string
     */
    public function raw()
    {
        return $this->getFullPath( $this->disk_name, true );
    }

    /**
     * @param  integer $id
     * @param  string  $morphClass
     * @param  array   $fileinfo    Fileinfo generated from App\Libraries\Simplifies\ImageUpload
     * @param  string  $field
     * @return self
     */
    public function make( $id, $morphClass, $fileinfo, $field = null )
    {
        $this->attachment_id        = $id;
        $this->attachment_type      = $morphClass;
        $this->disk_name            = $fileinfo[ 'name' ];
        $this->file_name            = $fileinfo[ 'original_name' ];
        $this->file_size            = $fileinfo[ 'size' ];
        $this->width                = $fileinfo[ 'width' ];
        $this->height               = $fileinfo[ 'height' ];
        $this->content_type         = $fileinfo[ 'mime' ];
        $this->field                = $field? $field : $fileinfo[ 'type' ];
        $this->path                 = $fileinfo[ 'path' ];
        $this->is_featured          = 1;
        $this->sort_order           = 0;
        $this->sort_index           = 0;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        if( empty( $this->title ) )
        {
            $filename = pathinfo( $this->file_name, PATHINFO_FILENAME );
            $filename = str_replace([ '_', '-' ], ' ', $filename );

            return $filename;
        }

        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        if( empty( $this->description ) )
        {
            return $this->getTitle();
        }

        return $this->description;
    }
}
