<?php

use Illuminate\Database\Seeder;
use App\Log;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
          'user_name' =>'TestUser01',
          'comment' => 'Comment01',
      ];
      $logs = new Log;
      $logs->fill($param)->save();

      $param = [
          'user_name' =>'TestUser02',
          'comment' => 'Comment02',
      ];
      $logs = new Log;
      $logs->fill($param)->save();

      $param = [
          'user_name' =>'TestUser03',
          'comment' => 'Comment03',
      ];
      $logs = new Log;
      $logs->fill($param)->save();
    }
}
