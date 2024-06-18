<x-layout>
    <div class="note-containder container">
        <div class="m-4 d-flex">
            <a href="{{ route('note.create') }}" class="btn btn-info new-note-btn ">
                <i class="fa-solid fa-book"></i><span class="kalam-bold">New Note</span>
            </a>
        </div>
        <div class="notes my-3 px-3">
            <div class="row">
                @foreach ($notes as $note)
                    <div class="note kalam-regular border border-primary-subtle col-5 offset-1 col-m-12 col-s-12 bg-grey shadow p-3 my-3">
                        <div class="note-body">
                            {{ Str::words($note->note, 50)}}
                        </div>
                        <div class="note-button py-2 d-flex">
                            <a href="{{route('note.show',$note)}}" class="btn btn-primary note-edit-button mx-1 ">View</a>
                            <a href="{{route('note.edit',$note)}}" class="btn btn-success note-edit-button mx-1 ">Edit</a>

                            <form action="{{route('note.destroy',$note)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="mx-1 btn btn-danger note-delete-button">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
</x-layout>
