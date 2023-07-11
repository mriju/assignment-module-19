<!DOCTYPE html>
<html>
  <head>
    <title>Blog Post Details</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="mt-4" id="blog-post-title">{{ $blogPost->title }}</h1>
      <div id="blog-post-content">{{ $blogPost->content }}</div>
      <!-- Link to comments page -->
      <a class="btn btn-primary mt-3" href="/blog-posts/{{ $blogPost->id }}/comments">View Comments</a>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
      // ...
    </script>
  </body>
</html>