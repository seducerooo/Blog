<div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4">{{ $post->title }}</h1>

    <!-- Author -->
    <p class="lead">
        by
        <a href="#">Start Bootstrap</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p>Posted on January {{ $post->created_at->diffForhumans() }}</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

    <hr>

    <!-- Post Content -->
    <p class="lead"> {{ $post->content }}<p>







</div>
