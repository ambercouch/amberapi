<?php

class ClientTableSeeder extends Seeder {

  public function run() {
    DB::table('clients')->delete();

    User::create(array(
        'client_name' => 'Cathedral Dental Clinic',
        'client_email' => 'info@cathedraldentalclinic.com',
        'client_website' => 'http://www.cathedraldentalclinic.com',
        'client_tel' => '02920555555',
        'client_adderess' => '66 Cathedral Road, Cardiff',
        'client_notes' => 'some client, pah!'
    ));
  }

}
