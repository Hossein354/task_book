<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::where('user_id', Auth::id())->get();
        return view('list_books', compact('books'));
    }

    public function edit($book_id)
    {
        $book = Book::findOrFail($book_id);
        return view('edit_book', compact('book'));
    }

    public function update(Request $request, int $book_id)
    {

        $validatedData = $request->validate([
            'title' => 'min:2',
            'subject' => 'min:2',
        ]);

        $Book = Book::findOrFail($book_id);

        $updatedBook = $Book->update([
            'title' => $validatedData['title'],
            'subject' => $validatedData['subject'],
        ]);

        if (!$updatedBook) {
            return back()->with('failed', 'کتاب آپدیت نشد!');
        }
        return back()->with('success', 'کتاب آپدیت شد');
    }

    public function delete($book_id)
    {
        $Book = Book::findOrFail($book_id);
        $deletedBook = $Book->delete();

        if (!$deletedBook) {
            return back()->with('failed', 'کتاب حذف نشد، لطفا دوباره امتحان کنید!');
        }

        return back()->with('success', 'کتاب حذف شد');
    }
}
