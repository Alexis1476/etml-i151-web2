<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="flex items-center justify-center content-center h-full">
    <form action="/userAdd" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h1 class="text-2xl font-bold text-center mb-5">Sign up</h1>
        @csrf
        @include('partials.form-input', ['nameItem'=>'user', 'text'=>'Username', 'type'=>'text'])
        @include('partials.form-input', ['nameItem'=>'password', 'text'=>'Password', 'type'=>'password'])
        @include('partials.form-input', ['nameItem'=>'password_confirmation', 'text'=>'Confirm password', 'type'=>'password'])
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-300">
            <div class="flex items-center justify-between">
                <button
                    class="btnDefault"
                    type="submit">
                    Sign up
                </button>
            </div>
        </div>
    </form>
</div>

