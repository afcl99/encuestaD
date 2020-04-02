<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $hasher = new DefaultPasswordHasher();
        $contraseñaCifrada = $hasher->hash("123");

        $faker = Faker\Factory::create();
        
        $data = [];
        
        
        $data[] = 
            [
                'username'   => 'afcl',
                'first_name' => 'Andres',
                'last_name'  => 'Claros',
                'password'   => $contraseñaCifrada,
                'role'       => 'admin',
                'active'     => true,
                'created'=>date("Y-m-d H:i:s"),
                'modified'=>date("Y-m-d H:i:s")
            ];
            $faker = Faker\Factory::create();
        for ($i = 0; $i < 99; $i++) {
            $data[] = [
                'username'      => $faker->userName,
                'first_name'    => $faker->firstName,
                'last_name'     => $faker->lastName,
                'password'      => sha1($faker->password),
                'role'       => 'user',
                'active'     => true,
                'created'=>date("Y-m-d H:i:s"),
                'modified'=>date("Y-m-d H:i:s")
            ];
        }
        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
