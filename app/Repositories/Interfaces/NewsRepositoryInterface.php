<?php

namespace App\Repositories\Interfaces;


interface NewsRepositoryInterface extends CrudRepositoryInterface
{
    public function seen($id);
}
