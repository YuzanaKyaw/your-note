<x-layout>
    <div class="row">
        <div class=" offset-3 col-6">
            <div class="note-containder container m-3 shadow p-4">
                <h1 class="text-center">Create your note</h1>
                <form action="{{route('note.store')}}" method="POST">
                    @csrf
                    <textarea id="" cols="30" rows="10" name='note' class="form-control my-3" placeholder="your note.....">

                    </textarea>
                    <div class="note-buttons my-3">
                        <input type="submit" value="Create" name="btnCreate" class="btn btn-success ">
                        <a href="{{route('note.index')}}" class="btn btn-primary note-edit-button">
                            Cancel
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layout>
