<!-- Modal for editing contact -->
<div class="modal fade" id="edit{{ $contact->id }}" tabindex="-1" aria-labelledby="editLabel{{ $contact->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editLabel{{ $contact->id }}">Edit Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name{{ $contact->id }}" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name{{ $contact->id }}" name="name" value="{{ $contact->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email{{ $contact->id }}" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email{{ $contact->id }}" name="email" value="{{ $contact->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="message{{ $contact->id }}" class="form-label">Message</label>
                        <textarea class="form-control" id="message{{ $contact->id }}" name="message" required>{{ $contact->message }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal for deleting contact -->
<div class="modal fade" id="delete{{ $contact->id }}" tabindex="-1" aria-labelledby="deleteLabel{{ $contact->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('contacts.destroy', $contact->id) }}">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteLabel{{ $contact->id }}">Delete Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete the contact <strong>{{ $contact->name }}</strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
