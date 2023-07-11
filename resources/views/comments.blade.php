<!DOCTYPE html>
<html>
  <head>
    <title>Blog Post Comments</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="mt-4" id="blog-post-title">Title: {{ $blogPost->title }}</h1>
      <h3>Previous Comment: {{ $blogPost->content }}</h3>
      <h2 class="mt-4">Comments</h2>

      <!-- Existing comments -->


      <!-- Add new comment form -->
      <form action="/blog-posts/{{ $blogPost->id }}/comments" method="POST" class="mt-3">
        @csrf
        <div class="form-group">
          <textarea name="content" class="form-control" rows="3" placeholder="Add a comment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <!-- Add Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
