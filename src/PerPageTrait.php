<?php

namespace GustavoSantarosa\PerPageTrait;

trait PerPageTrait
{
    protected int $perPage = 0;

    public function getPerPage()
    {
        $this->perPage = request()->per_page ?? $this->perPage;
        if ($this->perPage <= 0) {
            $this->perPage = env('DEFAULT_PER_PAGE', 100);
        } elseif ($this->perPage > env('MAX_PER_PAGE', 100)) {
            $this->perPage = env('MAX_PER_PAGE', 100);
        }

        return $this->perPage;
    }
}
