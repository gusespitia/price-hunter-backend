<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 dark:text-gray-600 leading-tight">
            {{ __('Email Contacts') }}
        </h2>
    </x-slot>
    <x-slot name="title">
        {{ __('Contact Form Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your Contact\'s form.') }}
    </x-slot>
    <main class="relative">
        <div class="container mt-4">
            <!-- Notification section -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <!-- Table section -->
            @if ($contacts->isEmpty())
                <div class="alert alert-warning" role="alert">
                    There is no information to display.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-dark text-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->message }}</td>
                                    <td class="d-flex">
                                        <!-- Edit button -->
                                        <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#edit{{ $contact->id }}">
                                            <x-icons.pencil />
                                        </button>
                                        <!-- Delete button -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $contact->id }}">
                                            <x-icons.trash />
                                        </button>
                                    </td>
                                </tr>
                                @include('contacts.info', ['contact' => $contact])
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Show pagination only if there are more than 20 contacts -->
                    @if ($contacts->total() > 20)
                        {{ $contacts->links() }}
                    @endif
                </div>
            @endif
        </div>
    </main>
</x-app-layout>
