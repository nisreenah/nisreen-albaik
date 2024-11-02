<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Traits\ImageUpload;

class ProfileController extends Controller
{
    use ImageUpload;

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('admin.profile.update-password-form', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::back()->with($this->notification('Profile updated successfully'));
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function showInfo()
    {
        $profile = Profile::first();
        return view('admin.profile.edit', compact('profile'));
    }

    public function updateInfo(Request $request, Profile $profile)
    {
        $this->validate($request, [
            'en_name' => 'required',
            'en_major' => 'required',
            'en_country' => 'required',
            'en_address' => 'required',
            'email' => 'required',
            'date_of_birth' => 'required',
            'phone' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedIn' => 'required',
            'telegram' => 'required',
            'en_interest' => 'required',
            'en_bio' => 'required',
            'en_summary' => 'required',
            'en_title' => 'required',
        ]);

        $inputs = $request->all();
        if ($request->hasFile('CV')) {
            $this->deleteImage($profile->CV, 'profile');
            $inputs['CV'] = $this->storeImage($request->file('CV'), 'profile');
        }

        $profile->update($inputs);
        return Redirect::back()->with($this->notification('Profile info updated successfully'));
    }
}
