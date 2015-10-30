<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a href="/"><img src="<?php echo get_template_directory_uri(). '/images/logo.png'; ?>" /></a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <form class="navbar-form" role="search">
            <div class="input-group">
              <input class="form-control" placeholder="Search" type="text">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </div>
              </input>
            </div>
          </form>
        </li>
      </ul>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse link-header">
      <ul class="nav nav-pills navbar-left nav-cats">
        <li>
          <a data-method="delete" href="/users/sign_out">家電</a>
        </li>
        <li>
          <a data-method="delete" href="/users/sign_out">ファッション</a>
        </li>
        <li>
          <a data-method="delete" href="/users/sign_out">TV</a>
        </li>
        <li class="active">
          <a data-method="delete" href="/users/sign_out">冷蔵庫</a>
        </li>
        <li>
          <a data-method="delete" href="/users/sign_out">洗濯機</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
