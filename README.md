
# <h1 align='center'>Laravel Form Validation 💠</h1>

This repository demonstrates how to implement **Form Validation** in a Laravel application. 🚀

## Features ✨
- Validation for various input fields (text, email, password, etc.).
- Custom error messages.
- Integration with Laravel Blade templates.

---

## Installation 🧣‍💻

1. Clone the repository:
   ```bash
   git clone https://github.com/engineersohag/Laravel-From-Validation.git
   ```

2. Navigate to the project directory:
   ```bash
   cd laravel-form-validation
   ```

3. Install dependencies:
   ```bash
   composer install
   ```

4. Create and configure the `.env` file:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. Start the development server:
   ```bash
   php artisan serve
   ```

---

## Example Code Snippet 📝

### Controller Validation
```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Handle the validated data
        return redirect()->back()->with('success', 'Form submitted successfully! 🎉');
    }
}
```

### Blade Template
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Form Validation</title>
</head>
<body>
    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('form.submit') }}" method="POST">
        @csrf

        <!-- Name Field -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <!-- Email Field -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <!-- Password Field -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        @error('password')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <!-- Confirm Password Field -->
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
```

---

## Usage 🔧
1. Define a route in `web.php`:
   ```php
   Route::post('/add', [FormController::class, 'addUser'])->name('form.submit');
   ```

2. Open the application in your browser and test the form validation.

---

Feel free to contribute! 🌟

