<?php

class ClientController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index() {
    return 'Hello, API';
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create() {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store() {
    $client = new Client;
    $clinet->client_name = Request::get('client_name');
    $clinet->clinet_email = Request::get('client_email');

    // Validation and Filtering is sorely needed!!
    // Seriously, I'm a bad person for leaving that out.

    $client->save();

    return Response::json(array(
                'error' => false,
                'clients' => $client->toArray()), 200
    );
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id) {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id) {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id) {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id) {
    //
  }

}
