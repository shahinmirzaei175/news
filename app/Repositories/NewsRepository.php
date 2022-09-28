<?php

namespace App\Repositories;

use App\Models\Brand;
use App\Models\News;
use App\Repositories\Base\CrudRepository;
use App\Repositories\Interfaces\NewsRepositoryInterface;
use Illuminate\Support\Facades\DB;

class NewsRepository extends CrudRepository implements NewsRepositoryInterface
{
    protected function model(): News
    {
        return new News();
    }

    /**
     * Get list of news
     *
     * @return mixed
     */
    public function get()
    {
        return $this->model()->orderBy('visit','DESC')->get();
    }

    /**
     * Set new Visit
     *
     * @param $id
     * @return void
     */
    public function seen($id)
    {
        DB::table('news')->whereId($id)->increment('visit');
    }

}
