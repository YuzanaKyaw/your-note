<x-layout>
    <div class="note-containder container">
        <a href="{{ route('note.create') }}" class="btn btn-info new-note-btn">
            <i class="fa-solid fa-book"></i>New Note
        </a>
        <div class="notes my-3 px-3">
            <div class="row">
                @foreach ($notes as $note)
                    <div class="note kalam-light border border-primary-subtle col-5 offset-1 col-m-12 col-s-12 bg-grey shadow p-3 my-3">
                        <div class="note-body">
                            {{ Str::words($note->note, 50)}}
                        </div>
                        <div class="note-button py-2">
                            <a href="{{route('note.show',$note)}}" class="btn btn-primary note-edit-button">View</a>
                            <a href="{{route('note.edit',$note)}}" class="btn btn-success note-edit-button">Edit</a>
                            <a href="#" class="btn btn-danger note-delete-button">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
</x-layout>
