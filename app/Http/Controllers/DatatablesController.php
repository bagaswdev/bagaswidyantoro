<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Yajra\DataTables\Facades\DataTables;

class DatatablesController extends Controller
{
    public function users()
    {
        return DataTables::of(User::query())
            ->addColumn('action', function ($row) {
                $encryptedId = Crypt::encrypt($row->id);
                return '<button type="button" class="btn btn-label-primary" data-bs-toggle="modal" data-bs-target="#modalSelengkapnya" data-url="' . route('users.show', $encryptedId)  . '"><span class="tf-icons mdi mdi-eye-check me-1"></span>Selengkapnya</button>';
            })
            ->make(true);
    }
}
