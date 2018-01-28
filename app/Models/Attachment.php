<?php

namespace App\Models;

class Attachment extends BaseModel
{
	protected $table = 'am_attachments_';

	use Traits\StandardTrait,
		Traits\FileTrait;
}