<?php

namespace App\Livewire\RolesAndPermissions\Concerns;

use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

trait RolesAndPermissionsCustomPagination
{
    use WithPagination;

    public $rolePage = 1;
    public $roleSearch = '';
    public $rolePerPage = 10;
    public $roleSortAsc = false;

    public function getRoleQueryString()
    {
        $roleQueryString = method_exists($this, 'roleQueryString')
            ? $this->queryString()
            : $this->queryString;

        return array_merge([
            'rolePage' => ['except' => 1],
            'roleSearch' => ['except' => ''],
            'rolePerPage' => ['except' => 10],
            'roleSortAsc' => ['except' => false],
        ], $roleQueryString);
    }

    public function roleSortBy($field)
    {
        $this->reset('rolePage');

        if ($this->roleSortField === $field) {
            $this->roleSortAsc = ! $this->roleSortAsc;
        } else {
            $this->roleSortAsc = true;
        }

        $this->roleSortField = $field;
    }

    public function updatedRoleSearch()
    {
        $this->reset('rolePage');
    }

    public function updatedRoleStatus()
    {
        $this->reset('rolePage');
    }

    public function updatedRolePerPage()
    {
        $this->reset('rolePage');
    }

    public function resetRoleComponent()
    {
        $this->reset();
    }

    public function rolePaginate($data)
    {
        $this->rolePage = Paginator::resolveCurrentPage() ?? 1;

        $data = new LengthAwarePaginator(
            $data->forPage($this->rolePage, $this->rolePerPage),
            $data->count(),
            $this->rolePerPage,
            $this->rolePage,
            [
                'path' => Paginator::resolveCurrentPath()
             ]
        );

        return $data;
    }

    public function setPerPage($pages)
    {
        $this->rolePerPage = $pages;
    }

    public function setSortAsc($value)
    {
        $this->roleSortAsc = $value;
    }
}
