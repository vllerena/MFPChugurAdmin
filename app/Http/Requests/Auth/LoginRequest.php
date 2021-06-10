<?php

namespace App\Http\Requests\Auth;

use App\Rules\Traits\UserRules;
use App\TableInfo\UserTableInfo;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    use UserRules;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            UserTableInfo::USERNAME => $this->usernameRules(),
            UserTableInfo::PASSWORD => $this->passwordRules(),
        ];
    }

    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        if (!Auth::attempt($this->only(UserTableInfo::USERNAME, UserTableInfo::PASSWORD))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                UserTableInfo::USERNAME => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

    public function ensureIsNotRateLimited()
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            UserTableInfo::USERNAME => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    public function throttleKey()
    {
        return Str::lower($this->input(UserTableInfo::USERNAME)) . '|' . $this->ip();
    }

    public function messages()
    {
        return $this->validatedMessages();
    }
}
