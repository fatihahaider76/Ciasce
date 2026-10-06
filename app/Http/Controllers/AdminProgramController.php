<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class AdminProgramController extends Controller
{
    private string $uploadDir = 'uploads/programs';

    public function index()
    {
        $programs = Program::latest()->get();
        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.programs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp,gif|max:4096',
        ]);

        $data['image'] = $this->handleUpload($request);

        Program::create($data);

        return redirect()->route('admin.programs.index')->with('success', 'Program added successfully.');
    }

    public function edit(Program $program)
    {
        return view('admin.programs.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        $data = $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp,gif|max:4096',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($program->image);
            $data['image'] = $this->handleUpload($request);
        } else {
            unset($data['image']);
        }

        $program->update($data);

        return redirect()->route('admin.programs.index')->with('success', 'Program updated successfully.');
    }

    public function destroy(Program $program)
    {
        $this->deleteImage($program->image);
        $program->delete();

        return redirect()->route('admin.programs.index')->with('success', 'Program deleted successfully.');
    }

    private function handleUpload(Request $request): ?string
    {
        if (! $request->hasFile('image')) {
            return null;
        }

        $file = $request->file('image');
        $name = time() . '_' . preg_replace('/[^A-Za-z0-9._-]/', '', $file->getClientOriginalName());
        $file->move($this->webRoot() . '/' . $this->uploadDir, $name);

        return $this->uploadDir . '/' . $name;
    }

    private function deleteImage(?string $path): void
    {
        $full = $this->webRoot() . '/' . $path;
        if ($path && file_exists($full)) {
            @unlink($full);
        }
    }

    /**
     * Resolve the real web/document root (works whether the app's public/
     * folder is the docroot, or its contents were flattened into public_html).
     */
    private function webRoot(): string
    {
        $docRoot = $_SERVER['DOCUMENT_ROOT'] ?? '';
        if ($docRoot !== '' && is_dir($docRoot)) {
            return rtrim(str_replace('\\', '/', $docRoot), '/');
        }
        return rtrim(str_replace('\\', '/', public_path()), '/');
    }
}
