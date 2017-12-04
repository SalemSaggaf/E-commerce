@extends('index')
@section('content')
<link rel="stylesheet" type="text/css" href="css/product_review.css">
      <div class="main_image">
<div id="wrap">


  <div id="product_layout_3">
                <div class="product_image">
        <img src="{{$product->image_url}}"/>
      </div>
    </div>
    <div class="product_desc">
      <h1>{{$product->name}}</h1>
      <span class="price">$75</span>
      <span class="sale_price">{{$product->price}}</span>
      <span class="stars"><i class="fa fa-star-half"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>

          <div class="buying">
                 <div class="quantity">
                   <label for="quantity">عدد :</label>
                   <input type="text">
                 </div>
                 <div class="cart">
                   <a href="#" class="add">اضف <i class="fa fa-shopping-cart fa-lg"></i></a>
                 </div>
          </div>
          <div class="other_options">
          <span class="SKU">SKU:12345</span>
          <span class="QTY">QTY:35</span>
          </div>

          <div class="description">
            <p>{{$product->description}}</P>
        
        </div>
          <div class="social">
                   <span class="share">Share This:</span><span class="buttons"><img src="https://i.imgur.com/M8D8rr8.jpg"/></span>
           </div>
      </div>
      <div class="tabular">
        <ul class="tabs group">
          <li><a href="#/one">More Info</a></li>
          <li><a href="#/two">Reviews</a></li>
          <li><a class="active" href="#/three">Details</a></li>
        </ul>
          <div id="content">
            <aside id="one">
              <p>Excuse me. I'll call you tonight. Right. Yeah, I think maybe you do. Wait a minute, wait a minute, Doc, are you telling me that you built a time machine out of a delorean.</p>
              <p>Um, well it's a delorean, right? Yeah okay. Wow, ah Red, you look great. Everything looks great. 1:24, I still got time. Oh my god. No, no not again, c'mon, c'mon. Hey. Libyans. Yeah, well uh, lets keep this brain melting stuff to ourselves, okay? Yeah, yeah what are you wearing, Dave.</p>
               <p>Excuse me. I'll call you tonight. Right. Yeah, I think maybe you do. Wait a minute, wait a minute, Doc, are you telling me that you built a time machine out of a delorean.</p>
              <p>Um, well it's a delorean, right? Yeah okay. Wow, ah Red, you look great. Everything looks great. 1:24, I still got time. Oh my god. No, no not again, c'mon, c'mon. Hey. Libyans. Yeah, well uh, lets keep this brain melting stuff to ourselves, okay? Yeah, yeah what are you wearing, Dave.</p>
              <p>Excuse me. I'll call you tonight. Right. Yeah, I think maybe you do. Wait a minute, wait a minute, Doc, are you telling me that you built a time machine out of a delorean.</p>
              <p>Um, well it's a delorean, right? Yeah okay. Wow, ah Red, you look great. Everything looks great. 1:24, I still got time. Oh my god. No, no not again, c'mon, c'mon. Hey. Libyans. Yeah, well uh, lets keep this brain melting stuff to ourselves, okay? Yeah, yeah what are you wearing, Dave.</p>
            </aside>
            <aside id="two">
              <span class="author">Marty Mcfly</span><span class="stars"><i class="fa fa-star-half"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><p>"Excuse me. I'll call you tonight. Right. Yeah, I think maybe you do. Wait a minute, wait a minute, Doc, are you telling me that you built a time machine out of a delorean.</p>
              <p>Um, well it's a delorean, right? Yeah okay. Wow, ah Red, you look great. Everything looks great. 1:24, I still got time. Oh my god. No, no not again, c'mon, c'mon. Hey. Libyans. Yeah, well uh, lets keep this brain melting stuff to ourselves, okay? Yeah, yeah what are you wearing, Dave.</p>
              <p>Hey c'mon, I had to change, you think I'm going back in that zoot suit? The old man really came through it worked. You'll find out in thirty years. Can't be. This is nuts. Aw, c'mon. Hey guys, you gotta get back in there and finish the dance. Right, and where am I gonna be?"</p>
              <span class="full_review"><a href="#">Read The Full Review</a></span>
              <span class="write_review"><a href="#">Write Your Own Review</a></span>
            </aside>
            <aside id="three">
              <div class="images">
                <img src="https://i.imgur.com/U28rUlR.jpg"/>
                <img src="https://i.imgur.com/NK3026a.jpg"/>
                <img src="https://i.imgur.com/w1sfKNd.jpg"/>
                <img src="https://i.imgur.com/xeDUcdP.jpg"/>
              </div>
              <div class="details">
              <p>Excuse me. I'll call you tonight. Right. Yeah, I think maybe you do. Wait a minute, wait a minute, Doc, are you telling me that you built a time machine out of a delorean.</p>
              <p>Um, well it's a delorean, right? Yeah okay. Wow, ah Red, you look great. Everything looks great. 1:24, I still got time. Oh my god. No, no not again, c'mon, c'mon. Hey. Libyans. Yeah, well uh, lets keep this brain melting stuff to ourselves, okay? Yeah, yeah what are you wearing, Dave</p>
              </div>
              </aside>
          </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	(function($) {

	var tabs =  $(".tabs li a");
  
	tabs.click(function() {
		var content = this.hash.replace('/','');
		tabs.removeClass("active");
		$(this).addClass("active");
    $("#content > aside").hide();
    $(content).fadeIn(200);
	});

})(jQuery);
</script>
@endsection

  

