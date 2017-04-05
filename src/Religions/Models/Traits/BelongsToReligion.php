<?php

namespace Myrtle\Core\Religions\Models\Traits;

use Myrtle\Religions\Models\Religion;

trait BelongsToReligion
{
	public function religion()
	{
		return $this->belongsTo(Religion::class);
	}
}