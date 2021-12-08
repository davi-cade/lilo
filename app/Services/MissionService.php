<?php

namespace App\Services;

use App\Repositories\MissionRepository;
use App\Services\AbstractClasses\AbstractService;
use Illuminate\Support\Facades\Auth;


class MissionService extends AbstractService
{
    protected $repository = MissionRepository::class;

    public function store($title, $description, $landmark, $reward, $type_landmark, $type_reward){
        return $this->repository->store($title, $description, $landmark, $reward, $type_landmark, $type_reward);
    }

    public function destroy($id){
        try{
            $this->repository->getById($id);
        }catch (Exception $e) {
            return 'NÃO FOI POSSIVÉL ENCONTRAR ESSE MISSÃO.';
        }

        $ReportService = new ReportService();
        $ReportService->store('Exclusão', $id, 'Mission', Auth::user()->getId());

        $this->repository->destroy($id);
        return 'O MISSÃO FOI DELETADO COM SUCESSO.';
    }

}