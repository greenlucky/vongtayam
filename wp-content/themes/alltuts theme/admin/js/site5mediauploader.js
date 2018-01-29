//PORTFOLIO BUTTON

jQuery(document).ready(function() {

jQuery('#alltutsp_pitemlbutton').click(function() {
window.send_to_editor = function(html) {
 imgurl = jQuery('img',html).attr('src');
 jQuery('#alltutsp_pitemlurl').val(imgurl);
 jQuery('#alltutsp_pitemlsrc_img').attr('src',imgurl);
 tb_remove();
}


tb_show('', 'media-upload.php?post_ID=1&amp;type=image&amp;TB_iframe=true');
 return false;
});
});


//FEATUED BUTTON
jQuery(document).ready(function() {

jQuery('#alltutss_slideimage').click(function() {
window.send_to_editor = function(html) {
 imgurl = jQuery('img',html).attr('src');
 jQuery('#alltutss_slideimage_src').val(imgurl);
 jQuery('#alltutss_slideimage_src_img').attr('src',imgurl);
 tb_remove();
}


tb_show('', 'media-upload.php?post_ID=1&amp;type=image&amp;TB_iframe=true');
 return false;
});
});