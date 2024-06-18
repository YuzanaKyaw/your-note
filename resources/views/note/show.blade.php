<x-layout>
    <div class="row">
        <div class="col-l-8">
            <div class="note-containder container m-5 shadow p-3 kalam-light">
                <div class="note-header">
                    <h2>{{$note->created_at}}</h2>
                    <div class="note-button py-2 d-flex">
                        <a href="{{route('note.index')}}" class="btn btn-primary note-edit-button mx-1 ">Notes</a>
                        <a href="{{route('note.edit',$note)}}" class="btn btn-success note-edit-button mx-1 ">Edit</a>

                        <form action="{{route('note.destroy',$note)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type='submit' class="mx-1 btn btn-danger note-delete-button">Delete</button>
                        </form>
                    </div>
                </div>
                <div class="note my-3 px-3">
                    <div class="note-body">
                        {{$note->note}}
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-layout>
