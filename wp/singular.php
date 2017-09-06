<?php get_header(); ?>

<section id="content-wrap" class="blog-single">
  <div class="row">
    <div class="col-twelve">
      <article class="format-standard">
        <?php if (have_posts()){while(have_posts()){the_post();?>
        <?php if (has_post_thumbnail('medium_large')){; ?>
        <div class="content-media">
          <div class="post-thumb">
            <?php the_post_thumbnail(); ?>
          </div>
        </div>
        <?php }; ?>
        <div class="primary-content">
          <h1 class="page-title"><?php the_title(); ?></h1>
          <ul class="entry-meta">
            <li class="date">September 06, 2016</li>
            <li class="cat"><a href="">Wordpress</a><a href="">Design</a></li>
          </ul>
          <?php the_content(); ?>
          <p class="tags">
            <span>Tagged in :</span>
            <a href="#">orci</a><a href="#">lectus</a><a href="#">varius</a><a href="#">turpis</a>
          </p>
          <div class="author-profile">
            <img src="img/avatars/user-05.jpg" alt="">

            <div class="about">
              <h4><a href="#">Jonathan Smith</a></h4>

              <p>Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat impedit laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              </p>

              <ul class="author-social">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">GooglePlus</a></li>
                <li><a href="#">Instagram</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="pagenav group">
          <div class="prev-nav">
            <?php previous_posts_link('Previous'); ?>
          </div>
          <div class="next-nav">
            <?php next_posts_link('Next'); ?>
          </div>
        </div>
        <?php}}else{?>
        <h3>Sorry nothing here...</h3>
        <?php}?>
      </article>
    </div>
  </div>
  <!--<div class="comments-wrap">
    <div id="comments" class="row">
      <div class="col-full">
        <h3>5 Comments</h3>
        <ol class="commentlist">

          <li class="depth-1">

            <div class="avatar">
              <img width="50" height="50" class="avatar" src="img/avatars/user-01.jpg" alt="">
            </div>

            <div class="comment-content">

              <div class="comment-info">
                <cite>Itachi Uchiha</cite>

                <div class="comment-meta">
                  <time class="comment-time" datetime="2014-07-12T23:05">Jul 12, 2014 @ 23:05</time>
                  <span class="sep">/</span><a class="reply" href="#">Reply</a>
                </div>
              </div>

              <div class="comment-text">
                <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate, facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
              </div>

            </div>

          </li>

          <li class="thread-alt depth-1">

            <div class="avatar">
              <img width="50" height="50" class="avatar" src="img/avatars/user-04.jpg" alt="">
            </div>

            <div class="comment-content">

              <div class="comment-info">
                <cite>John Doe</cite>

                <div class="comment-meta">
                  <time class="comment-time" datetime="2014-07-12T24:05">Jul 12, 2014 @ 24:05</time>
                  <span class="sep">/</span><a class="reply" href="#">Reply</a>
                </div>
              </div>

              <div class="comment-text">
                <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et tantas semper delicatissimi.</p>
              </div>

            </div>

            <ul class="children">

              <li class="depth-2">

                <div class="avatar">
                  <img width="50" height="50" class="avatar" src="img/avatars/user-03.jpg" alt="">
                </div>

                <div class="comment-content">

                  <div class="comment-info">
                    <cite>Kakashi Hatake</cite>

                    <div class="comment-meta">
                      <time class="comment-time" datetime="2014-07-12T25:05">Jul 12, 2014 @ 25:05</time>
                      <span class="sep">/</span><a class="reply" href="#">Reply</a>
                    </div>
                  </div>

                  <div class="comment-text">
                    <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</p>
                  </div>

                </div>

                <ul class="children">

                  <li class="depth-3">

                    <div class="avatar">
                      <img width="50" height="50" class="avatar" src="img/avatars/user-04.jpg" alt="">
                    </div>

                    <div class="comment-content">

                      <div class="comment-info">
                        <cite>John Doe</cite>

                        <div class="comment-meta">
                          <time class="comment-time" datetime="2014-07-12T25:15">July 12, 2014 @ 25:15</time>
                          <span class="sep">/</span><a class="reply" href="#">Reply</a>
                        </div>
                      </div>

                      <div class="comment-text">
                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                      </div>

                    </div>

                  </li>

                </ul>

              </li>

            </ul>

          </li>

          <li class="depth-1">

            <div class="avatar">
              <img width="50" height="50" class="avatar" src="img/avatars/user-02.jpg" alt="">
            </div>

            <div class="comment-content">

              <div class="comment-info">
                <cite>Shikamaru Nara</cite>

                <div class="comment-meta">
                  <time class="comment-time" datetime="2014-07-12T25:15">July 12, 2014 @ 25:15</time>
                  <span class="sep">/</span><a class="reply" href="#">Reply</a>
                </div>
              </div>

              <div class="comment-text">
                <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
              </div>

            </div>

          </li>

        </ol>
        <div class="respond">

          <h3>Leave a Comment</h3>

          <form name="contactForm" id="contactForm" method="post" action="">
            <fieldset>

              <div class="form-field">
                <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
              </div>

              <div class="form-field">
                <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
              </div>

              <div class="form-field">
                <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website" value="">
              </div>

              <div class="message form-field">
                <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message"></textarea>
              </div>

              <button type="submit" class="submit button-primary">Submit</button>

            </fieldset>
          </form>

        </div>
      </div>
    </div>
  </div>-->
</section>

<?php get_footer(); ?>