<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\RoleCollection;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(): RoleCollection
    {
        return new RoleCollection(Role::all());
    }
}
