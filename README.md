# opencharity
1. This is the source for the the new Drupal 7 site hosted at http://iitian.me/drupal
2. The theme was created from scratch and no CSS or HTML framework was used.
 
# The site is responsive
1. No CSS framework (i.e. Bootstrap, Foundation, or similar)
2. The site is tested with the latest version of Chrome, Firefox, and Safari. I couldn't test on Edge or IE11 but it should work there.
3. The site is also tested on iPhone 6s, Redmi Note 3 and Chrome's inbuilt mobile emulator. It is also tested on Tablets using an emulator and should work without any issues.

# Approach
1. A CSS layout from scratch has been created for this theme.
2. I've used media queries for responsive design.
3. Basic javascript is also used for the Mobile Menu.
4. Slick (non-drupal version with jQuery) was used for the carousels: Our Members and Blog: http://kenwheeler.github.io/slick
5. The background image in JPG format was compressed to 80% using Photoshop. The rest are in PNG.
6. The icons used are not the same as in the design as I couldn't get the SVGs. I created a new font for the same so it's lighter. I could use Awesome Font but that's just bulky. 
7. The homepage size is 663.5 kB and total requests is 34 which I feel is pretty good.
8. I've used Open Sans for text body and Raleway for headers. I couldn't get MuseoSans.

NOTE: 
1. BEM CSS methodology was used. However, I must respect drupal classes too.
2. No drupal inbuilt compression has been enabled.
3. I notice there's a usage of two similar colors in the design (#61c0bd and #57c0d5). To standardize, I have used only #61c0bd.


