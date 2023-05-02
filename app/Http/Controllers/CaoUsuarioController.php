<?php

namespace App\Http\Controllers;

use App\Repositories\CaoUsuarioRepository;
use App\Http\Requests\CaoUsuarioRequest;
use App\Models\CaoUsuario;
use Illuminate\Http\Request;


class CaoUsuarioController extends Controller
{
    protected $repository;

    public function __construct(CaoUsuarioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $cao_usuarios = $this->repository->getAllWithPermissaoSistema()
            ->load(['caoOs.caoFaturas']);
        return view('cao_usuarios.index', compact('cao_usuarios'));
    }

    public function create()
    {
        return view('cao_usuarios.create');
    }

    public function store(CaoUsuarioRequest $request)
    {
        $data = $request->validated();
        $cao_usuario = $this->repository->create($data);

        return redirect()->route('cao_usuarios.index')->with('success', 'CaoUsuario created successfully.');
    }

    public function show(CaoUsuario $cao_usuario)
    {
        return view('cao_usuarios.show', compact('cao_usuario'));
    }

    public function edit(CaoUsuario $cao_usuario)
    {
        return view('cao_usuarios.edit', compact('cao_usuario'));
    }

    public function update(CaoUsuarioRequest $request, CaoUsuario $cao_usuario)
    {
        $data = $request->validated();
        $this->repository->update($cao_usuario->id, $data);

        return redirect()->route('cao_usuarios.index')->with('success', 'CaoUsuario updated successfully.');
    }

    public function destroy(CaoUsuario $cao_usuario)
    {
        $this->repository->delete($cao_usuario->id);
        return redirect()->route('cao_usuarios.index')->with('success', 'CaoUsuario deleted successfully.');
    }
}
