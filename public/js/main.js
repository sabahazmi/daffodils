
 jQuery(document).ready(function(){
            jQuery('.btn.btn-primary:contains("Download Now!")').click(function(){
                var link=jQuery(this).attr('href');
                ga('send','event','Button','Click','Download Now');
            });
            jQuery('.btn.btn-primary:contains("1.877.880.1862")').click(function(){
                var link=jQuery(this).text();
                ga('send','event','Button','Click','Call Now 1.877.880.1862');
            });
        });



