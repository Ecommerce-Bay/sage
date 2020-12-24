<footer class="content-info footer">
  <div class="container">
    <div>
      <div class="logos">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/logo-footer.png">
        <div class="social-media">
          <a href="#">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/linkedin.png">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/facebook.png">
          </a>
          <a href="#">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/twitter.png">
          </a>
        </div>
      </div>
      <div class="footer-links">
        <ul>
          <li><a href="#">Markets</a></li>
          <li><a href="#">Technology</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#">Press Events</a></li>
          <li><a href="#">Carreer</a></li>
          <li><a href="#">About</a></li>
        </ul>
        <div>
          <span>3981 St-Laurent, Suite 500</span>
          <span>Montréal, Québec</span>
          <span>CANADA H2W 1Y5</span>
          <span>hello@ghgsat.com</span>
        </div>
      </div>
    </div>
    @php(dynamic_sidebar('sidebar-footer'))
  </div>
</footer>
