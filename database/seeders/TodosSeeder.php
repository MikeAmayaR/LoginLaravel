<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

$useradmin=User::create([
	'name' => 'admin Mike',
	'email' => 'Mike@gmail.com',
	'password' => Hash::make('admin'),
	'tipo' => '1',
	]);
            
$user1=User::create([
	'name' => 'usuario Marcos',
	'email' => 'user@gmail.com',
	'password' => Hash::make('admin'),
	'tipo' => '2',
	]);
$user1=User::create([
	'name' => 'usuario Moderador',
	'email' => 'moderador@gmail.com',
	'password' => Hash::make('admin'),
	'tipo' => '3',
	]);
    }
}
