<?php

namespace App\Http\Controllers\Front;

use App\Repositories\ITX\ITXInterface;
use Illuminate\Http\Request;

class DiscoverController extends BaseController
{
	public function indonesia()
	{
		return $this->output( 'discovers.indonesia' );
	}

	public function bali()
	{
		return $this->output( 'discovers.bali' );
	}

	public function destination()
	{
		return $this->output( 'discovers.destination' );
	}

	public function wonderful_indonesia()
	{
		return $this->output( 'discovers.wonderful-indonesia' );
	}

	public function tourism()
	{
		$locations = [ 'bali', 'lombok', 'komodo', 'toraja', 'toba' ];

		$itx_repo = app( ITXInterface::class );
		$packages = $itx_repo->packages( $locations );


		return $this->output( 'discovers.tourism', compact( 'locations', 'packages' ));
	}

	public function tourism_list( Request $req, $location )
	{
		$date_format = date('Y-m-d');

		// $date_format = '2017-10-04';

		$date = $req->input( 'date')?: $date_format;
		$adult = $req->input( 'adult')?: 1;

		$sort_order = $req->input('sort_order')?: 'Ascending';
		$sort_name = $req->input('sort_name')?: 'Name';

		$itx_repo = app( ITXInterface::class );

		//if current data is null, show default data
		// $default_data = $itx_repo->packageDetail( $slug, $location, "None", "Activities", $date, 1 );

		if( empty($date) || empty($adult) ){
			$packages = $itx_repo->packagesDetail( $location, "None", "Activities", $date, 1 );
		}else{
			$packages = $itx_repo->packagesDetail( $location, "None", "Activities", $date, $adult );
		}

		// if( !empty( $sort_order )){
		// 	$price = [];
		// 	foreach($packages as $key=>$row){
		// 		$price[$key] = $row['availabilities'][0]['price'];
		// 	}

		// 	if( $sort_order == 'Ascending'){
		// 		array_multisort($price, SORT_ASC, $packages);
		// 	}else{
		// 		array_multisort($price, SORT_DESC, $packages);
		// 	}
		// }

		$name = [];
		foreach($packages as $key=>$row){

			if( $sort_name == 'Name'){
				$name[$key] = $row['name'];
			}else{
				$name[$key] = $row['availabilities'][0]['price'];
			}
		}

		if( $sort_order == 'Ascending'){
			array_multisort($name, SORT_ASC, $packages);
		}else{
			array_multisort($name, SORT_DESC, $packages);
		}

		return $this->output( 'discovers.tourism-list', compact('packages', 'location', 'sort_name', 'sort_order', 'date', 'adult') );
	}

	public function tourism_detail( Request $req, $location, $slug )
	{
		$date_format = date('Y-m-d');

		// $date_format = '2017-10-04';

		$date = $req->input( 'date' )?: $date_format;
		$adult = $req->input( 'adult')?: 1;

		$itx_repo = app( ITXInterface::class );

		$packages = $itx_repo->packageDetail( $slug, $location, "None", "Activities", $date, 1 );

		if( empty($date) || empty($adult) ){
			$bookings = $itx_repo->packageDetail( $slug, $location, "None", "Activities", $date, 1 );
		}else{
			$bookings = $itx_repo->packageDetail( $slug, $location, "None", "Activities", $date, $adult );
		}

		$similars = $itx_repo->packages([ $location ]);
		$similars = reset( $similars );
		if( !empty( $similars[ $slug ]))
		{
			unset( $similars[ $slug ]);
		}

		// $itx_repo = app( ITXInterface::class );
		// $packages = $itx_repo->locationSearchAvailability( $location, "None", "Activities", "2017-11-14", 2 );



		return $this->output( 'discovers.tourism-detail', compact( 'location', 'similars', 'packages', 'bookings', 'date', 'adult') );
	}
}
