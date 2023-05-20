<?php
    namespace App\Repositories;

    use App\Http\Requests\UserRequest;
    use App\Interface\UserInterface;
    use App\Models\User;

    use Illuminate\Support\Facades\Hash;

    class UserRepository implements UserInterface {

        public function login()
        {
            // TODO: Implement login() method.
        }
        public function register($request)
        {
            // TODO: Implement register() method.

            return User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }
    }
