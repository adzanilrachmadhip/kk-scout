<?php

namespace App\Http\Controllers\Admin;

use App\Models\ResearchField;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResearchFieldController extends Controller
{
    public function index()
    {
        $researchFields = ResearchField::all();
        return view('admin.bidang.index', compact('researchFields'));
    }

    public function create()
    {
        return view('admin.bidang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'boolean',
        ]);

        ResearchField::create([
            'name' => $request->name,
            'is_active' => $request->has('is_active'),
            // 'order' => $request->order ?? 0
        ]);

        return redirect()->route('research-fields.index')
            ->with('success', 'Research field created successfully.');
    }

    public function edit(ResearchField $researchField)
    {
        return view('admin.bidang.edit', compact('researchField'));
    }

    public function update(Request $request, ResearchField $researchField)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'is_active' => 'boolean',
            'order' => 'integer'
        ]);

        $researchField->update([
            'name' => $request->name,
            'is_active' => $request->has('is_active'),
            'order' => $request->order ?? 0
        ]);

        return redirect()->route('research-fields.index')
            ->with('success', 'Research field updated successfully.');
    }

    public function destroy(ResearchField $researchField)
    {
        $researchField->delete();
        return redirect()->route('research-fields.index')
            ->with('success', 'Research field deleted successfully.');
    }
}
