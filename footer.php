<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>
      </div>
    </div>
  </main>
	<footer>
  <div class="container">
    <div class="row" id="fooTer">
      <div class="col-12 col-md-3">
        <h3>Quick links</h3>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Careers</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-3">
        <h3>Contact us</h3>
        <ul>
          <li><i class="fab fa-twitter"></i><a href="#">@californiatheme</a></li>
          <li><i class="fas fa-envelope"></i><a href="#">support@smallvictories.co</a></li>
          <li><i class="fas fa-phone"></i><a href="#">+1 917 (123) 4567</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-3">
        <h3>Newsletter</h3>
        <form>
          <div class="form-row align-items-center">
              <label class="sr-only" for="inlineFormInput">Email</label>
              <input type="text" class="form-control mr-1" id="inlineFormInput" placeholder="Your email">
              <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">OK</button>
          </div>
        </form>
      </div>
      <div class="col-12 col-md-3">
        <h3>Follow us</h3>
        <ul>
          <li><i class="fab fa-pinterest"></i><a href="#">Pinterest</a></li>
          <li><i class="fab fa-instagram"></i><a href="#">Instagram</a></li>
          <li><i class="fab fa-vimeo"></i><a href="#">Vimeo</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
