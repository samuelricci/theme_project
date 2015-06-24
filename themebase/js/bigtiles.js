(function() {
  var $current = $( '.largetiles-posts' );
  var i = 0;

  $( '#displaynext' ).click(function() {
    i = ( i + 1 ) % $current.length;
    $current.hide().eq( i ).show();
    
  });
})();

