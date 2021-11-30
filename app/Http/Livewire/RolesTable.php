<?php

namespace App\Http\Livewire;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Spatie\Permission\Models\Role;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;

class RolesTable extends LivewireDatatable
{
    

    public $model = Role::class;

    public function columns()
    {
        
        return [
            NumberColumn::name('id')
                ->label('ID'),

            Column::name('name')
                ->label('Name')
                ->searchable()
                ->filterable(),
                

            Column::name('guard_name')
                ->label('Guard Name')
                ->searchable(),

            Column::delete()

        ];
    }
}