<?php 
/**
 * List of all categories
 *
 * @package understrap
 */

    $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC'
    ) );
     
    foreach( $categories as $category ) { ?>
        
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mt-5 w-100 p-1 pt-2">
                <div class="card-body">
                  <?php  
                  $category_link = sprintf( 
                        '<a href="%1$s" alt="%2$s">%3$s</a>',
                        esc_url( get_category_link( $category->term_id ) ),
                        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                        esc_html( $category->name )
                    );

                    echo "<div class='article-title mb-4'>";
                    echo $category_link . ' (' . $category->count . ')';
                    echo "</div>";
                    echo '<p>' . $category->description . '</p>';
                    echo "<a class='cat-link' href='" . esc_url( get_category_link( $category->term_id ) ) . "'>View all articles</a>";

                    // echo '<p>' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</p> ';
                    // echo '<p>' . sprintf( esc_html__( '%s', 'textdomain' ), $category->description ) . '</p>';
                    // echo '<p>' . sprintf( esc_html__( 'Article Count: %s', 'textdomain' ), $category->count ) . '</p>';
                ?>
                </div>
            </div>
        </div>

   <?php } ?>
