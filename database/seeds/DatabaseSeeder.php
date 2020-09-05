<?php

use App\Category;
use App\Domaine;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

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
            'nom' => 'cat_1',
        ]);
        Category::create([
            'nom' => 'cat_2',
        ]);
        Category::create([
            'nom' => 'cat_3',
        ]);
        Domaine::create([
            'nom' => 'dom_1',
        ]);
        Domaine::create([
            'nom' => 'dom_2',
        ]);
        Domaine::create([
            'nom' => 'dom_3',
        ]);

        factory(App\Event::class , 20)->create();

    }
}
