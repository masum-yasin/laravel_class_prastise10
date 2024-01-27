<x-frontend.master>

    <div class="container marketing">
        <br><br><br><br>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('assets/images/p1.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-8 ">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $course->title }}</h3>
                    </div>
                    <div class="card-body">
                        <p>{!! Str::limit($course->description, 50) !!}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a class="btn btn-danger" href="#">Add to Cart</a>
                        <p>${{ $course->price }}</p>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <section>
            @auth
                <form action="{{ route('courses.comments.store', $course->id) }}" method="post">
                    @csrf
                    <x-forms.textarea name="comment" label="Your Comment" id="description" />
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            @else
                <a href="{{ url('/login') }}"><button class="btn btn-info">Login to comment</button></a>
            @endauth
        </section>
        <hr />
        <section>
            <h2>Comments</h2>
            <ul>
                @foreach ($course->comments as $comment)
                    <li>
                        <div>
                            <h3>
                                {{ $comment->commentedBy->name }}
                                <small><mark>{{ $comment->created_at->diffForHumans() }}</mark></small>
                            </h3>
                            <p>{!! $comment->body !!}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </section>


    </div><!-- /.container -->
</x-frontend.master>
