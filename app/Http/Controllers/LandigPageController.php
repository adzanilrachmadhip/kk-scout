<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Mitra;
use App\Models\Staff;
use App\Models\Article;
use App\Models\Product;
use App\Models\Partnership;
use Illuminate\Http\Request;
use App\Models\ResearchField;

class LandigPageController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();
        $researchs = ResearchField::where('is_active', true)
            ->orderBy('order')
            ->orderBy('name')
            ->get();
        $about = Page::findOrFail(1);
        $mitras = Mitra::all();
        $kerjasamas = Partnership::all();
        return view('index', compact('about', 'researchs', 'kerjasamas', 'mitras' ,'products'));
    }

    public function tentang()
    {
        $about = Page::findOrFail(1);
        return view('tentang', compact('about'));
    }

    public function fasilitas()
    {
        $about = Page::findOrFail(1);
        return view('fasilitas', compact('about'));
    }

    public function penelitian()
    {
        $researchs = ResearchField::where('is_active', true)
            ->orderBy('order')
            ->orderBy('name')
            ->get();
        return view('penelitian', compact('researchs'));
    }

    public function pengabdian()
    {
        $pengabdian = Product::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('pengabdian', compact('pengabdian'));
    }

    public function mitra()
    {
        $mitras = Mitra::all();
        $kerjasamas = Partnership::all();
        return view('mitra', compact('mitras', 'kerjasamas'));
    }

    public function staff()
    {
        $leaders = Staff::where('position_id', 1)->get();
        $employees = Staff::where('position_id', 2)->get();
        return view('employee', compact('leaders', 'employees'));
    }
}