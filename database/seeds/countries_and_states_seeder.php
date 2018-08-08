<?php

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\State;

class countries_and_states_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country')->delete();
        DB::table('state')->delete();
        $json = File::get('database/country-and-state.json');
        $data = json_decode($json);

        foreach($data as $obj) {
            $country = Country::create(array(
                'name' => $obj->country
            ));

            foreach($obj->states as $state) {
                State::create(array(
                    'id_country' => $country->id,
                    'name' => $state
                ));    
            }
        }
    }
}
