@extends('layouts.main') @section('content') @section('title', 'News')
<div class="breadcrumb-section">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between justify-content-md-between align-items-center flex-md-row flex-column">
                    <h3 class="breadcrumb-title">News</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ...:::: End Breadcrumb Section:::... -->

<div class="blog-section">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-3">
                <!-- Start Sidebar Area -->
                <div class="siderbar-section">
                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">Search</h6>
                        <div class="sidebar-content">
                            <div class="search-bar">
                                <div class="default-search-style d-flex">
                                    <input class="default-search-style-input-box border-around border-right-none" type="search" placeholder="Search..." required />
                                    <button class="default-search-style-input-btn" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Sidebar Widget -->

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">Recent Post</h6>
                        <div class="sidebar-content">
                            <div class="recent-post">
                                <ul>
                                    <!-- Start Single Recent Post Item -->
                                    <li class="recent-post-list">
                                        <a href="blog-single-sidebar-left.html" class="post-image">
                                            <img src="assets/images/blog_recent_post/blog1.jpg" alt="" />
                                        </a>
                                        <div class="post-content">
                                            <a class="post-link" href="blog-single-sidebar-left.html">Blog Image Post</a>
                                            <span class="post-date">March 16, 2018</span>
                                        </div>
                                    </li>
                                    <!-- End Single Recent Post Item -->
                                    <!-- Start Single Recent Post Item -->
                                    <li class="recent-post-list">
                                        <a href="blog-single-sidebar-left.html" class="post-image">
                                            <img src="assets/images/blog_recent_post/blog2.jpg" alt="" />
                                        </a>
                                        <div class="post-content">
                                            <a class="post-link" href="blog-single-sidebar-left.html">Blog Image Post</a>
                                            <span class="post-date">March 16, 2018</span>
                                        </div>
                                    </li>
                                    <!-- End Single Recent Post Item -->
                                    <!-- Start Single Recent Post Item -->
                                    <li class="recent-post-list">
                                        <a href="blog-single-sidebar-left.html" class="post-image">
                                            <img src="assets/images/blog_recent_post/blog3.jpg" alt="" />
                                        </a>
                                        <div class="post-content">
                                            <a class="post-link" href="blog-single-sidebar-left.html">Blog Image Post</a>
                                            <span class="post-date">March 16, 2018</span>
                                        </div>
                                    </li>
                                    <!-- End Single Recent Post Item -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Sidebar Widget -->

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">Tag products</h6>
                        <div class="sidebar-content">
                            <div class="tag-link">
                                <a href="">asian</a>
                                <a href="">brown</a>
                                <a href="">euro</a>
                                <a href="">fashion</a>
                                <a href="">hat</a>
                                <a href="">t-shirt</a>
                                <a href="">teen</a>
                                <a href="">travel</a>
                                <a href="">white</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Sidebar Widget -->
                </div>
                <!-- End Sidebar Area -->
            </div>
            <div class="col-lg-9">
                <div class="blog-grid-wrapper">
                    <div class="row">
                        @foreach($articles as $article)
                            <div class="col-md-6 col-12">
                                <!-- Start Blog Grid Single -->
                                <div class="blog-feed-single">
                                    <a href="blog-single-sidebar-left.html" class="blog-feed-img-link">
                                        <img src="assets/images/blog_images/aments_blog_01.jpg" alt="" class="blog-feed-img" />
                                    </a>
                                    <div class="blog-feed-content">
                                        <div class="blog-feed-post-meta">
                                            <span>By:</span>
                                            <a href="" class="blog-feed-post-meta-author">Admin</a> -
                                            <a href="" class="blog-feed-post-meta-date">Sep 14, 2020</a>
                                        </div>
                                        <h5 class="blog-feed-link"><a href="blog-single-sidebar-left.html">Illum animi quo praesentium accusamus debitis</a></h5>
                                    </div>
                                </div>
                                <!-- End Blog Grid Single -->
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Start Pagination -->
            </div>
        </div>
    </div>
</div>
<!-- ...:::: End Blog Section:::... -->
@endsection
