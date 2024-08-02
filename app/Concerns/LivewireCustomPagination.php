<?php

namespace App\Concerns;

use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

trait LivewireCustomPagination
{
    use WithPagination;

    public $page = 1;
    public $search = '';
    public $perPage = 10;
    public $sortAsc = false;

    public function getQueryString()
    {
        $queryString = method_exists($this, 'queryString')
            ? $this->queryString()
            : $this->queryString;

        return array_merge([
            'page' => ['except' => 1],
            'search' => ['except' => ''],
            'perPage' => ['except' => 10],
            'sortAsc' => ['except' => false],
        ], $queryString);
    }

    public function sortBy($field)
    {
        $this->reset('page');

        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function updatedSearch()
    {
        $this->reset('page');
    }

    public function updatedStatus()
    {
        $this->reset('page');
    }

    public function updatedPerPage()
    {
        $this->reset('page');
    }

    public function resetComponent()
    {
        $this->reset();
    }

    public function paginate($data)
    {
        $this->page = Paginator::resolveCurrentPage() ?? 1;

        $data = new LengthAwarePaginator(
            $data->forPage($this->page, $this->perPage),
            $data->count(),
            $this->perPage,
            $this->page,
            [
                'path' => Paginator::resolveCurrentPath()
             ]
        );

        return $data;
    }

    public function setPerPage($pages)
    {
        $this->perPage = $pages;
    }

    public function setSortAsc($value)
    {
        $this->sortAsc = $value;
    }
}
