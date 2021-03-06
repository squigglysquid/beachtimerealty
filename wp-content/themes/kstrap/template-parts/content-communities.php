<?php

use Includes\Modules\MLS\Communities;

/**
 * @package KMA
 * @subpackage kstrap
 * @since 1.0
 * @version 1.2
 */
include(locate_template('template-parts/partials/top.php'));

$community = new Communities();
$communities = $community->getCommunities();

$agentMLSInfo = false;

$headline = ($post->page_information_headline != '' ? $post->page_information_headline : $post->post_title);
$subhead = ($post->page_information_subhead != '' ? $post->page_information_subhead : '');
?>
<div id="mid" >
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="section-wrapper support-mast">
            <div class="container">
                <h1 class="title"><?php echo $headline; ?></h1>
                <?php echo($subhead!='' ? '<p class="subtitle">'.$subhead.'</p>' : null); ?>
            </div>
        </div>
        <section id="content" class="content section ">
            <div class="container">
                <div class="entry-content">
                    <?php the_content(); ?>

                    <div class="row">
                        <?php foreach ($communities as $community) { ?>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <?php //echo '<pre>',print_r($community),'</pre>'; ?>
                                <?php include(locate_template('template-parts/partials/mini-community.php')); ?>
                            </div>
                        <?php } ?>
                    </div>

                </div><!-- .entry-content -->
            </div>
        </section>
    </article><!-- #post-## -->
</div>
<?php
include(locate_template('template-parts/partials/bot.php'));
