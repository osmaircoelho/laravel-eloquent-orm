<?php

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class ClientProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    /** @var Collection $clients */
	    $clients = \App\Models\Client::all();
	    $clients->each(function($client){
		   $clientProfile = factory(\App\Models\ClientProfile::class)->make();
		   $client->clientProfile()->create($clientProfile->toArray());
	    });

	   /* $countClients = $clients->count();

	    $clientProfile = factory(\App\Models\ClientProfile::class, $countClients)->make();
	    $clientProfile->each(function($clientProfiles) use($clients){
	    	$clientProfiles->client_id = $clients->random()->id;
	    	$clientProfiles->save();
	    });*/



    }
}
