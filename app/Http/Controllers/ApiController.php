<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Designation;
use App\Department;
use App\AssetType;

class ApiController extends Controller
{
    public function getDesignations()
    {
        return Designation::all();
    }

    public function getDepartment()
    {
        return Department::all();
    }

    public function getAssetTypes()
    {
        return AssetType::all();
    }
}
