<div class="aside-widget">
    <div class="section-title">
        <h2 class="title">Categories</h2>
    </div>
    <div class="category-widget">
        <ul>
            <?php foreach ($getAllTopics as $key => $topics) : ?>
                <?php if ($key < 7) : ?>
                    <li><a href="<?php echo BASE_URL . '/category.php?t_id=' . $topics['id'] ?>"><?php echo $topics['name'] ?> <span>230</span></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
            <!-- <li><a href="#">Lifestyle <span>451</span></a></li>
            <li><a href="#">Technology <span>40</span></a></li>
            <li><a href="#">Travel <span>38</span></a></li>
            <li><a href="#">Health <span>24</span></a></li> -->
        </ul>
    </div>
</div>
<div class="aside-widget">
    <div class="section-title">
        <h2 class="title">Trending Video</h2>
    </div>
    <div style="height:300px; width:100%; background-color:red;">

    </div>
</div>
<!-- /category widget -->

<!-- newsletter widget -->
<!-- <div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<form>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div> -->
<!-- /newsletter widget -->

<!-- post widget -->
<div class="aside-widget">
    <div class="section-title">
        <h2 class="title">Popular Posts</h2>
    </div>
    <!-- post -->
    <div class="post post-widget">
        <a class="post-img" href="blog-post.html"><img src="assets/img/widget-3.jpg" alt=""></a>
        <div class="post-body">
            <div class="post-category">
                <a href="category.html">Lifestyle</a>
            </div>
            <h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
        </div>
    </div>
    <!-- /post -->

    <!-- post -->
    <div class="post post-widget">
        <a class="post-img" href="blog-post.html"><img src="assets/img/widget-2.jpg" alt=""></a>
        <div class="post-body">
            <div class="post-category">
                <a href="category.html">Technology</a>
                <a href="category.html">Lifestyle</a>
            </div>
            <h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
        </div>
    </div>
    <!-- /post -->

    <!-- post -->
    <div class="post post-widget">
        <a class="post-img" href="blog-post.html"><img src="assets/img/widget-4.jpg" alt=""></a>
        <div class="post-body">
            <div class="post-category">
                <a href="category.html">Health</a>
            </div>
            <h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
        </div>
    </div>
    <!-- /post -->

    <!-- post -->
    <div class="post post-widget">
        <a class="post-img" href="blog-post.html"><img src="assets/img/widget-5.jpg" alt=""></a>
        <div class="post-body">
            <div class="post-category">
                <a href="category.html">Health</a>
                <a href="category.html">Lifestyle</a>
            </div>
            <h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
        </div>
    </div>
    <!-- /post -->
</div>