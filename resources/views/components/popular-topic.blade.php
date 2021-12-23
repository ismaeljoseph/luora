<div class="card">
    <div class="card-header">
        Popular Topics
        <button class="btn btn-sm btn-primary float-right rounded-pill" id="btnTopic">Create topic</button>
    </div>
    <div class="card-body">
        <div id="formTopic">
            <form action="{{ route('create.topic') }}" method="POST">
                @csrf
                <div class="input-group input-group-sm">
                    <input type="text" name="name" class="form-control" autocomplete="off">
                    @include('layouts.error', ['name' => 'name'])
                </div>
                <button type="submit" class="btn btn-sm btn-primary mt-2 rounded-pill">Create</button>
            </form>
            <hr>
        </div>
        @foreach($topics as $topic)
            <a href="{{ route('topic.show',$topic->name_slug) }}" class="text-dark">{{ $topic->name }} 
                <div class="btn btn-secondary float-right btn-sm rounded-pill">
                {{ $topic->follower }} Followers</div></a><hr>
        @endforeach
    </div>
</div>