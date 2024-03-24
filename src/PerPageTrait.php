<?php

namespace GustavoSantarosa\PerPageTrait;

trait PerPageTrait
{
    protected int $perPage;

    public function getPerPage(): int
    {
        $this->perPage = request()->get('per_page', env('MAX_PER_PAGE'));

        if($this->perPage > env('MAX_PER_PAGE')) {
            $this->perPage = env('MAX_PER_PAGE');
        } elseif($this->perPage < env('MIN_PER_PAGE')) {
            $this->perPage = env('MIN_PER_PAGE');
        }

        return $this->perPage;
    }
}
