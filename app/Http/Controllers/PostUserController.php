<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Repositories\PostRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Estado;
use App\Models\Post;
use App\User;

class PostUserController extends AppBaseController
{
    /** @var  PostRepository */
    private $postRepository;

    public function __construct(PostRepository $postRepo)
    {
        $this->postRepository = $postRepo;
    }

    /**
     * Display a listing of the Post.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $posts = Post::orderby('id','desc')->paginate(4);
        //$post = Post::find($id);
        $post_derecha = Post::get()->take(4);
        return view('ux.post.index', compact('posts','post_derecha'));

/* 
        //$posts = $this->postRepository->all();
        $posts = Post::orderby('id','desc')->paginate(10);
        $post_derecha = Post::get()->take(4);

        return view('ux.post.index', compact('posts', 'post_derecha')); */
    }

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */
    public function create()
    {

        $estados =Estado::pluck('nombre','id');
        //$users =User::pluck('name','id');
        return view('ux.post.create',compact('estados'));
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePostRequest $request
     *
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $input = $request->all();

        $post = $this->postRepository->create($input);

        Flash::success('Post saved successfully.');

        return redirect(route('blog.index'));
    }

    /**
     * Display the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {


        
        $primer_post = Post::get()->take(1);
        $post = Post::find($id);
        $post_derecha = Post::get()->take(4);
        return view('ux.post.show', compact('post','post_derecha', 'primer_post'));


        /* $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }
 */
        //return view('ux.post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post = $this->postRepository->find($id);
        $estados =Estado::pluck('nombre','id');

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('ux.post.edit', compact('post', 'estados'));
    }

    /**
     * Update the specified Post in storage.
     *
     * @param int $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostRequest $request)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('blog.index'));
        }

        $post = $this->postRepository->update($request->all(), $id);

        Flash::success('Post updated successfully.');

        return redirect(route('blog.index'));
    }

    /**
     * Remove the specified Post from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('blog.index'));
        }

        $this->postRepository->delete($id);

        Flash::success('Post deleted successfully.');

        return redirect(route('blog.index'));
    }
}
