<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::create('cars', function (Blueprint $table){
            $json = File::get('database/data/car-list.json');
            $data = json_decode($json);
            foreach ($data as $obj){
                foreach ($obj->models as $model){
                    Car::create(array(
                        'brand'=>$obj->brand,
                        'model'=>$model
                    ));
                }

            }
        });
    }
}
