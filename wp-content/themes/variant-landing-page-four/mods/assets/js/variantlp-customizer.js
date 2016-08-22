/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
(function ($) {
    //Logo
    wp.customize('vlp_logo', function (value) {
        value.bind(function (newval) {
            var data = {
                'action': 'variantlp_image_link_callback',
                'newval': newval // We pass php values differently!
            };
            // We can also pass the url value separately from ajaxurl for front end AJAX implementations
            jQuery.post(variantlp_ajax.ajaxurl, data, function (response) {
                var data = JSON.parse(response);
                $(".header .logo img").attr("src", data.src);
                $('.header .logo img').attr('alt', data.alt);
            });
        });
    });

    //Contact number
    wp.customize('vlp_contact_number', function (value) {
        value.bind(function (newval) {
            $('.header .contact_detail .c-number').text(newval);
        });
    });

    //Top heading
    wp.customize('vlp_top_heading', function (value) {
        value.bind(function (newval) {
            $('.top_feature_container .top_feature_content h1').html(newval);
        });
    });

    //Top description
    wp.customize('vlp_top_description', function (value) {
        value.bind(function (newval) {
            $('.top_feature_container .top_feature_content p').text(newval);
        });
    });
    //Top background image2
    wp.customize('vlp_top_bg_img', function (value) {
        value.bind(function (newval) {
            $('.top_feature_container').css('background-image', 'url(' + newval + ')');
        });
    });

    //Top background image2
    wp.customize('vlp_top_bg_img2', function (value) {
        value.bind(function (newval) {
            $('.top_feature_container').css('background-image', 'url(' + newval + ')');
        });
    });

    //Top background image3
    wp.customize('vlp_top_bg_img3', function (value) {
        value.bind(function (newval) {
            $('.top_feature_container').css('background-image', 'url(' + newval + ')');
        });
    });

    //Top background image4
    wp.customize('vlp_top_bg_img4', function (value) {
        value.bind(function (newval) {
            $('.top_feature_container').css('background-image', 'url(' + newval + ')');
        });
    });

    //Top background image5
    wp.customize('vlp_top_bg_img5', function (value) {
        value.bind(function (newval) {
            $('.top_feature_container .top-bg img').attr('src', newval);
        });
    });

    //Form share link
    wp.customize("vlp_lead_form", function (value) {
        value.bind(function (newval, oldval) {
            var new_part = newval.substring(newval.lastIndexOf('/') + 1);
            if ($(".form_wrapper_custom").length) {
                var old_part = oldval.substring(oldval.lastIndexOf('/') + 1);
                var form_src = $(".form_wrapper_custom iframe").attr("src");
                var new_form_src = form_src.replace(old_part, new_part);
                $(".form_wrapper_custom iframe").attr("src", '');
                $(".form_wrapper_custom iframe").attr("src", new_form_src);
            } else {

                var data = {
                    action: 'variantlp_form_ajax',
                    formid: new_part,
                };
                jQuery.post(variantlp_ajax.ajaxurl, data, function (response) {
                    if (response) {
                        $('#lead_form_wrapper').empty();
                        $('#lead_form_wrapper').append(response);
                    }
                });
            }
        });

    });


    //Iframe Height
    wp.customize('vlp_form_height', function (value) {
        value.bind(function (newval) {
            $('.form_wrapper_custom iframe').attr('height', newval);
        });
    });
    /**
     * Feature main heading and description
     */
    //Feature heading
    wp.customize("vlp_feature_heading", function (value) {
        value.bind(function (newval) {
            $(".template_feature_container h2").text(newval);
        });
    });
    //Feature Description
    wp.customize("vlp_feature_description", function (value) {
        value.bind(function (newval) {
            $(".template_feature_container p").text(newval);
        });
    });
    /**
     * Feature 1
     */
    //Feature Image
    wp.customize('vlp_fa_image1', function (value) {
        value.bind(function (newval) {
            var data = {
                'action': 'variantlp_image_link_callback',
                'newval': newval // We pass php values differently!
            };
            // We can also pass the url value separately from ajaxurl for front end AJAX implementations
            jQuery.post(variantlp_ajax.ajaxurl, data, function (response) {
                var data = JSON.parse(response);
                $("img.vlp_fa_image1").attr("src", data.src);
                $("img.vlp_fa_image1").attr('alt', data.alt);
            });
        });
    });
    //Feature Description1
    wp.customize("vlp_fa_description1", function (value) {
        value.bind(function (newval) {
            $(".feature_item_content .feature_item #vlp_fa_description1").text(newval);
        });
    });
    /**
     * Feature 2
     */
    //Feature Image
    wp.customize('vlp_fa_image2', function (value) {
        value.bind(function (newval) {
            var data = {
                'action': 'variantlp_image_link_callback',
                'newval': newval // We pass php values differently!
            };
            // We can also pass the url value separately from ajaxurl for front end AJAX implementations
            jQuery.post(variantlp_ajax.ajaxurl, data, function (response) {
                var data = JSON.parse(response);
                $("img.vlp_fa_image2").attr("src", data.src);
                $("img.vlp_fa_image2").attr('alt', data.alt);
            });
        });
    });
    //Feature Description2
    wp.customize("vlp_fa_description2", function (value) {
        value.bind(function (newval) {
            $(".feature_item_content .feature_item #vlp_fa_description2").text(newval);
        });
    });
    /**
     * Feature 3
     */
    //Feature Image
    wp.customize('vlp_fa_image3', function (value) {
        value.bind(function (newval) {
            var data = {
                'action': 'variantlp_image_link_callback',
                'newval': newval // We pass php values differently!
            };
            // We can also pass the url value separately from ajaxurl for front end AJAX implementations
            jQuery.post(variantlp_ajax.ajaxurl, data, function (response) {
                var data = JSON.parse(response);
                $("img.vlp_fa_image3").attr("src", data.src);
                $("img.vlp_fa_image3").attr('alt', data.alt);
            });
        });
    });
    //Feature Description3
    wp.customize("vlp_fa_description3", function (value) {
        value.bind(function (newval) {
            $(".feature_item_content .feature_item #vlp_fa_description3").text(newval);
        });
    });
    /**
     * Feature 4
     */
    //Feature Image
    wp.customize('vlp_fa_image4', function (value) {
        value.bind(function (newval) {
            var data = {
                'action': 'variantlp_image_link_callback',
                'newval': newval // We pass php values differently!
            };
            // We can also pass the url value separately from ajaxurl for front end AJAX implementations
            jQuery.post(variantlp_ajax.ajaxurl, data, function (response) {
                var data = JSON.parse(response);
                $("img.vlp_fa_image4").attr("src", data.src);
                $("img.vlp_fa_image4").attr('alt', data.alt);
            });
        });
    });
    //Feature Description3
    wp.customize("vlp_fa_description4", function (value) {
        value.bind(function (newval) {
            $(".feature_item_content .feature_item #vlp_fa_description4").text(newval);
        });
    });
    //Client Heading 
    wp.customize('vlp_testimonial_heading_text', function (value) {
        value.bind(function (newval) {
            $('.testimonial_heading_content #vlp_top_heading').text(newval);
        });
    });
    /**
     * Testimonial Section
     */
//Image
    wp.customize("vlp_ct_image1", function (value) {
        value.bind(function (newval) {
            $(".testimonial_item_content #testimonial_item1 img").attr("src", newval);
        });
    });
    //Testimonial
    wp.customize("vlp_ct_description1", function (value) {
        value.bind(function (newval) {
            $(".testimonial_item_content #testimonial_item1 p").text(newval);
        });
    });
    //Link
    wp.customize("vlp_ct_link_url1", function (value) {
        value.bind(function (newval) {
            $(".testimonial_item_content #testimonial_item1 a").attr("href", newval);
        });
    });
    //Link text
    wp.customize("vlp_ct_link_text1", function (value) {
        value.bind(function (newval) {
            $(".testimonial_item_content #testimonial_item1 a").text(newval);
        });
    });

    wp.customize("vlp_ct_image2", function (value) {
        value.bind(function (newval) {
            $(".testimonial_item_content #testimonial_item2 img").attr("src", newval);
        });
    });
    //Testimonial
    wp.customize("vlp_ct_description2", function (value) {
        value.bind(function (newval) {
            $(".testimonial_item_content #testimonial_item2 p").text(newval);
        });
    });
    //Link
    wp.customize("vlp_ct_link_url2", function (value) {
        value.bind(function (newval) {
            $(".testimonial_item_content #testimonial_item2 a").attr("href", newval);
        });
    });
    //Link text
    wp.customize("vlp_ct_link_text2", function (value) {
        value.bind(function (newval) {
            $(".testimonial_item_content #testimonial_item2 a").text(newval);
        });
    });

    wp.customize("vlp_blog_heading_text", function (value) {
        value.bind(function (newval) {
            $('.blog-heading-wrapper h1.blog-section-heading').text(newval);
        });
    });
    //Footer Text
    wp.customize('vlp_footer_text', function (value) {
        value.bind(function (newval) {
            $('.footer_content p.footer-text').text(newval);
        });
    });
})(jQuery);
