<x-layout>
    <div class="card">
        <div class="card-header">{{ $user->name }} info.</div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">Name: {{ $user->name }}</li>
                <li class="list-group-item">Email: {{ $user->email }}</li>
                <li class="list-group-item">Gender: {{ $user->gender }}</li>
                <li class="list-group-item">Age: {{ $user->age }}</li>
            </ul>
        </div>
    </div>
</x-layout>
