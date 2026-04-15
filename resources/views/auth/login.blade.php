<x-layout>
    <h1>Login</h1>

    <form action="/login" method="post">
        @csrf

        <x-form.field label="Email" name="email" type="email" />
        <x-form.field label="Password" name="password" type="password" />

        <button type="submit">Login</button>
    </form>

    <div>
        <p>Need an account?</p>
        <a href="/register">Register</a>
    </div>
</x-layout>
