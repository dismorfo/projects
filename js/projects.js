/**
 * Implementation of Drupal behavior.
 */
(function($) {
  
    Drupal.behaviors.projects = {};

    Drupal.behaviors.projects.attach = function(context) {

        $(document).ready(function() {
        
            $('.login a').click(function(e) {
                e.preventDefault();
                $('.login_block').removeClass('element-hidden');
            })
            
        });
    }

})(jQuery);
