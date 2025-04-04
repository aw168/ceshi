<?php
/**
 * Just another official theme
 *
 * @package Classic 22
 * @author Typecho Team
 * @version 1.0
 * @link http://typecho.org
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<main class="container">
    <div class="container-thin">
        <?php if (!($this->is('index')) and !($this->is('post'))): ?>
            <h4 class="text-center text-muted">
                <?php $this->archiveTitle([
                    'category' => _t('分类 %s 下的文章'),
                    'search'   => _t('包含关键字 %s 的文章'),
                    'tag'      => _t('标签 %s 下的文章'),
                    'author'   => _t('%s 发布的文章')
                ], '', ''); ?>
            </h4>
        <?php endif; ?>

    <?php while ($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
            <?php postMeta($this); ?>
            
            <div class="entry-content fmt" itemprop="articleBody">
                <?php $this->content(_t('阅读全文')); ?>
            </div>
        </article>
        <hr class="post-separator">
    <?php endwhile; ?>
    </div>

    <!-- <div class="text-center">
        <a href="#">&laquo; Older Posts</a>
        <span class="mx-2 text-muted">&middot;</span>
        <a href="#">Newer Posts &raquo;</a>
    </div> -->
    <?php $this->pageNav('← ' . _t('前一页'), _t('后一页') . ' →'); ?>
</main>

<?php $this->need('footer.php'); ?>
