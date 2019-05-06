<section id="testimonials-home">
    <div class="testimonials-wrapper">
        @php
        $args = array('post_type' => 'testimonials', 'posts_per_page' => '3');
        $loop = new WP_Query($args);
        $i = 0;
        @endphp
        <input type="checkbox" id="testimonials-checkbox">
        <label for="testimonials-checkbox"></label>
        <ul class="testimonials">
            @while($loop->have_posts()) @php($loop->the_post())
            <li>
                <h4 class="testimonials-quote">@php(the_content())</h4>
                <p class="testimonials-author">- @php(the_title())</p>
            </li>
            @endwhile
            @php(wp_reset_query())
        </ul>

    </div>
</section>