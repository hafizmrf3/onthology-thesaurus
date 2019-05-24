<?php

namespace App\Http\Controllers\Admin;

use App\Thesaurus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

use Rap2hpoutre\FastExcel\FastExcel;



class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.import.index');
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //import excel with fastexcel
        set_time_limit(0);
        ini_set('memory_limit','512M');
        $items = (new FastExcel)->import('thesaurus.xlsx', function ($line) {
            return Thesaurus::create([
                'id' => $line['ID'],
                'mt' => $line['MT'],
                'sn' => $line['SN'],
                'uf' => $line['UF'],
                'use' => $line['USE'],
                'bt' => $line['BT'],
                'nt' => $line['NT'],
                'it' => $line['IT'],
                'so' => $line['SO'],
                'de' => $line['DE'],
                'ko' => $line['KO'],
                'ana' => $line['ANA'],
                'tgl' => $line['TGL']               
                
            ]);
        });

        Toastr::success('Files Successfully Imported :)','Success');
        return view('admin.dashboard');


    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
