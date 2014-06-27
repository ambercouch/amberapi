<?php

class UserTableSeeder extends Seeder {

  public function run() {
    DB::table('users')->delete();

    User::create(array(
        'user_username' => 'richie',
        'user_email' => 'richard@ambercouch.co.uk',
        'user_password' => Hash::make('amberotter1')
    ));

    User::create(array(
        'user_username' => 'louise',
        'user_email' => 'louise@ambercouch.co.uk',
        'user_password' => Hash::make('amberbug12')
    ));
  }

}
