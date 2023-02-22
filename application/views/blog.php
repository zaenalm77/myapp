<?php $this->load->view('partials/header'); ?>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                <form>
                    <input type="text" name="find" >
                    <button type="submit">CARI</button>
                </form><br>
                                    <?php  foreach($blogs as $key=>$blog): ?>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                <a href="<?php echo site_url('blog/detail/'.$blog['url']); ?>">
                                     <?php echo $blog['title']; ?>     
                                </a>  
                            </h2>
                            <!-- <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3> -->
                             <?php echo $blog['content']; ?>
                        </a>
                        <p class="post-meta">
                            
                             <div style="font-weight: bold;color: grey;">
                                 <a href="<?php echo site_url('blog/edit/'.$blog['id']); ?>">Edit</a>
                                  <a href="<?php echo site_url('blog/delete/'.$blog['id']); ?>">Delete</a>
                             </div>

                            

                            Posted by
                            <a href="#!">MyPost</a>
                            on <?php echo $blog['date']; ?>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <?php endforeach; ?>
                 
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2022</div>
                    </div>
                </div>
            </div>
<?php $this->load->view('partials/footer'); ?>








