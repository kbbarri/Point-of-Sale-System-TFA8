<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UserController extends Controller
{
    // Display all users
    public function index()
    {
        $users = User::all();

        return view('users', compact('users'));
    }

    // Show Create User form
    public function create()
    {
        return view('users-create');
    }

    // Save new user
    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:50|unique:users,username',
            'full_name' => 'required|string|max:100',
        ]);

        User::create($validated);

        return redirect()->route('users.index')
            ->with('success', 'User account created successfully!');
    }

    // Show one user using existing edit view
    public function show(User $user)
    {
        return view('users-edit', compact('user'));
    }

    // Show Edit User form
    public function edit(User $user)
    {
        return view('users-edit', compact('user'));
    }

    // Update user and optional avatar
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'username' => [
                'required',
                'string',
                'max:50',
                Rule::unique('users', 'username')->ignore($user->id),
            ],
            'full_name' => 'required|string|max:100',
            'avatar' => 'nullable|image|max:2048',
        ]);

        $oldAvatar = $user->avatar;

        if ($request->hasFile('avatar')) {
            $manager = new ImageManager(new Driver());

            $image = $manager->read(
                $request->file('avatar')->getRealPath()
            );

            $image->scaleDown(300, 300);

            $encoded = $image->toJpeg(85);

            $filename = (string) Str::uuid() . '.jpg';

            $path = 'avatars/' . $filename;

            Storage::disk('public')->put(
                $path,
                (string) $encoded
            );

            $validated['avatar'] = $path;
        }

        $user->update($validated);

        if (
            isset($validated['avatar']) &&
            $oldAvatar &&
            $oldAvatar !== $validated['avatar']
        ) {
            Storage::disk('public')->delete($oldAvatar);
        }

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully!');
    }

    // Delete user and its avatar
    public function destroy(User $user)
    {
        $avatar = $user->avatar;

        $user->delete();

        if ($avatar) {
            Storage::disk('public')->delete($avatar);
        }

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully!');
    }
}