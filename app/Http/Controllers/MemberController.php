<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\ClassModel; 

class MemberController extends Controller
{

    public function index()
    {
        return view('member');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'wa_number' => 'required|string|max:15',
            'email' => 'required|email|unique:members,email',
            'membership' => 'required|in:daily,monthly,annual',
            'payment_method' => 'required|in:credit_card,bank_transfer,digital_wallet',
            'terms' => 'accepted',
            'health' => 'accepted',
        ]);
    
        Member::create($validatedData);
    
        return redirect()->back()->with('success', 'Registration successful!');    
    }

    /**
     * Remove the specified class from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $class = ClassModel::findOrFail($id);

        // Optionally, authorize the deletion
        // $this->authorize('delete', $class);

        $class->delete();

        return redirect()->back()->with('success', 'Class deleted successfully.');
    }
}

