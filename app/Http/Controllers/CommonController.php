<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class CommonController extends Controller
{

    public function search(Request $request)
    {
        $search = $request->get('term');

        $states = State::query()
            ->where('name', 'like', '%' . $search . '%')
            ->orWhere('code', 'like', '%' . $search . '%')
            ->limit(10)
            ->get(['id', 'name', 'code']);

        return response()->json(
            $states->map(function ($state) {
                return [
                    'label' => $state->name . ' (' . $state->code . ')',
                    'value' => $state->name,
                    'id'    => $state->id,
                ];
            })
        );
    }
}
