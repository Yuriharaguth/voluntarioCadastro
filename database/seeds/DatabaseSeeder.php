<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    
    protected $toTruncate = ['intitutions', 'volunteers', 'causes'];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        $this->truncateTables();

        // $this->call(UserTableSeeder::class);
        $this->call(IntitutionSeeder::class);
        $this->call(VolunteerSeeder::class);
        $this->call(CauseSeeder::class);
        $this->call(CauseVolunteer::class);
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Model::reguard();
    }
    
    public function truncateTables()
    {
        foreach($this->toTruncate as $table)
        {
            DB::table($table)->truncate();
        }
    }
}
