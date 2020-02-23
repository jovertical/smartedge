<?php

use App\Announcement;
use Illuminate\Database\Seeder;

class AnnouncementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Announcement::create([
            'name' => 'Sample Announcement',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, alias suscipit. Ex, tempore quas consequuntur inventore corrupti voluptatibus sequi expedita hic laborum optio perferendis praesentium rem odio quo. Sunt, possimus?',
        ]);
    }
}
