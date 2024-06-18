<x-layout>
    <div class="row">
        <div class=" offset-3 col-6">
            <div class="note-containder container m-3 shadow p-4">
                <h1 class="text-center">Edit your note</h1>
                <form action="">
                    <textarea name="" id="" cols="30" rows="10" class="form-control my-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus odit accusantium dolores quidem ratione? Harum inventore magni dicta odio ex voluptatem voluptas exercitationem iusto molestias vero! Cumque itaque quod eos impedit, voluptatem ipsam fugiat similique inventore et sequi minus quidem tempore quisquam esse quo illo sit nihil? At, harum ipsa.
                    </textarea>
                    <div class="note-buttons my-3">
                        <input type="submit" value="Edit" name="btnEdit" class="btn btn-success ">
                        <a href="{{route('note.index')}}" class="btn btn-primary note-edit-button">
                            Cancel
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layout>
