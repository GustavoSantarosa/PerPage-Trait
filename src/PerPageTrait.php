<?php

namespace QuantumTecnology\PerPageTrait;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

trait PerPageTrait
{
    protected int $perPage;
    protected bool $paginationEnabled = true;

    public function getPerPage(): int
    {
        $this->perPage = request()->get('per_page', config('perpage.max_per_page'));

        if($this->perPage > config('perpage.max_per_page')) {
            $this->perPage = config('perpage.max_per_page');
        } elseif($this->perPage < config('perpage.min_per_page')) {
            $this->perPage = config('perpage.min_per_page');
        }

        return $this->perPage;
    }

    public function disablePagination(): self
    {
        $this->paginationEnabled = false;

        return $this;
    }

    public function result(Builder $query): LengthAwarePaginator | Collection
    {
        return $this->paginationEnabled ? $query->paginate($this->getPerPage()) : $query->get();
    }
}
