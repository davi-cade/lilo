<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use App\Services\AbstractClasses\AbstractService;

use App\Services\DirectoryService;

class UserService extends AbstractService
{
    protected $repository = UserRepository::class;

    public function store($name, $surname, $email, $birth_date, $password, $img, $directory){
        $user  = $this->repository->store($name, $surname, $email, $birth_date, $password);
        $this->createDirectory($img, $directory, $user->getId());
        return $user;
    }

    public function destroy($id){
        try{
            $this->repository->getById($id);
        }catch (Exception $e) {
            return 'NÃO FOI POSSIVÉL ENCONTRAR ESSE USUÁRIOS.';
        }
        $ReportService = new ReportService();
        $ReportService->store('Exclusão', $id, 'User', Auth::user()->getId());

        $this->repository->destroy($id);
        return 'O USUÁRIOS FOI DELETADO COM SUCESSO.';
    }

    public function createDirectory($url_avatar, $url_directory, $directoryable_id){
        $directory = new DirectoryService();
        $directory->store($url_avatar, $url_directory, $directoryable_id, 'App\Models\User');
    }

    public function destroyDirectory($id){
        $directory = new DirectoryService();
        $directory->destroy($id);
    }


}