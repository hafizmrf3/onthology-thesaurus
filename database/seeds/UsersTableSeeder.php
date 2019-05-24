<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Hafiz Maruf',
            'username' => 'hafizmaruf',
            'email' => 'hafizmrf3@lipi.go.id',
            'password' => bcrypt('hafizmaruf'),            
        ]);

        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin Thesaurus',
            'username' => 'adminthesaurus',
            'email' => 'adminthesaurus@lipi.go.id',
            'password' => bcrypt('rootadmin'),            
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Author Thesaurus',
            'username' => 'authorthesaurus',
            'email' => 'authorthesaurus@lipi.go.id',
            'password' => bcrypt('rootauthor'),            
        ]);



    }
}
