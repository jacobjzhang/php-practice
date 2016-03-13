    <footer>
        <div class="container">
            Copyright 2016 Jacob J. Zhang
        </div>    
    </footer>

<script src="https://code.jquery.com/jquery-2.2.1.min.js" integrity="sha256-gvQgAFzTH6trSrAWoH1iPo9Xc96QxSZ3feW6kem+O00=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="/quizzer/scripts/jquery-easing.js"></script>

<script type="text/javascript" charset="utf-8">
    $(window).load(function(){
      $().hatchShow();
    });		
    jQuery.fn.hatchShow = function(){
      $('.hsjs').css('display','inner-block').css('white-space','pre').each(function(){
        var t = $(this);
        t.wrap("<span class='hatchshow_temp' style='display:block'>");
        var pw = t.parent().width();
        while( t.width() < pw ){t.css('font-size', (t.fontSize()+1)+"px"),
          function(){while( t.width() > pw ){t.css('font-size', (t.fontSize()-.1)+"px")}};
        };
      }).css('visibility','visible');
    };
    jQuery.fn.fontSize = function(){return parseInt($(this).css('font-size').replace('px',''));};

</script>
<script>
$('.choice-block').on({
    click: function (event) {
        event.preventDefault();
        $(this).closest('form').submit();
    }
});
</script>

</body>
</html>