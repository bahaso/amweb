<?php

namespace App\Models;

class PostTravel extends BaseModel
{
	protected $table = 'am_post_travels';

	use Traits\StandardTrait,
		Traits\FileTrait;
}