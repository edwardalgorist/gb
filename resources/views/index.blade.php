@extends ('layouts.main')
@section ('content')

    <hr role="separator"/>
    <h3>Leave a Comment</h3>
    <form action="" method="post">
        {{{csrf_field()}}}

        <div class="form-group">
            <label for="name">Name*</label>
            <input type="text" class="form-control rounded-0" id="name" name="name" value="{{{old('name')}}}"/>
            @if($errors->has('name'))
                <div class="mt-1 text-danger">*{{{$errors->first('name')}}}</div>
            @endif
        </div>


        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control rounded-0" id="comment" name="comment">{{{old('comment')}}}</textarea>
            @if($errors->has('comment'))
                <div class="mt-1 text-danger">*{{{$errors->first('comment')}}}</div>
            @endif
        </div>


        <button type="submit" class="btn btn-danger rounded-0">Submit</button>
    </form>

    <hr role="separator"/>
    <div class="mt-2">

        <h3>Comments</h3>

        @if(count(\App\Models\Comments::all()->toArray()) == 0)
            <h5>No comments...</h5>
        @endif

        @foreach(array_reverse(\App\Models\Comments::all()->toArray()) as $comment)
            <div class="row align-items-start mt-4 ml-1">
                <div class="w-auto">
                    <span class="fa fa-2x fa-user-circle"></span>
                </div>

                <div class="col-10">
                    <div>
                        <h6 class="font-weight-bold">{{{$comment['name']}}}</h6>
                    </div>
                    <div class="mt-n2">{{{$comment['comment']}}}</div>
                </div>
            </div>
        @endforeach
    </div>
@stop
