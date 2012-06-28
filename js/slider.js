$(document).ready(function() {
	var pics = [$('#img1'), $('#img2'), $('#img3'), $('#img4')];
	var caps = [$('#cap1'), $('#cap2'), $('#cap3'), $('#cap4')];
	var pic_num = 0;

	// go to the next picture when clicking on next
	// go back to the first picture after the last one
	$('#next').click(function() {
		
		pics[pic_num].fadeOut();
		caps[pic_num].fadeOut();
		pic_num++;
		
		if(pic_num > 3) {
			pic_num = 0;
		}
		
		caps[pic_num].fadeIn();
		pics[pic_num].fadeIn();
	});
	
	// go back to the previous picture, same as next
	$('#prev').click(function() {
		pics[pic_num].fadeOut();
		caps[pic_num].fadeOut();

		if(pic_num < 1) {
			pic_num = 3;
		}
		else {
			pic_num--;
		}
		
		pics[pic_num].fadeIn();
		caps[pic_num].fadeIn();
	});
});