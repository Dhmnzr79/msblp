<?php
/**
 * Template Name: Преподаватели
 */

get_header(); ?>

<main id="primary" class="site-main">
    <section class="v2-section">
        <div class="v2-container">
            <div class="v2-wrapper">
                
                <div class="v2-content v2-content--hero">
                    <h1>Наши преподаватели</h1>
                    <p>Уникальность программ «Высшей школы бизнес-психологии и лидерства им. Антонио Менегетти» заключается в том, что в их основе лежат не имеющие аналогов в современной бизнес-психологии, психологическом консультировании и консалтинге теория и практика интегральной онтопсихологии. Поэтому все преподаватели Школы прошли серьезную подготовку в области теории и методики онтопсихологии, но главное, что все они имеют собственный неповторимый практический опыт применения онтопсихологии в своей профессиональной деятельности – бизнесе, политике, медицине, педагогике, искусстве, культуре и др. Главный критерий приглашения эксперта в качестве преподавателя – неоспоримые высокие достижения, которые он демонстрирует в своей профессиональной деятельности, личной жизни, в деле служения жизни. </p>
                </div>

                <div class="v2-content v2-content--teachers">
                    <?php
                    $teachers = new WP_Query(array(
                        'post_type' => 'teachers',
                        'posts_per_page' => -1,
                        'orderby' => 'menu_order',
                        'order' => 'ASC'
                    ));

                    if ($teachers->have_posts()) :
                        // Сортируем преподавателей по имени файла изображения
                        $teachers_array = array();
                        while ($teachers->have_posts()) : $teachers->the_post();
                            $thumbnail_id = get_post_thumbnail_id();
                            $image_url = '';
                            if ($thumbnail_id) {
                                $image_url = wp_get_attachment_image_url($thumbnail_id, 'full');
                            }
                            
                            // Извлекаем имя файла из URL
                            $image_filename = '';
                            if ($image_url) {
                                $image_filename = basename($image_url);
                            }
                            
                            $teachers_array[] = array(
                                'post' => get_post(),
                                'image_filename' => $image_filename
                            );
                        endwhile;
                        wp_reset_postdata();
                        
                        // Сортируем по имени файла (prep01.jpg, prep02.jpg, prep03.jpg, prep04.jpg)
                        usort($teachers_array, function($a, $b) {
                            $order = array('prep01.jpg', 'prep02.jpg', 'prep03.jpg', 'prep04.jpg');
                            $a_index = array_search($a['image_filename'], $order);
                            $b_index = array_search($b['image_filename'], $order);
                            
                            // Если файл не найден в списке, ставим в конец
                            if ($a_index === false) $a_index = 999;
                            if ($b_index === false) $b_index = 999;
                            
                            return $a_index - $b_index;
                        });
                        ?>
                        <div class="v2-grid v2-grid--3 v2-teachers-grid">
                            <?php
                            $prep_images = array('prep01.jpg', 'prep02.jpg', 'prep03.jpg', 'prep04.jpg');
                            $image_index = 0;
                            foreach ($teachers_array as $teacher_data) :
                                $post = $teacher_data['post'];
                                setup_postdata($post);
                                $short_description = get_post_meta(get_the_ID(), '_teacher_short_description', true);
                                $position = get_post_meta(get_the_ID(), '_teacher_position', true);
                                
                                // Определяем изображение для текущего преподавателя
                                $prep_image = '';
                                if ($image_index < count($prep_images)) {
                                    $prep_image = $prep_images[$image_index];
                                } else {
                                    // Если преподавателей больше 4, используем placeholder
                                    $prep_image = 'teacher-placeholder.jpg';
                                }
                                $image_index++;
                                ?>
                                <article class="v2-teacher-card">
                                    <div class="v2-teacher-media">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo esc_attr($prep_image); ?>" alt="<?php the_title(); ?>" class="v2-teacher-image">
                                    </div>
                                    <div class="v2-teacher-body">
                                        <h3 class="v2-teacher-name"><?php the_title(); ?></h3>
                                        <?php if ($position) : ?>
                                            <p class="v2-teacher-position"><?php echo esc_html($position); ?></p>
                                        <?php endif; ?>
                                        <?php if ($short_description) : ?>
                                            <p class="v2-teacher-role"><?php echo esc_html($short_description); ?></p>
                                        <?php endif; ?>
                                        <?php if (get_the_excerpt()) : ?>
                                            <p class="v2-teacher-meta"><?php the_excerpt(); ?></p>
                                        <?php endif; ?>
                                        <?php if (get_the_content()) : ?>
                                            <div class="v2-teacher-content">
                                                <?php the_content(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </article>
                                <?php
                            endforeach;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <?php
                        wp_reset_postdata();
                    else :
                        ?>
                        <div class="v2-content v2-content--empty">
                            <p>Преподаватели будут добавлены в ближайшее время.</p>
                        </div>
                        <?php
                    endif;
                    ?>
                </div>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>


