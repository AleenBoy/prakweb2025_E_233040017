<x-layout>
    <x-slot:title>
        Users
    </x-slot:title>

    <h1 class="text-3xl font-bold underline mb-10">
        Daftar User
    </h1>

    <table class="table-auto w-full mt-4 border-collapse border border-gray-200">
        <thead class="bg-gray-200">
            <tr class="">
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>