// Hello, welcome to my custom AJAX blogging client!
// I am in mo means a professional, so there may be issues in this code. If you
// do see something that looks absolutely disgusting or want to give a
// suggestion, feel free to let me know!

class BlogListClient {

  constructor(api, loader, list, listItem, emptyView=null) {
    this.api = api;
    this.loader = $(loader);
    this.t_list = $(list);
    this.t_listItem = $(listItem);
    this.curPosts = null;
    this.emptyView = $(emptyView);
  }

  getPosts() {

    $.ajax({
      url: this.api,
      data: {},
      dataType: 'json',
      beforeSend: () => {
        this.loader.show();
      },
      success: (data, status, xhr) => {
        this.curPosts = data.posts
        this.curFilteredCount = data.filteredCount
        this.curTotalCount = data.totalCount
      },
      complete: () => {
        this.renderPosts();
        this.loader.hide();
      }
    });

  }

  renderPosts() {

    this.emptyView.hide();
    this.t_list.empty();

    if (this.curPosts.size < 1) {
      this.emptyView.show();
    }

    this.curPosts.forEach(post => {
      var postItem = this.t_listItem.clone(true);

      postItem.find('.post-title').text(post.title);
      postItem.find('.post-date').text(post.created_at);
      postItem.find('.post-description').text(post.short_description);
      postItem.show().removeClass('card-template')
      this.t_list.append(postItem);
    });

  }

}