<?php

namespace App\Models;

class PostDiscover extends BaseModel
{
	protected $table = 'am_post_discovers';

	use Traits\StandardTrait,
		Traits\FileTrait;
}

