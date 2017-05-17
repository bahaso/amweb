<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

class BlankController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var Illuminate\Http\Request;
     */
    protected $r;

    /**
     * @var array
     */
    protected $data = [];
    
    /**
     * @param Request $r
     */
    public function __construct( Request $r )
    {
        $this->r      = $r;
    }

    /**
     * @param  array $data
     * @return array      
     */
    protected function appendData( $data )
    {
    	if( !$data )
    	{
    		return;
    	}

    	if( !is_array( $data ) )
    	{
    		$data = ( array ) $data;
    	}

    	return $this->data += $data;
    }

    /**
     * @return array
     */
    protected function beforeOutput()
    {}

    /**
     * @param  string $view
     * @param  array  $data
     * @return string      
     */
    protected function output( $view, $data = [] )
    {
    	$this->appendData( $this->beforeOutput() );
        $this->appendData( $data );

    	return view( "$view", $this->data );
    }

    /**
     * @param  string   $route 
     * @param  string   $msg
     * @param  boolean  $valid
     * @return redirect             
     */
    protected function redirectToRoute( $route, $msg = null, $valid = true )
    {
        $params = [];
        if( is_array( $route ) )
        {
            $params = $route[ 1 ];
            $route  = $route[ 0 ];
        }

        $redirect = redirect()->route( $route, $params );

        if( !empty( $msg ) )
        {
            $redirect->with(
            [
                'message' => 
                [
                    'status'  => $valid,
                    'content' => $msg
                ]
            ]);
        }

        return $redirect;
    }

    /**
     * @param  string   $error
     * @param  string   $msg
     * @param  boolean  $valid
     * @return redirect       
     */
    protected function redirectBack( $msg = null, $valid = true )
    {
        $redirect = redirect()->back();

        if( !empty( $msg ) )
        {
            $redirect->with(
            [
                'message' => 
                [
                    'status'  => $valid,
                    'content' => $msg
                ]
            ]);
        }

        return $redirect;
    }
}
