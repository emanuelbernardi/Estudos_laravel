<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * @return View
     * está view retorna a lista de clientes
     * 
     */
    public function index(): View
    {
        
        $clients = Client::get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    /**
     * @return View
     * este método retorna um view com os detalhes sobre o Clientes
     * 
     */
    public function show(int $id): View
    {
         $client = Client::find($id);

         return view('clients.show', [
            'client' => $client
        ]);    
    }

    /**
     * Retorna um view com um formulario para a criação de clientes
     * @return View
     */
    public function create(): View
    {
        return view('clients.create');
    }

    /**
     * este método pega os dados passados nos formulario e adiciona como um novo cliente
     * no banco de dados 
     *após isso ele redireciona para a pagina de clientes
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $dados = $request->except('_token');

        Client::create($dados);

        return redirect('/Clients');
    }

    /**
     *este método acha o id do cliente escolhido 
     *e retorna ele para uma view para edição das infos do cliente 
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $client = Client::find($id);

        return view('clients.edit', [
            'client' => $client 
        ]);

    }

    /**
     * 
     * Neste método é pego a alteração dos dados e atualizado no banco
     *após isso ele redireciona para a pagina de clientes
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $client = Client::find($id);

        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);

        return redirect('/Clients');

    }

    /**
     * neste método é achado e deleletado o registro do cliente no banco
     *após isso ele redireciona para a pagina de clientes
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $client = Client::find($id);
        $client->delete();
        
        return redirect('/Clients');
    }
}
