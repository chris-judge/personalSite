<div class="contact page inside" ng-repeat="post in posts">
	<section class="intro contact-wrap" ng-repeat="introduction in post.acf.intro">
		<div class="content-wrap">
			<h1 ng-if="post.title.rendered" ng-bind-html="introduction.headline">{{introduction.headline}}</h1>
			<p ng-if="introduction.description">{{introduction.description}}</p>
		</div>
		<div class="form-wrap">
		<form class="c-form" action="" name="cf">
			<div class="name-wrap wrap" ng-class="{true: 'error'}[cf.name.$invalid && cf.name.$dirty] || {true: 'no-error'}[cf.name.$valid]">
				<input class="cfName" type="text" placeholder="Name" name="name" required ng-model="name" autocomplete="off"><i class="fa fa-check-circle-o correct" aria-hidden="true"></i><i class="fa fa-times-circle-o wrong" aria-hidden="true"></i>
			</div>
			<div class="email-wrap wrap" ng-class="{true: 'error'}[cf.email.$invalid && cf.email.$dirty] || {true: 'no-error'}[cf.email.$valid]">
				<input class="cfEmail" type="email" placeholder="Email" name="email" required ng-model="email" autocomplete="off"><i class="fa fa-check-circle-o correct" aria-hidden="true"></i><i class="fa fa-times-circle-o wrong" aria-hidden="true"></i>
			</div>
			<div class="phone-wrap wrap" ng-class="{true: 'error'}[cf.phone.$invalid && cf.phone.$dirty] || {true: 'no-error'}[cf.phone.$valid]">
				<input class="cfPhone" type="tel" placeholder="Phone" name="phone" required ng-model="phone" autocomplete="off" ng-minlength="10" numbers-only><i class="fa fa-check-circle-o correct" aria-hidden="true"></i><i class="fa fa-times-circle-o wrong" aria-hidden="true"></i>
			</div>
			<div class="wrap">
				<textarea class="cfComments" name="comments" id="" cols="30" rows="10" placeholder="Message" name="comment"></textarea>
			</div>
			<div class="submit-wrap wrap tar">
				<input type="submit" value="Submit" placeholder="Submit">
				<div class="loading-gif">
					<svg class="loading-gif" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					   width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
					  <rect x="0" y="13" width="4" height="5" fill="#333">
					    <animate attributeName="height" attributeType="XML"
					      values="5;21;5" 
					      begin="0s" dur="0.6s" repeatCount="indefinite" />
					    <animate attributeName="y" attributeType="XML"
					      values="13; 5; 13"
					      begin="0s" dur="0.6s" repeatCount="indefinite" />
					  </rect>
					  <rect x="10" y="13" width="4" height="5" fill="#333">
					    <animate attributeName="height" attributeType="XML"
					      values="5;21;5" 
					      begin="0.15s" dur="0.6s" repeatCount="indefinite" />
					    <animate attributeName="y" attributeType="XML"
					      values="13; 5; 13"
					      begin="0.15s" dur="0.6s" repeatCount="indefinite" />
					  </rect>
					  <rect x="20" y="13" width="4" height="5" fill="#333">
					    <animate attributeName="height" attributeType="XML"
					      values="5;21;5" 
					      begin="0.3s" dur="0.6s" repeatCount="indefinite" />
					    <animate attributeName="y" attributeType="XML"
					      values="13; 5; 13"
					      begin="0.3s" dur="0.6s" repeatCount="indefinite" />
					  </rect>
					</svg>
				</div>
			</div>
		</form>
		</div>
	</section>

	<div class="hidden-form-foot dn">
		<div class="inner-wrap">
