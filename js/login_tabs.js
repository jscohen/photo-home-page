$(document).ready(function(){
$('#tabs div').hide();
$('#tabs div:first').show();
$('#tabs ul li:first').addClass('active');
$('<br /><input type="submit" value="Add to Cart" method="post" class="photo" style="margin-left:100px;" />  <button>Find this photo on Google Maps!</button><br />').insertAfter('.lytebox');

var imgs = [];

$('img').each(function() {
	imgs.push($(this).attr('alt'));
});

var i = 0;
var test = imgs[i];

$('.photo').each(function() {
	$(this).attr('name', function() {
		return $(imgs[i]);
		i++;
	});
});

$('#tabs ul li a').click(function(){
$('#tabs ul li').removeClass('active');
$(this).parent().addClass('active');
var currentTab = $(this).attr('href');
$('#tabs div').hide();
$(currentTab).show();
$('.lytebox').remove('<br /><input type="submit" value="Add to Cart" method="post" class="photo" style="margin-left:100px;" />  <button>Find this photo on Google Maps!</button><br />');
$('<br /><input type="submit" value="Add to Cart" method="post" class="photo" style="margin-left:100px;" />  <button>Find this photo on Google Maps!</button><br />').insertAfter('.lytebox');

var desc = $('.photo').closest('img').attr('alt');
$('.photo').attr('name', desc);

return false;
});
});
