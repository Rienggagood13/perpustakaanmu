<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BorrowingController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::with(['user', 'book'])->get();
        return Inertia::render('Borrowings/Index', ['borrowings' => $borrowings]);
    }

    public function create()
    {
        $users = User::all();
        $books = Book::all();
        return Inertia::render('Borrowings/Create', compact('users', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
            'borrowed_at' => 'required|date',
            'return_at' => 'nullable|date|after_or_equal:borrowed_at',
        ]);

        Borrowing::create($request->all());

        return redirect()->route('borrowings.index');
    }

    public function edit(Borrowing $borrowing)
    {
        $users = User::all();
        $books = Book::all();
        return Inertia::render('Borrowings/Edit', [
            'borrowing' => $borrowing,
            'users' => $users,
            'books' => $books,
        ]);
    }

    public function update(Request $request, Borrowing $borrowing)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
            'borrowed_at' => 'required|date',
            'return_at' => 'nullable|date|after_or_equal:borrowed_at',
        ]);

        $borrowing->update($request->all());

        return redirect()->route('borrowings.index');
    }

    public function destroy(Borrowing $borrowing)
    {
        $borrowing->delete();
        return redirect()->route('borrowings.index');
    }
}
