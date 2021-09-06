// Hello, welcome to my custom AJAX blogging client!
// I am in mo means a professional, so there may be issues in this code. If you
// do see something that looks absolutely disgusting or want to give a
// suggestion, feel free to let me know!

class BlogListClient {

  constructor(api, loader, list, listItem, emptyView=null, urlPrefix='/') {
    this.api = api;
    this.loader = $(loader);
    this.t_list = $(list);
    this.t_listItem = $(listItem);
    this.curPosts = null;
    this.emptyView = $(emptyView);
    this.dateFormatOpts = { year: 'numeric', month: 'short', day: 'numeric' };
    this.urlPrefix = urlPrefix;
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
        data.posts.forEach((post) => {
          var cvtDate = new Date(post.created_at.date);
          post.created_at.date = cvtDate.toLocaleDateString('en-US', this.dateFormatOpts);
        })
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
      postItem.attr('href', this.urlPrefix + post.id)
      postItem.find('.post-title').text(post.title);
      postItem.find('.post-date').text(post.created_at.date);
      postItem.find('.post-description').text(post.short_description);
      postItem.show().removeClass('card-template')
      this.t_list.append(postItem);
    });

  }

}