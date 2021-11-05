<style>
.text-overflow {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
</style>
<!-- Page Content -->
    <div class="container">
        
        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= lang('books_list_front'); ?>
                    <small></small>
                </h1>
                <div class="box">
                    <div class="box-body">
                        <form class="form-inline" action="<?= base_url();?>home/index" method="get">
                          <div class="form-group col-md-3">
                            <input name="book_title" type="text" style="width: 100%" class="form-control" id="" placeholder="<?= lang('book_title_name'); ?>">
                          </div>
                          <div class="form-group col-md-3">
                            <select class="form-control " style="width: 100%" name="authors[]" id="authors" multiple="">
                            </select>  
                          </div>
                          <div class="form-group col-md-3">
                            <select class="form-control" style="width: 100%" name="categories[]" id="categories" multiple="">
                            </select>  
                          </div>
                          <button type="submit" class="btn btn-default"><?= lang('search'); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Projects Row -->
        <div class="row">
            
            <div class="col-md-9">
                         <?php if ($books): ?>
                             <div class="col-md-12">
                                <div class="row text-center">
                                    <nav  aria-label="Page navigation">
                                        <?php echo $links; ?>
                                    </nav>
                                </div>
                            </div>
                            <?php foreach($books as $book): ?>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="bookItem fadeIn animated">
                                        <a href="#">
                                            <img src="<?= base_url(); ?>assets/uploads/book_covers/<?= $book->image; ?>" class="img-responsive" alt="<?= ($book->book_title); ?>">
                                            <span class="text-overflow"><?= $book->book_title ?></span>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="col-md-12">
                                <div class="row text-center">
                                    <nav  aria-label="Page navigation">
                                        <?php echo $links; ?>
                                    </nav>
                                </div>
                            </div>

                    <?php else: ?>
                        <h1 class="text-center">No Books in Database :D</h1>
                    <?php endif;?>
            </div>
            <div class="col-md-3">
                <blockquote>
                    <p><?= lang('menu_categories'); ?></p>
                </blockquote>
                <ul>
                    <?php if ($categories): ?>
                        <?php foreach ($categories as $category): ?>
                            <li>
                                <a href="<?= base_url(); ?>home/?categories=<?= $category->id; ?>"><?= $category->category_name ?></a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
                <blockquote>
                    <p><?= lang('menu_authors'); ?></p>
                </blockquote>
                 <ul>
                    <?php if ($authors): ?>
                        <?php foreach ($authors as $author): ?>
                            <li>
                                <a href="<?= base_url(); ?>home/?authors=<?= $author->id; ?>"><?= $author->author_name ?></a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <!-- /.row -->