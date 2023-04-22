<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>
    @include('layouts.blog-post_includes.blog_post-header')
    @yield('header')

</head>

<body>

<!-- Navigation -->
@include('layouts.blog-post_includes.blog_post-navigation')

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        @include('layouts.blog-post_includes.blog_post-content_column')
        @yield('content')
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            @include('layouts.blog-post_includes.blog_post-search_widget')

            <!-- Categories Widget -->
            @include('layouts.blog-post_includes.blog_post-categories_widget')

            <!-- Side Widget -->
            @include('layouts.blog-post_includes.blog_post-side_widget')
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
@include('layouts.blog-post_includes.blog_post-main_footer')

@yield('footer')
</body>

</html>
