<?php

/**
 * Adds Blog Posts widget.
 */
class BlogWidget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
                'blog_widget', // Base ID
                'Blog_Widget', // Name
                array('description' => __('displays three blog entries', 'Mademoiselle')) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
        $queryArgs = array(
            'posts_per_page' => 3,
            'post_type' => 'post',
            'order'=> 'DESC',
            'orderby'=>'date'
        );
        $blogs = new WP_Query($queryArgs);

        while ($blogs->have_posts()) {
            $blogs->the_post();
            ?>
            <article class="lead-page-blog-item mb-4 mb-md-0 animation" data-animation="slide-top" data-delay="0s">
                        <a class="blog-image-link" href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('blog-list');?>
                        </a>
                        <div class="lead-page-blog-item-description " >
                            <p class="lead-page-blog-item-date">
                               <?php the_field('single_blog_date'); ?>
                            </p>
                            <h2> <a class="lead-page-blog-item-link text-uppercase" href="<?php the_permalink();?>">
                                   <?php the_field('single_blog_title')?>
                                </a></h2>
                        </div>

                    </article> 


            <?php
        }


        wp_reset_postdata();

        echo $after_widget;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'text_domain');
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }

}

// class BlogWidget
// Register BlogWidget widget

function mademoiselle_custom_widget() {
    register_widget('BlogWidget');
}

add_action('widgets_init', 'mademoiselle_custom_widget');
