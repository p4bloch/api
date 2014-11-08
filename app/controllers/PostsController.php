<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		// return ['data' => Post::all()];
		
		return Response::json(['data' => Post::with('comments')->get()], 200);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
		return Post::create(Input::all());
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// return Post::find($id);
        try {
		    return Post::findOrFail($id);
        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e){
            return Response::json(['error' => 'Post not found.'], 404);
        }
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		$post->update(Input::all());
		return $post;
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return Post::destroy($id);
	}

}