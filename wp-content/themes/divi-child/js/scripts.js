(function($) {
	$(document).ready(function() {
		// console.log('it workz');

		// matchHeight
		$("div.home-blog-grid h2.entry-title").matchHeight();
		$("div.home-blog-grid article").matchHeight();
		$("h3.section-header").matchHeight();
		$("div.main-img-section .et_pb_column").matchHeight();
		$("div.group-members-grid").matchHeight();
		// $("ul.mega-sub-menu li.mega-menu-header a.mega-menu-link").matchHeight();
		// $("ul.mega-sub-menu li.mega-menu-item a.mega-menu-link").matchHeight();

		//magnificPopUp
		// var $et_post_gallery = $( '.et_post_gallery' );
		// var $et_lightbox_image = $( '.et_pb_gallery_image');
		// if ( $et_post_gallery.length ) {
		// 	$et_lightbox_image.magnificPopup( {
		// 		image: {
		// 			titleSrc: function(item) {
		// 				return item.el.parents('div.et_pb_gallery_item').find('p.et_pb_gallery_caption').html();
		// 			}
		// 		}
		// 	});
		// }
		$('.et_pb_gallery').magnificPopup({
          delegate: 'div.et_pb_gallery .et_pb_gallery_item .et_pb_gallery_image a',
          type: 'image',
          gallery:{enabled:true},
          image: {
             titleSrc: function(item) {
             return "this wekrz";
             }
       }
      });



	});
})(jQuery);