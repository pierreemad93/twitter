<form method="post" action="{{ route('comments.store') }}">
    @csrf
    <input type="hidden" value="{{$post->id}}" name="post_id">
    <div class="mb-3">
        <label class="form-label">add your Comment</label>
        <textarea class="form-control" rows="3" name="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>