<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;


class TeamsTable extends LivewireDatatable
{
    public $model = Team::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID'),

            Column::name('name')
                ->label('Name')
                ->searchable()
                ->filterable(),
                

            BooleanColumn::name('personal_team')
                ->filterable(),
        ];
    }
}