@php(the_content())
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
@include('components/banner')
@include('components/collaboration')
@include('components/banner-accurate')
@include('components/who-we-are')
