<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AllUsersTreeExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return DB::table('user_panels')
            ->leftJoin('tree_panels', 'user_panels.id', '=', 'tree_panels.user_id')
            ->select(
                'user_panels.id as user_id',
                'user_panels.name',
                'user_panels.email',
                'user_panels.mobile',
                'user_panels.city as user_city',
                'user_panels.state as user_state',
                'user_panels.role',
                'user_panels.status',

                'tree_panels.treeName',
                'tree_panels.plantingDate',
                'tree_panels.height',
                'tree_panels.age',
                'tree_panels.health',
                'tree_panels.village',
                'tree_panels.city as tree_city',
                'tree_panels.state as tree_state',
                'tree_panels.country'
            )
            ->orderBy('user_panels.id')
            ->get();
    }

    public function headings(): array
    {
        return [
            'User ID',
            'User Name',
            'Email',
            'Mobile',
            'User City',
            'User State',
            'Role',
            'Status',

            'Tree Name',
            'Planting Date',
            'Height',
            'Age',
            'Health',
            'Village',
            'Tree City',
            'Tree State',
            'Country',
        ];
    }
}
