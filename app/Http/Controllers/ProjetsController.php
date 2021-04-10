<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Projets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ProjetsController extends Controller
{
    public function index()
    {
        $projets = Projets::all();

        return Inertia::render('Projets/Index', [
            'projets' => $projets 
        ]);
    }

    public function create()
    {
        $projets = Projets::all();

        return Inertia::render('Projets/Create', [
            'projets' => $projets 
        ]);
    }

    public function store(Request $request) {
        $projets = Projets::all();

        Projets::create($request->all());
    }

    public function edit($id) {
        $projet = Projets::findOrFail($id);

        return Inertia::render('Projets/Edit', [
            'projet' => $projet
        ]);
    }

    public function update($id, Request $request) {
        $projet = Projets::findOrFail($id);

        $projet->update($request->all());

        return redirect()->route('projets.index');
    }
}


// public function edit($id)
// {
//     $post = Post::findOrFail($id);

//     return Inertia::render('Blog/BlogEdit', [
//         'post' => $post
//     ]);
// }

// public function update($id, Request $request)
// {
//     $post = Post::findOrFail($id);

//     $this->validate($request, [
//         'name'      => ['required'],
//         'slug'      => ['required', 'unique:posts,id,' . $post->id ],
//         'content'   => ['required'],
//         'published' => ['required']
//     ]);

//     $post->update($request->only('name', 'slug', 'content', 'published'));

//     return redirect()->route('blog.index');

// }
