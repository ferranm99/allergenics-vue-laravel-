<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'email' => 'carl@16hands.co.nz',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jacyOKFW7MfAPvf84tS5J.XwRhogZHeskMsF/m/m89jjOXk2IPFoy',
                'type' => 'PRACTITIONER',
                'can_pay_on_account' => 0,
                'first_name' => 'Carl',
                'last_name' => 'Bowden',
                'address_line1' => NULL,
                'address_line2' => NULL,
                'city' => NULL,
                'postcode' => NULL,
                'country' => 'NZ',
                'phone' => NULL,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-10 09:24:35',
                'updated_at' => '2022-03-10 09:30:20',
                'cart_session_id' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'email' => 'smijuljd@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8CdiYKSVlp/fl6YdPPW.3ejfXQDvGKl7rL.ldeIFki3o2CMzB0Iq.',
                'type' => 'PUBLIC',
                'can_pay_on_account' => 0,
                'first_name' => 'Dragana',
                'last_name' => 'Smijulj',
                'address_line1' => NULL,
                'address_line2' => NULL,
                'city' => NULL,
                'postcode' => NULL,
                'country' => 'NZ',
                'phone' => NULL,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-02 00:01:02',
                'updated_at' => '2022-04-02 00:01:02',
                'cart_session_id' => NULL,
            ),
            2 => array(
                'id' => 3,
                'email' => 'natasha@allergenics.co.nz',
                'email_verified_at' => null,
                'password' => '$2y$10$jacyOKFW7MfAPvf84tS5J.XwRhogZHeskMsF/m/m89jjOXk2IPFoy',
                'type' => 'PRACTITIONER',
                'can_pay_on_account' => 1,
                'first_name' => 'Natasha',
                'last_name' => 'Carter',
                'address_line1' => null,
                'address_line2' => null,
                'city' => null,
                'postcode' => null,
                'country' => 'NZ',
                'phone' => null,
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'created_at' => '2022-04-02 00:01:02',
                'updated_at' => '2022-04-02 00:01:02',
                'cart_session_id' => null,
            ),
        ));


    }
}
