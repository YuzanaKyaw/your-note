<x-layout>
    <div class="note-containder container">
        <div class="note-header">
            <h2>Date</h2>
            <div class="note-buttons">
                <a href="{{route('note.edit',$note)}}" class="btn btn-success note-edit-button">Edit</a>
                            <a href="#" class="btn btn-danger note-delete-button">Delete</a>
            </div>
        </div>
        <div class="note my-3 px-3">
            <div class="note-body">

            </div>


        </div>
    </div>
</x-layout>
