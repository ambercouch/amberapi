<?php

class ClientController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index() {
    $sort = (Input::get('sort') ? Input::get('sort') : 'client_name');
    $direction = (Input::get('direction') ? Input::get('direction') : 'desc');
    $limit = (Input::get('limit') ? Input::get('limit') : 100);

    $clients = Client::orderBy($sort, $direction)
            ->paginate($limit);


    return Response::json(array(
                'error' => false,
                'clients' => $clients->toArray()), 200
    );
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
//    $clinet->client_name = Request::get('client_name');
//    $clinet->clinet_address = Request::get('client_address');
//    $clinet->clinet_email = Request::get('client_email');
//    $clinet->clinet_tel = Request::get('client_tel');
//    $clinet->clinet_notes = Request::get('client_notes');


    $client->client_name = Request::get('client_name');
    $client->client_address = Request::get('client_address');
    $client->client_email = Request::get('client_email');
    $client->client_tel = Request::get('client_tel');
    $client->client_notes = Request::get('client_notes');
    // Validation and Filtering is sorely needed!!
    // Seriously, I'm a bad person for leaving that out.

    $client->save();


    return Response::json(array(
                'error' => false,
                'test' => 'stuff',
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
    $client = Client::where('id', $id)
            ->take(1)
            ->get();

    return Response::json(array(
                'error' => false,
                'clients' => $client->toArray()), 200
    );
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
