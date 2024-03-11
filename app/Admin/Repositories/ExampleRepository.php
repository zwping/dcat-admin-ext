<?php

namespace App\Admin\Repositories;

use Dcat\Admin\Repositories\Repository;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;

class ExampleRepository extends Repository {

    public array $data;

    /**
     * 获取Grid表格数据.
     *
     * @param  Grid\Model  $model
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|Collection|array
     */
    public function get(Grid\Model $model){
        // $grid->disablePagination();
        return $this->data ?? [];
    }


    /**
     * 获取详情页面数据.
     *
     * @param  Show  $show
     * @return array|\Illuminate\Contracts\Support\Arrayable
     */
    public function detail(Show $show) {
        return collect($this->data)->where('id', '=', $show->getKey())->first();
    }

}