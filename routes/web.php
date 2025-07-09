<?php

use Illuminate\Support\Facades\Route;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/rfq', function () {
    return view('rfq');
})->name('rfq');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/items', function () {
    $items = Item::with('employer')->simplePaginate(5);
    return view('items.index', ['items' => $items]);
})->name('items.index');

Route::get('/items/create', function () {
    return view('items.create');
})->name('items.create');

Route::post('/items', function (Request $request) {
    $request->validate([
        'title' => 'required|string|max:255',
        'salary' => 'required|numeric',
        'employer_id' => 'required|exists:employers,id',
    ]);
    Item::create([
        'title' => $request->input('title'),
        'salary' => $request->input('salary'),
        'employer_id' => $request->input('employer_id')
    ]);
    return redirect()->route('items.index');
})->name('items.store');

Route::get('/items/{id}/edit', function ($id) {
    $item = Item::findOrFail($id);
    return view('items.edit', ['item' => $item]);
})->name('items.edit');

Route::get('/items/{id}', function ($id) {
    $item = Item::with('employer')->findOrFail($id);
    return view('items.show', ['item' => $item]);
})->name('items.show');

Route::patch('/items/{id}', function ($id, Request $request) {
    $request->validate([
        'title' => 'required|string|max:255',
        'salary' => 'required|numeric'
    ]);
    $item = Item::findOrFail($id);
    $item->update([
        'title' => $request->input('title'),
        'salary' => $request->input('salary'),
    ]);
    return redirect()->route('items.show', $item->id);
})->name('items.update');

Route::delete('/items/{id}', function ($id) {
    $item = Item::findOrFail($id);
    $item->delete();
    return redirect()->route('items.index');
})->name('items.destroy');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
