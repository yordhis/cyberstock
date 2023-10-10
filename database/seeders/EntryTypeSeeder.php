<?php

namespace Database\Seeders;

use App\Models\EntryType;
use Illuminate\Database\Seeder;

class EntryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entrys = [
            ["code"=>"0001", "name"=>"Compra"],
            ["code"=>"0002", "name"=>"Devolución"]
        ];

        foreach ($entrys as $entry) {
            $entryType = new EntryType();
            $entryType->code = $entry["code"];
            $entryType->name = $entry["name"];
            $entryType->save();
        }
    }
}
