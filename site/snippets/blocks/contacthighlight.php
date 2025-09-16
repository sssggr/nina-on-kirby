<section class="contact-highlight">
   <div class="row">
   <div class="col-xs-12 col-md-offset-1 col-lg-offset-2 col-lg-9 col-md-10">
       <div class="contact-highlight-wrapper block-type-contacthighlight">
         <p>
           <?= $block->headline()->kirbytextinline() ?>
         </p>
         <?php if($block->buttonlink()->toPage()): ?>
           <a href="<?= $block->buttonlink()->toPage()->url() ?>">
             <?= $block->buttontext()->html() ?>
           </a>
         <?php endif ?>
       </div>
     </div>
   </div>
</section> 