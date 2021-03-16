<aside class="sidebar">
  <div class="pink">
    <h3>  <i class="fa fa-folder-o "></i> カテゴリー</h3>
  </div>
  <div id="category" class="category">
    <ul>
      <?php wp_list_categories('title_li=&exclude=16');?>
    </ul>
  </div>
  <div class="pink">
    <h3><i class="fa fa-calendar "></i> 日付</h3>
  </div>
  <div id="days" class="days">
    <ul>
      <?php wp_get_archives(); ?>
    </ul>
  </div>
</aside>
