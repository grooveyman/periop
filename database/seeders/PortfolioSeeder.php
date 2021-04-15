<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('portfolios')->insert(
            /* 1 */
            [
           'name' => "President",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]); 

        /* 2 */
         DB::table('portfolios')->insert(
           
           [
           'name' => "General Secretary",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]); 

         /* 3 */
       
        DB::table('portfolios')->insert(
           
          [
           'name' => "Treasurer",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]); 
       
        /* 4 */
       DB::table('portfolios')->insert(
           
          [
           'name' => "PRO",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]);

       /* 5*/ 

       DB::table('portfolios')->insert(
           
          [
           'name' => "Library Commissioner",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]); 

        /* 6*/
        DB::table('portfolios')->insert(
           
          [
           'name' => "Sports Commissioner",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
       ]); 

        /* 7*/
        DB::table('portfolios')->insert(
           
            [
             'name' => "Entertainment Commissioner",
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
         ]); 
  

    }
}
