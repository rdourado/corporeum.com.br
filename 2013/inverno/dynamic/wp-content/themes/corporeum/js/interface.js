$(document).ready(function(){

	$('body').removeClass('no-js');
	
	// Fancybox
	
	try{
		function titleFormat(title, currentArray, currentIndex, currentOpts) {
			return '<div id="fancybox-title-over">' + $(".lookbook-list>.look-item:eq("+currentIndex+")>.info").html() + '</div>';
		}
		$(".lookbook-list>*>a").attr('rel', 'lookbook').fancybox({
			overlayColor: '#000',
			hideOnContentClick: false,
			padding: 0,
			/*title: $this.find('.info').text(),*/
			titlePosition: 'over',
			titleFormat: titleFormat
		});
		$(".lookbook-list>.active>a").trigger('click');
		$(".campanha-list>*>a").attr('rel', 'campanha').fancybox({
			overlayColor: '#000',
			hideOnContentClick: false,
			padding: 0,
			titlePosition: 'over',
			margin: 0
		});
		$(".campanha-list>.active>a").trigger('click');
	}catch(e){}
		
	//
	// Home
	//

	try{
		var $network = $('#network'),
			netWidth = $network.outerWidth() - parseInt($network.css('paddingLeft'));
		$network.hover(function(){
			$network.stop().animate({
				marginRight: 0
			}, 'slow');
		},function(){
			$network.stop().animate({
				marginRight: -netWidth
			}, 'slow');
		}).trigger('mouseout');
	}catch(e){}

	//
	// Fancybox
	//

	try{
		$('.fancybox', '#body').attr('rel', 'fancy').fancybox({padding: 0, closeClick: true, loop: false});
	}catch(e){}
	
	//
	// Easy paginate
	//

	try{
		 $(".clipping-list").easyPaginate({ step: 3, delay: 200 });
	}catch(e){}
	
	//
	// Clipping: imagem crescendo
	//
	
	$('.clipping-list li').hover(
		function() {
			$(this).children('img').stop().animate({ width: '250px', height: '363px', top: '-30px', left: '-20px' }, 360, 'swing');
		},
		function() {
			$(this).children('img').stop().animate({ width: '200px', height: '290px', top: '0', left: '0' }, 200);	
	}); 
	
	//
	// Mask plugin
	//
	
	try{
		$(".cadastre-se #cf2_field_5, .cadastre-se #cf2_field_6, .contato #cf_field_8, .multimarcas #cf3_field_9").mask("(99) 9999-9999?9");            		
	}catch(e){}
	
	//
	// Início: título como link
	//
	
	try{
		$(".inicio li.network-item h2").click(function(){
			window.location=$(this).prev('a').attr('href'); 
		});            		
	}catch(e){}
	
	//
	// Campanha e Lookbook: botão voltar
	//
	

	$('a.bt_voltar').click(function() {
			window.history.go(-1); 
			return false;
	});

			
	//
	// Slider
	//

	try{
		$('.slider', '#body').each(function(){
			var $this = $(this), 
				sizes = [], 
				wid = 0,
				show = parseInt($this.attr('data-show')),
				margin = parseInt($('li', this).show().css('float', 'left').first().css('marginRight'));
			if (!show) show = 1;
			$('img:not(.ignore)', this).each(function(){
				var $this = $(this);
				sizes.push({w: $this.width() + margin, h: $this.height()});
				wid += sizes[sizes.length - 1].w;
			});
			$this.data('sizes', sizes).data('current', 0).width(wid);
			$this.data('show', show).data('margin', margin);
			$this.css({padding:0, position:'relative'});
			$this.wrap('<div class="slider-container"></div>');
		});
		$('.slider-container').wrap('<div class="slider-wrap"></div>').css({
			overflow: 'hidden',
			height:   '100%',
			width:    '100%'
		});
		$('.slider-wrap').each(function(){
			var $this 	= $(this),
				$slider = $this.find('>.slider-container>.slider'),
				sizes 	= $slider.data('sizes'),
				margin 	= $slider.data('margin'),
				show 	= $slider.data('show');
			
			var w = 0, h = 0;
			for (var i = 0; i < show; i++) {
				w += sizes[i].w ? sizes[i].w : 0;
				h = sizes[i].h > h ? sizes[i].h : h;
			}
			w -= margin;
			
			$this.css({
				marginLeft:  'auto',
				marginRight: 'auto',
				position: 	 'relative',
				height: 	 h,
				width: 		 w
			}).prepend('<a href="" class="slider-prev"></a><a href="" class="slider-next"></a>');
		});
		$('.slider-prev').hide();
		$('.slider-prev,.slider-next').unbind('click').click(function(e){
			e.preventDefault();
			var $this 		= $(this),
				$wrap 		= $this.parent(),
				is_prev 	= $this.hasClass('slider-prev'),
				$container 	= is_prev ? $this.next().next() : $this.next(),
				$slider 	= $container.find('>.slider');
				sizes 		= $slider.data('sizes'),
				current 	= $slider.data('current'),
				margin 		= $slider.data('margin'),
				show 		= $slider.data('show'),
				diff 		= sizes.length % show;
			
			if (is_prev) current = current - show >= 0 ? current - show : 0;
			else current = current + show <= sizes.length - diff ? current + show : sizes.length - diff;
			
			current <= 0 ? $('.slider-prev', $wrap).fadeOut() : $('.slider-prev', $wrap).fadeIn();
			current >= sizes.length - 1 ? $('.slider-next', $wrap).fadeOut() : $('.slider-next', $wrap).fadeIn();
			
			if (current != $slider.data('current') && current < sizes.length) {

				var w = 0, h = 0, l = 0, r = 0;
				for (var i = current; i < current + show; i++) {
					w += sizes[i] ? sizes[i].w : 0;
					h = (sizes[i] && sizes[i].h) > h ? sizes[i].h : h;
					l += sizes[i-show] ? sizes[i-show].w : 0;
					r += sizes[i] ? sizes[i].w : 0;
				}

				$slider.data('current', current).animate({
					left: is_prev ? '+='+r : '-='+l
				}, 'slow');
				$wrap.animate({
					width: w - margin,
					height: h
				}, 'slow').css('overflow', 'visible');

			}
		});
		$('body').unbind('keydown').keydown(function(e){
			var keyCode = e.keyCode || e.which,
				arrow = {left: 37, up: 38, right: 39, down: 40};
			if (keyCode == arrow.left)
				$('.slider-prev').trigger('click');
			else if (keyCode == arrow.right)
				$('.slider-next').trigger('click');
		});
	}catch(e){}

});