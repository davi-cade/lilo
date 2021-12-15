<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\UserService;
use App\Services\PlayerService;
use App\Services\GroupService;
use App\Services\Pivots\GroupPlayerService;
use App\Models\Player;

use Illuminate\Support\Facades\Auth; 
use Livewire\WithFileUploads;

class CreateGroupsComponent extends Component
{
    use WithFileUploads;

    public $image;
    public $nickname;
    public $title;
    public $description;
    public $participants;

    protected $rules = [
        'title' =>['required', 'string', 'min:5', 'max:255'],
        'description' =>['required', 'string'],
        'image' => ['sometimes', 'image', 'mimes:jpg,jpeg,png,svg,bmp', 'max:5000']
    ];

    public function mount(){
        $this->participants = collect();
    }

    public function render(){
        return view('livewire.create-groups-component', 
        [
            'allPlayers' => Player::when($this->nickname, function($query, $nickname){
                return $query->where('nickname', 'like', "%$nickname%")
                ->where('nickname', '<>', $this->getUserNickname())
                ->orderBy('nickname', 'desc')->get();
            }), 
            'players' => $this->participants->all()
        ]);
    }

    public function getUserNickname(){
        $service = new PlayerService();
        return $service->getByField('user_id', Auth::user()->getId())->nickname;
    }

    public function addPalyer($name){
        $this->participants->push($name);
    }

    public function discardPlayer(){

    }

    public function addParticipants($id){
        $service = new GroupPlayerService();
        foreach($this->participants as $key){
            $service->store($key['id'], $id);
        }
    }

    public function submit(){
        $this->validate();
        $service = new GroupService();
        $admin = new UserService();
        $player = new PlayerService();

        $img = '/img/userProfile/default-group-image.svg';
        $groupDirectory = md5($this->title.strtotime("now"));
        $userDirectory = $admin->getById(Auth::user()->getId())->directory->url_directory;
        if($this->image){
            $img ='/'.'storage/'.($this->image->store('img/'.$userDirectory.'/'.$groupDirectory));
        }

        $group = $service->store($this->title, $this->description, ($player->getByField('user_id', Auth::user()->getId())->getId()), $img, ($userDirectory.'/'.$groupDirectory));
        $this->addParticipants($group->getId());

        return redirect("/group/{$group->getSlug()}");

    }
}
