<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('candidates')->insert(
        	/* president */
        	[
        	'portfolios_id' => 1,
        	'name' => "AUGUSTINE AKAGRI",
        	'index' => "CCN/19/010",
        	 'image' => "augustineA.jpeg",
        	 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);

         DB::table('candidates')->insert(
            /* president */
            [
            'portfolios_id' => 1,
            'name' => "JOSEPH KOJO ERBAH",
            'index' => "CCN/19/042",
             'image' => "josephK.jpeg",
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);




        /* general secretary */

           DB::table('candidates')->insert(
            
            [
            'portfolios_id' => 2,
            'name' => "ADONGO EUGENE",
            'index' => "PON/19/006",
             'image' => "eugeneA.jpeg",
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);


    

     DB::table('candidates')->insert(
            
            [
            'portfolios_id' => 2,
            'name' => "APPIAH GRACE DWOMOH",
            'index' => "PON/19/026",
             'image' => "graceD.jpeg",
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);


     
    


        /* treasurer */

         DB::table('candidates')->insert(
            
            [
            'portfolios_id' => 3,
            'name' => "ATTAKORA RITA SCHOLASTICA",
            'index' => "PON/19/033",
             'image' => "ritaA.jpeg",
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);


        DB::table('candidates')->insert(
            
            [
            'portfolios_id' => 3,
            'name' => "ASANTEWAA BEATRICE",
            'index' => "CCN/19/024",
             'image' => "beatriceA.jpeg",
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);




        /* PRO */

        DB::table('candidates')->insert(
            
            [
            'portfolios_id' => 4,
            'name' => "ARHIN MICHAEL",
            'index' => "PON/19/028",
             'image' => "michaelA.jpeg",
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);




        
        /* library commissioner */

        DB::table('candidates')->insert(
            
            [
            'portfolios_id' => 5,
            'name' => "MOHAMMED DIANA",
            'index' => "CCN/19/060",
             'image' => "dianaM.jpeg",
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);


        DB::table('candidates')->insert(
            
            [
            'portfolios_id' => 5,
            'name' => "ABDALLAH JAMES",
            'index' => "PON/19/002",
             'image' => "jamesA.jpeg",
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
       



          
        /* sports commissioner */

        DB::table('candidates')->insert(
            
            [
            'portfolios_id' => 6,
            'name' => "BOAMAAH SAMUEL",
            'index' => "CCN/19/032",
             'image' => "samuelB.jpeg",
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);


           /* sports commissioner */

           DB::table('candidates')->insert(
            
            [
            'portfolios_id' => 7,
            'name' => "SAGOE DANIEL",
            'index' => "CCN/19/076",
             'image' => "daniel.jpeg",
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
             'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);


       


    }
}
