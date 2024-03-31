<?php

namespace GustavoSantarosa\PerPageTrait;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

trait PerPageTrait
{
    protected int $perPage;
    protected bool $paginationEnabled = true;

    public function getPerPage(): int
    {
        $this->perPage = request()->get('per_page', env('MAX_PER_PAGE', 100));

        if($this->perPage > env('MAX_PER_PAGE', 100)) {
            $this->perPage = env('MAX_PER_PAGE', 100);
        } elseif($this->perPage < env('MIN_PER_PAGE', 1)) {
            $this->perPage = env('MIN_PER_PAGE', 1);
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
