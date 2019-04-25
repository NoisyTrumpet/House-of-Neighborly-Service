<!-- @ resources/views/partials/home.testimonial.blade.php -->

<section id="testimonials-home">
    <div class="testimonials-wrapper">
        @php
        $args = array('post_type' => 'testimonial', 'posts_per_page' => '1');
        $loop = new WP_Query($args);
        @endphp
        @while($loop->have_posts()) @php($loop->the_post())
        @php(the_content())
        @php(the_title())
        @endwhile
    </div>



</section>