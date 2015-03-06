	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2>Get in Touch !</h2>
			</div>

            <form id="bward-form" class="bward-form" data-async action="tmpl/email.php" method="POST">

                <div class="modal-body">
                    <input name="studio51-secure" type="text" id="studio51-secure" class="form-control hidden" placeholder="Please leave empty.." style="display: none;" />

                    <div class="row">
                        <div class="col-lg-12">
                            <input name="bward-name" type="text" id="bward-name" class="form-control" placeholder="Name *" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <input name="bward-email" type="email" id="bward-email" class="form-control" placeholder="Email *" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <input name="bward-phone" type="text" id="bward-phone" class="form-control" placeholder="Phone" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <select name="bward-enquiry" id="bward-enquiry" class="form-control">
                                <option selected disabled >Your Enquiry *</option>
                                <option value="Visual Safety Check">Visual Safety Check</option>
                                <option value="Quote">Quotes</option>
                                <option value="Booking">Bookings</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <textarea name="bward-description" id="bward-description" class="form-control" placeholder="Query Description.. *"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="row">
                        <div class="col-lg-4 col-sm-offset-8">
                            <input type="submit" name="submit" class="btn btn-block btn-primary" value="Send" />
                        </div>
                    </div>
                </div>
			</form>
        </div>
    </div>

     	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>

		jQuery(function($) {

			$('form[data-async]').on('submit', function(event) {

				var $form 	= $(this);

				$.ajax({
					type		: $form.attr('method'),
					url			: $form.attr('action'),
					data		: $form.serialize(),
					beforeSend 	: function() {

						$('.modal-body').slideUp('slow');
						$('.modal-footer').remove();

						setTimeout( function() {

							$('.modal-body').empty().slideDown('slow').html('<div class="alert alert-info"><p>Your query is being sent !</p></div>').fadeIn('slow');

						}, 350 );

						setTimeout( function() {

							$('.modal-body').slideUp('slow');

						}, 2000 );
					},
					success		: function( data, status ) {

						setTimeout( function() {

							$('.modal-body').empty().slideDown('slow');
							$('.modal-body').append('<div class="alert alert-success"><p>Your message has been sent !</p></div>').fadeIn('slow');
							$('.modal-body').append('<div class="well"><p>Thank you for your query!<br />I will get back to you as soon as possible!<br /><br />Best Regards,<br />Ben</p></div>');

						}, 2200 );

						setTimeout( function() {

							$('.modal').modal('hide')

						}, 10000 );
					},
					error  		: function() {

						setTimeout( function() {

							$('.modal-body').empty().slideDown('slow');
							$('.modal-body').append('<div class="alert alert-danger"><p>I\'m sorry, there was an error while trying to send the message!</p></div>').fadeIn('slow');

						}, 2200 );
					}
				});

				event.preventDefault();
			});
		});

	</script>