<div class="wrap-this">
		
                <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_2"><form method="post" enctype="multipart/form-data" target="gform_ajax_frame_2" id="gform_2" action="/personal/" class="ng-pristine ng-valid">
                        <div class="gform_body"><ul id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below"><li id="field_2_1" class="gfield cfName gfield_contains_required field_sublabel_below field_description_below"><label class="gfield_label" for="input_2_1">Name<span class="gfield_required">*</span></label><div class="ginput_container"><input name="input_1" id="input_2_1" type="text" value="" class="large" tabindex="1" placeholder="Name"></div></li><li id="field_2_2" class="gfield cfEmail gfield_contains_required field_sublabel_below field_description_below"><label class="gfield_label" for="input_2_2">Email<span class="gfield_required">*</span></label><div class="ginput_container">
                            <input name="input_2" id="input_2_2" type="text" value="" class="large" tabindex="2" placeholder="Email">
                        </div></li><li id="field_2_3" class="gfield cfPhone gfield_contains_required field_sublabel_below field_description_below"><label class="gfield_label" for="input_2_3">Phone<span class="gfield_required">*</span></label><div class="ginput_container"><input name="input_3" id="input_2_3" type="text" value="" class="large" tabindex="3" placeholder="Phone"></div></li><li id="field_2_4" class="gfield cfComments field_sublabel_below field_description_below"><label class="gfield_label" for="input_2_4">Comments</label><div class="ginput_container">
					<textarea name="input_4" id="input_2_4" class="textarea large" tabindex="4" placeholder="Comment/Question" rows="10" cols="50"></textarea>
				</div></li><li id="field_2_5" class="gfield gform_hidden field_sublabel_below field_description_below"><input name="input_5" id="input_2_5" type="hidden" class="gform_hidden" value=""></li>
                            </ul></div>
        <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_2" class="gform_button button" value="Submit" tabindex="5" onclick="if(window[&quot;gf_submitting_2&quot;]){return false;}  window[&quot;gf_submitting_2&quot;]=true;  "> <input type="hidden" name="gform_ajax" value="form_id=2&amp;title=&amp;description=&amp;tabindex=1">
            <input type="hidden" class="gform_hidden" name="is_submit_2" value="1">
            <input type="hidden" class="gform_hidden" name="gform_submit" value="2">
            
            <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
            <input type="hidden" class="gform_hidden" name="state_2" value="WyJbXSIsIjgzZWY2OWM4MzdlMzc2OWMxZjIwNjJhMTlkY2IzMjMxIl0=">
            <input type="hidden" class="gform_hidden" name="gform_target_page_number_2" id="gform_target_page_number_2" value="0">
            <input type="hidden" class="gform_hidden" name="gform_source_page_number_2" id="gform_source_page_number_2" value="1">
            <input type="hidden" name="gform_field_values" value="">
            
        </div>
                        </form>
                        </div>
                <iframe style="display:none;width:0px;height:0px;" src="about:blank" name="gform_ajax_frame_2" id="gform_ajax_frame_2"></iframe>
                <script type="text/javascript">jQuery(document).ready(function($){gformInitSpinner( 2, 'http://localhost:8888/personal/wp-content/plugins/gravityforms/images/spinner.gif' );jQuery('#gform_ajax_frame_2').load( function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_2');var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_2').length > 0;var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = form_content.length > 0 && ! is_redirect && ! is_confirmation;if(is_form){jQuery('#gform_wrapper_2').html(form_content.html());setTimeout( function() { /* delay the scroll by 50 milliseconds to fix a bug in chrome */  }, 50 );if(window['gformInitDatepicker']) {gformInitDatepicker();}if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_2').val();gformInitSpinner( 2, 'http://localhost:8888/personal/wp-content/plugins/gravityforms/images/spinner.gif' );jQuery(document).trigger('gform_page_loaded', [2, current_page]);window['gf_submitting_2'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('#gforms_confirmation_message_2').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_2').replaceWith('<' + 'div id=\'gforms_confirmation_message_2\' class=\'gform_confirmation_message_2 gforms_confirmation_message\'' + '>' + confirmation_content + '<' + '/div' + '>');jQuery(document).trigger('gform_confirmation_loaded', [2]);window['gf_submitting_2'] = false;}, 50);}else{jQuery('#gform_2').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger('gform_post_render', [2, current_page]);} );} );</script><script type="text/javascript"> if(typeof gf_global == 'undefined') var gf_global = {"gf_currency_config":{"name":"U.S. Dollar","symbol_left":"$","symbol_right":"","symbol_padding":"","thousand_separator":",","decimal_separator":".","decimals":2},"base_url":"http:\/\/localhost:8888\/personal\/wp-content\/plugins\/gravityforms","number_formats":[],"spinnerUrl":"http:\/\/localhost:8888\/personal\/wp-content\/plugins\/gravityforms\/images\/spinner.gif"};jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 2) {if(typeof Placeholders != 'undefined'){
                        Placeholders.enable();
                    }} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script><script type="text/javascript"> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [2, 1]) } ); </script> 
	</div>
		</div>
	</div>
	<div class="thank-you ce-wrap dn">
		<div ng-bind-html="post.acf.thank_you_message"></div>
	</div>
</div>