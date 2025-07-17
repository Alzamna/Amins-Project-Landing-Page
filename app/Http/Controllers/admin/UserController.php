<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index()
    {
        try {
            $users = User::latest()->paginate(10);
            return view('admin.users.index', compact('users'));
        } catch (\Exception $e) {
            Log::error('Error in UserController@index: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error loading users: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        try {
            // Debug: Log request data
            Log::info('UserController@store called with data:', $request->all());

            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
                'role' => 'required|in:admin,user',
            ]);

            Log::info('Validation passed');

            $userData = [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role' => $validated['role'],
                'is_active' => $request->has('is_active') ? 1 : 0,
                'email_verified_at' => now(),
            ];

            Log::info('Creating user with data:', $userData);

            $user = User::create($userData);

            Log::info('User created successfully:', ['id' => $user->id, 'email' => $user->email]);

            return redirect()->route('admin.users.index')
                ->with('success', 'User "' . $user->name . '" created successfully.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation error in UserController@store:', $e->errors());
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        } catch (\Exception $e) {
            Log::error('Error in UserController@store: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Error creating user: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Display the specified user.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, User $user)
    {
        try {
            // Debug: Log request data
            Log::info('UserController@update called for user ID: ' . $user->id, $request->all());

            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique('users')->ignore($user->id),
                ],
                'role' => 'required|in:admin,user',
                'password' => 'nullable|string|min:6|confirmed',
            ]);

            Log::info('Validation passed for user update');

            $updateData = [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'role' => $validated['role'],
                'is_active' => $request->has('is_active') ? 1 : 0,
            ];

            // Update password only if provided
            if ($request->filled('password')) {
                $updateData['password'] = Hash::make($validated['password']);
                Log::info('Password will be updated for user ID: ' . $user->id);
            }

            Log::info('Updating user with data:', $updateData);

            $user->update($updateData);

            Log::info('User updated successfully:', ['id' => $user->id, 'email' => $user->email]);

            return redirect()->route('admin.users.index')
                ->with('success', 'User "' . $user->name . '" updated successfully.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation error in UserController@update:', $e->errors());
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        } catch (\Exception $e) {
            Log::error('Error in UserController@update: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Error updating user: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy(User $user)
    {
        try {
            // Prevent self-deletion
            if ($user->id === auth()->id()) {
                return redirect()->route('admin.users.index')
                    ->with('error', 'You cannot delete your own account.');
            }

            $userName = $user->name;
            $user->delete();

            Log::info('User deleted successfully:', ['id' => $user->id, 'name' => $userName]);

            return redirect()->route('admin.users.index')
                ->with('success', 'User "' . $userName . '" deleted successfully.');

        } catch (\Exception $e) {
            Log::error('Error in UserController@destroy: ' . $e->getMessage());
            return redirect()->route('admin.users.index')
                ->with('error', 'Error deleting user: ' . $e->getMessage());
        }
    }
}