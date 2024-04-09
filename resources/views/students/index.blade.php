<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Students') }}
        </h2>
    </x-slot>

    <div class="container pt-5">
        <div class="row">
            @foreach($students as $student)
            <div class="col-md-4  mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $student -> fname }} {{ $student -> lname }}</h5>
                        <a href="{{ route('students.edit', $student -> id ) }}" class="card-link">Edit</a>
                        <a href="{{ route('students.trash', $student -> id )}}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
