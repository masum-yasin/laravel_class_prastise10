<x-frontend.master>
    <!-- course section -->
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our <span>Courses</span>
                </h2>
            </div>
            <div class="row">
                @forelse ($category->courses as $course)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="{{ route('frontend.courses.show', $course->slug) }}" class="option1">
                                        Course Details
                                    </a>
                                    <a href="" class="option2">
                                        Add to cart
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="{{ asset('assets/images/p1.png') }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{ $course->title }}
                                </h5>
                                <h6>
                                    ${{ $course->price }}
                                </h6>
                            </div>
                        </div>
                    </div>
                @empty
                    <P class="text-muted mx-auto" style="font-size: 30px">Sorry, Currently there is no course
                        under this category!!</P>
                @endforelse

            </div>
            <div class="btn-box">
                <a href="">
                    View All courses
                </a>
            </div>
        </div>
    </section>
</x-frontend.master>
