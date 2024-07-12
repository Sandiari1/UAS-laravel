<?php

namespace App\Exports;

use App\Models\criteria;
use Maatwebsite\Excel\Concerns\FromView;
use illuminate\Contracts\View\View;
class ExportCriteria implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view():View
    {
        $criteria = criteria::where('user_id', '=', auth()->user()->id)->get();

        return view('criteria-table', ['criteria' => $criteria]);
    }
}
