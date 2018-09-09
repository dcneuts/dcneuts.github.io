$(function() {
  // Invoking matchHeight method
  $('.grid-style, .grid-style-archive').matchHeight();

  // Converting BR tags in ACF into LI tags
  $('#recipe-durations').html('<li>' + $('#recipe-durations').html().replace(/<br( \/)?>/g, '</li><li>') + '</li>');
  $('#recipe-ingredients').html('<li>' + $('#recipe-ingredients').html().replace(/<br( \/)?>/g, '</li><li>') + '</li>');
  $('#recipe-servingsize').html('<li>' + $('#recipe-servingsize').html().replace(/<br( \/)?>/g, '</li><li>') + '</li>');
  $('#recipe-equipment').html('<li>' + $('#recipe-equipment').html().replace(/<br( \/)?>/g, '</li><li>') + '</li>');
  $('#recipe-doaheads').html('<li>' + $('#recipe-doaheads').html().replace(/<br( \/)?>/g, '</li><li>') + '</li>');

  // Ensuring each new LI has the right class assigned
  $('#recipe-durations li').not(':first').not('recipe-lineitem').addClass('recipe-lineitem');
  $('#recipe-ingredients li').not(':first').not('recipe-lineitem').addClass('recipe-lineitem');
  $('#recipe-servingsize li').not(':first').not('recipe-lineitem').addClass('recipe-lineitem');
  $('#recipe-equipment li').not(':first').not('recipe-lineitem').addClass('recipe-lineitem');
  $('#recipe-doaheads li').not(':first').not('recipe-lineitem').addClass('recipe-lineitem');

});
