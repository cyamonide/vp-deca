<!DOCTYPE html>
<html>
  <head>
    <title>DecaApp</title>
    <%= csrf_meta_tags %>
    
    <!-- TODO: change from absolute to dynamic -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <%= stylesheet_link_tag    'application', media: 'all', 'data-turbolinks-track': 'reload' %>
    <%= javascript_include_tag 'application', 'data-turbolinks-track': 'reload' %>
    <%= render 'layouts/shim' %>
  </head>

  <body>
    <%= render 'layouts/header' %>
    <div class="container-background" style="background-image:url(<%=yield(:backgroundImg)%>)">
      <div class="container">
        <%= yield %>
      </div>
    </div>
    <%= render 'layouts/footer' %>
  </body>
</html>
