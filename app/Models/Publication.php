<?php

namespace App\Models;

class Publication extends BaseModel
{
	protected $table = 'am_attachments_';

	use Traits\StandardTrait,
		Traits\FileTrait;
}