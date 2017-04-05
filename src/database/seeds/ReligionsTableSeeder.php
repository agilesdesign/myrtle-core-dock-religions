<?php

use Illuminate\Database\Seeder;
use Myrtle\Core\Religions\Models\Religion;

class ReligionsTableSeeder extends Seeder
{
	protected $religions = ['Christian', 'Jewish', 'Buddhist'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		 collect($this->religions)->each(function($item, $key){
			Religion::updateOrCreate(['name' => $item]);
		});
    }
}
