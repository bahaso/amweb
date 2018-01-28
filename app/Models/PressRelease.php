<?php

namespace App\Models;

class PressRelease extends BaseModel
{
	protected $table = 'am_attachments_';

	use Traits\StandardTrait,
		Traits\FileTrait;
}