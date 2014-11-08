<?php

class AuthorsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /authors
	 *
	 * @return Response
	 */
	public function index()
	{
		return Author::all();
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /authors
	 *
	 * @return Response
	 */
	public function store()
	{
        return Author::create(Input::all());
	}

	/**
	 * Display the specified resource.
	 * GET /authors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Author::find($id);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /authors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /authors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return Author::find($id)->delete();
	}

}