
<!DOCTYPE html>
<html>
  <head>
    <title>All Blog Posts</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="mt-4">All Blog Posts</h1>
      <div class="row">
        @foreach ($blogPosts as $blogPost)
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">{{ $blogPost->title }}</h5>
              <p class="card-text">{{ $blogPost->content }}</p>
              <a href="/blog-posts/{{ $blogPost->id }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>

