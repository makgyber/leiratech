<?php

namespace App\Http\Livewire;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;

class UsersTable extends LivewireDatatable
{
    public $model = User::class;
    public $complex = true;

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

            DateColumn::name('created_at')
                ->label('Created at'),

                Column::delete()
        ];
    }
}