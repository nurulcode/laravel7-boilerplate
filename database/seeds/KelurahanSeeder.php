<?php

use Illuminate\Support\Facades\DB;
use Flynsarmy\CsvSeeder\CsvSeeder;

class KelurahanSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'kelurahans';
        $this->filename = base_path().'/database/seeds/data/master/wilayah/kelurahan.csv';
        $this->mapping = [
            0 => 'id',
            1 => 'kecamatan_id',
            2 => 'nama',
        ];

    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table($this->table)->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        parent::run();
    }
}
