

<div id = "root">
   <div class = "header-wrap">
   <div class ="header"><?php print render($page['header']); ?></div>
</div>
<div class = "nav-wrap">
   <div class ="nav"><?php print render($page['nav']); ?></div>
</div>
<div class = "slideshow-wrap">
   <div class ="slideshow"><?php print render($page['slide_show']); ?></div>
</div>
<div class = "content-header-wrap">
   <div class ="content-header"><?php print render($page['content_header']); ?></div>
</div>
<div class = "body-wrap">
   <div class ="body">
   <div class = "page-content"> <?php print render($page['content']); ?>
    <div class = "page-top"> <?php print render($page['content_top']); ?>  </div>
   <div class = "page-bottom"> <?php print render($page['content_bottom']); ?>  </div>
    <div class = "page-left"> <?php print render($page['sidebar_first']); ?>  </div>
   <div class = "page-right"> <?php print render($page['sidebar_second']); ?>  </div>
 </div>
</div>
</div>
<div class = "sub-footer-wrap">
   <div class ="sub-footer"><?php print render($page['sub_footer']); ?></div>
</div>
<div class = "footer-wrap">
   <div class ="footer"><?php print render($page['footer']); ?></div>
</div>
</div>
