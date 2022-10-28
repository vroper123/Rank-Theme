<article id="article-<?php the_ID() ?>" class="<?php echo implode(get_post_class(),null) ?>"  itemscope itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
<div class="blog-post">
    <?php if(!is_single()):?>
   <header class="entry-head">
    <h1 class="article-head" itemprop="headline"><a href="<?php echo esc_url(get_permalink());?>"><?php the_title() ?></a></h1>
    </header>
    <?php else:?>
        <header class="entry-head">
    <h1 class="article-head" itemprop="headline"><?php the_title() ?></h1>
    </header>
    <?php endif;?>
     

    <?php the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ) ?>
    <div class="entry-content" itemprop="text">
    
     <?php if (is_home())  : 
        the_excerpt();  
     else:
         the_content();
     endif;?>
     </div>
    <a class="button" href="<?php echo esc_url(get_permalink());?>">Read On</a>
    <footer class="entry-meta">
    
    </footer>
</div>  
</article>