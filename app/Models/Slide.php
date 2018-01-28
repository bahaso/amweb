<?php

namespace App\Models;

class Slide extends BaseModel
{
	protected $table = 'am_variables_slides';

	use Traits\StandardTrait,
		Traits\FileTrait;

}

