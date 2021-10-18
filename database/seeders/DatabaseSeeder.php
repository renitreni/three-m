<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\User;
use Silber\Bouncer\Bouncer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  \Silber\Bouncer\Bouncer  $bouncer
     * @return void
     */
    public function run(Bouncer $bouncer)
    {
        // \App\Models\User::factory(10)->create();
        //Initialize Default User
        $user_model = User::create([
            'name'     => 'user',
            'email'    => 'renier.trenuela@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $user = $bouncer->role()->firstOrCreate([
            'name'  => 'user',
            'title' => 'User',
        ]);
        $bouncer->assign($user)->to($user_model);

        // Initialized Admin
        $admin_model = User::create([
            'name'     => 'admin',
            'email'    => 'admin@site.com',
            'password' => Hash::make('password'),
        ]);

        $admin = $bouncer->role()->firstOrCreate([
            'name'  => 'admin',
            'title' => 'Administrator',
        ]);

        $bouncer->assign($admin)->to($admin_model);
        $bouncer->allow($admin)->everything();

        $services = [
            [
                'name'        => 'Protection and Repair or broken glass and scratches',
                'desc'        => 'sample',
                'price'       => 0,
                'promo_price' => 0,
                'is_promo'    => 0,
                'photo'       => null,
            ],
            [
                'name'        => 'Nanoceramic',
                'desc'        => 'sample',
                'price'       => 0,
                'promo_price' => 0,
                'is_promo'    => 0,
                'photo'       => null,
            ],
            [
                'name'        => 'Heat Insulating Shading',
                'desc'        => 'sample',
                'price'       => 0,
                'promo_price' => 0,
                'is_promo'    => 0,
                'photo'       => null,
            ],
            [
                'name'        => 'Sand Protection',
                'desc'        => 'sample',
                'price'       => 0,
                'promo_price' => 0,
                'is_promo'    => 0,
                'photo'       => null,
            ],
            [
                'name'        => 'Car Cooling',
                'desc'        => 'sample',
                'price'       => 0,
                'promo_price' => 0,
                'is_promo'    => 0,
                'photo'       => null,
            ],
            [
                'name'        => 'Polishing with Protection',
                'desc'        => 'sample',
                'price'       => 0,
                'promo_price' => 0,
                'is_promo'    => 0,
                'photo'       => null,
            ],
            [
                'name'        => 'Light Sandbox Removal',
                'desc'        => 'sample',
                'price'       => 0,
                'promo_price' => 0,
                'is_promo'    => 0,
                'photo'       => null,
            ],
            [
                'name'        => 'Rust Protection',
                'desc'        => 'sample',
                'price'       => 0,
                'promo_price' => 0,
                'is_promo'    => 0,
                'photo'       => null,
            ],
            [
                'name'        => 'Car Paint',
                'desc'        => 'sample',
                'price'       => 0,
                'promo_price' => 0,
                'is_promo'    => 0,
                'photo'       => null,
            ],
            [
                'name'        => 'Distinctive Laundry',
                'desc'        => 'sample',
                'price'       => 0,
                'promo_price' => 0,
                'is_promo'    => 0,
                'photo'       => null,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
