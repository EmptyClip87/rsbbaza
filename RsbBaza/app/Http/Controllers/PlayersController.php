<?php

namespace App\Http\Controllers;

use App\Player;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PlayersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $players = Player::paginate(10);
        return view('players.index', compact('players'));
    }

    public function create()
    {
        $player = new Player();

        return view('players.create', compact('player'));
    }

    public function store()
    {
        $newPlayer = $this->validateRequest();
        $newPlayer = $this->formatDates($newPlayer);
        $newPlayer['age'] = Carbon::parse($newPlayer['dob'])->age;
        $player = Player::create($newPlayer);

        $this->storeImage($player);

        return redirect('players/' . $player->id);
    }

    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    public function edit(Player $player)
    {
        return view('players.edit', compact('player'));
    }

    public function update(Player $player)
    {
        $data = $this->validateRequest();
        $data = $this->formatDates($data);
        $player->update($data);
        $this->storeImage($player);

        return redirect('players/' . $player->id);
    }

    public function destroy(Player $player)
    {
        $player->delete();
        return redirect('players');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|string',
            'dob' => 'required',
            'nationality' => 'sometimes|nullable|string',
            'height' => 'sometimes|nullable|numeric',
            'preferred_foot' => 'required',
            'joined' => 'required',
            'signed_from' => 'sometimes',
            'contract_until' => 'required',
            'full_contract_wage' => 'sometimes|nullable|numeric',
            'image' => 'sometimes|file|image|max:5000'
        ]);
    }

    private function formatDates($newPlayer)
    {
        $newPlayer['dob'] = Carbon::createFromFormat('d/m/Y', $newPlayer['dob'])->format('Y-m-d h:m:s');
        $newPlayer['joined'] = Carbon::createFromFormat('d/m/Y', $newPlayer['joined'])->format('Y-m-d h:m:s');
        $newPlayer['contract_until'] = Carbon::createFromFormat('d/m/Y', $newPlayer['contract_until'])->format('Y-m-d h:m:s');

        return $newPlayer;
    }

    private function storeImage($customer)
    {
        if(request()->has('image')) {
            $customer->update([
                'image' => request()->image->store('uploads', 'public')
            ]);

            $image = Image::make(public_path('storage/' . $customer->image))->fit(300, 300);
            $image->save();
        }
    }
}


