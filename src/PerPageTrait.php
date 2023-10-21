<?php

namespace GustavoSantarosa\PerPageTrait;

trait PerPageTrait
{
    private static int $DEFAULT_PER_PAGE = env('DEFAULT_PER_PAGE', 100);

    private static int $MAX_PER_PAGE = env('MAX_PER_PAGE', 100);

    protected int $perPage = 0;

    public function getPerPage()
    {
        $this->perPage = request()->per_page ?? $this->perPage;
        if ($this->perPage <= 0) {
            $this->perPage = static::$DEFAULT_PER_PAGE;
        } elseif ($this->perPage > static::$MAX_PER_PAGE) {
            $this->perPage = static::$MAX_PER_PAGE;
        }

        return $this->perPage;
    }
}
