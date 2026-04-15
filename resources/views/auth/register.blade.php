<x-layout>
    <h1>Register here</h1>

    <form action="/register" method="post">

        <x-form.field label="Username" name="name" />
        <x-form.field label="Email" name="email" type="email" />
        <x-form.field label="Password" name="password" type="password" />
        <x-form.field label="Password Confirmation" name="password_confirmation" type="password" />

        <button type="submit">Create</button>
    </form>
</x-layout>
