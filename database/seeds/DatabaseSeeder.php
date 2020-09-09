<?php

use App\Category;
use App\Domaine;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'guest']);
        User::create([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
                    ])->assignRole('admin');


        Category::create([
            'nom' => 'féte',
        ]);
        Category::create([
            'nom' => "journee d'etude",
        ]);
        Category::create([

            'nom' => 'conférence',

            'nom' => 'confirence',

        ]);
        Category::create([
            'nom' => 'porte ouverte',
        ]);
        Category::create([
            'nom' => 'séminaire',
        ]);
        Category::create([
            'nom' => 'atelier',
        ]);

        factory(App\Event::class , 10)->create();


        Domaine::create([
            'nom' => 'G.informatique',
        ])->events()->attach(['1','5','6']);
        Domaine::create([
            'nom' => 'G.mechanique',
        ])->events()->attach(['8','10']);
        Domaine::create([
            'nom' => 'G.chimie',
        ])->events()->attach(['2','9','8']);;
        Domaine::create([
            'nom' => 'G.Electrique',
        ])->events()->attach(['4','2','3','7']);


    }
}
