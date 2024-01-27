<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon" />

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('authCss/auth.css') }}">

    <title>Login</title>
</head>

<body>
    <!-- <a class="fs-2 p-5" href="index.html"><i class="fa-solid fa-house"></i></a> -->
    <div class="container login mt-5 pt-5 ">

        <form class="mx-auto" method="post" action="{{ route('login') }}">
            @csrf
            <h4 class="text-center pb-4">
                Account Login</h4>
            <div class="mb-3">
                <x-forms.input type="email" name="email" placeholder="Enter email" required :value="old('email')"
                    label="Email" />
            </div>
            <div class="mb-3">
                <x-forms.input type="password" name="password" placeholder="Enter password" required label="Password" />
            </div>
            <div class="block mt-2 mb-2">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-2 mb-2">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit" class="btn btn-primary w-100">
                    {{ __('Log in') }}
                </button>
            </div>
            {{-- <a href="../Dashboard/dashboard.php" type="submit" class="btn btn-primary w-100">Login</a> --}}
            <p class="text-center text-muted mt-3">Don't have an account?</p>

            <a href="{{ route('register') }}" type="submit" class="btn btn-outline-success w-100 mt-1">Create your
                account</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
