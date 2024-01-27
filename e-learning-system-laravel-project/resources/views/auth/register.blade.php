{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!--Address -->
            <div class="mt-4">
                <x-input-label for="address" :value="__('Address')" />

                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />

                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
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

    <link rel="stylesheet" href="{{ asset('authCss/auth.css') }}" />

    <title>Registration</title>
</head>

<body>
    <!-- <a class="fs-2 p-5" href="index.html"><i class="fa-solid fa-house"></i></a> -->

    <div class="container register mt-5 pt-5">
        <form class="mx-auto pb-5 mb-4" method="POST" action="{{ route('register') }}">
            @csrf
            <h4 class="text-center pb-4">Account Registration</h4>
            <div class="row">
                <div class="mb-2">
                    <x-forms.input type="text" name="name" placeholder="Enter name" required :value="old('name')"
                        label="Name" />
                </div>
                <div class="mb-2">
                    <x-forms.input type="email" name="email" placeholder="Enter email" required :value="old('email')"
                        label="Email" />
                </div>
                <div class="mb-2">
                    <x-forms.input type="text" name="address" placeholder="Enter address" required :value="old('address')"
                        label="Address" />
                </div>
                <div class="mb-2 col-md-6">
                    <x-forms.input type="password" name="password" placeholder="Enter password" required
                        label="Password" />
                </div>
                <div class="mb-2 col-md-6">
                    <x-forms.input type="password" name="password_confirmation"
                        placeholder="Enter password confirmation" required label="Confirmation Password" />
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100">
                Registration
            </button>
            <p class="text-center text-muted mt-3">Already have an acount</p>
            <p>If you already have an account with us, please login at the <a
                    style="color:#ef4a23; text-decoration: none;" href="{{ route('login') }}">login page.</a>
            </p>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
