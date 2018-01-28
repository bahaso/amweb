<?php

namespace App\Models;

class Sponsor extends BaseModel
{
	protected $table = 'am_variables_sponsors';

	use Traits\StandardTrait,
		Traits\FileTrait;

}

