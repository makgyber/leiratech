<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;

class UsersTable extends LivewireDatatable
{
    public $model = User::class;
    public $complex = true;
    public $exportable = true;
    public $beforeTableSlot = 'user-actions';
    public $modal = false;
    public $open = false;

    public function columns()
    {
        return [
            Column::checkbox(),

            Column::name('name')
                ->label('Name')
                ->searchable()
                ->filterable()
                ->editable(),

            Column::name('email')
                ->label('Email')
                ->searchable()
                ->filterable()
                ->editable(),

            Column::name('teams.name')
                ->label('Team')
                ->searchable()
                ->filterable(),

            Column::callback(['id', 'name'], function ($id, $name) {
                return view('table-actions', ['id' => $id, 'name' => $name]);
            })->unsortable()
        ];
    }

    public function deleteSelected(Request $request)
    {

        User::whereIn('id', $this->selected)->delete();
        $this->modal = false;
        $this->refreshLivewireDatatable();
    }

    public function store(Request $request)
    {
        
    }

}