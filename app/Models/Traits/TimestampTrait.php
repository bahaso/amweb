<?php

namespace App\Models\Traits;

use Carbon\Carbon;

trait timestampTrait
{
	public function timeDiffForHuman( $col = 'created_at' )
	{
		$now  = Carbon::now();
		$date = new Carbon( $this->$col );

		$sec_diff = $now->diffInSeconds($date);
		return $now->subSeconds( $sec_diff )->diffForHumans();
	}
}