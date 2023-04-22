<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Blog Home - Start Bootstrap Template</title>

    @include('layouts.blog-home_includes.blog_home-header')
    @yield('header')
</head>

<body>

<!-- Navigation -->
@include('layouts.blog-home_includes.blog_home-navigation')

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Page Heading
                <small>Secondary Text</small>
            </h1>


            <!-- Blog Post -->
            @include('layouts.blog-home_includes.blog_home-blog_post')
            @yield('content')

            <!-- Pagination -->
            @include('layouts.blog-home_includes.blog_home-pagination')

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            @include('layouts.blog-home_includes.blog_home-search_widget')

            <!-- Categories Widget -->
            @include('layouts.blog-home_includes.blog_home-categories_widget')

            <!-- Side Widget -->
            @include('layouts.blog-home_includes.blog_home-side_widget')

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
@include('layouts.blog-home_includes.blog_home-main_footer')

@include('layouts.blog-home_includes.blog_home-footer')
@yield('footer')

</body>

</html>
