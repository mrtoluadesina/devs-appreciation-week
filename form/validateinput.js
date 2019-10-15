$(document).ready(function() {
  $('#submit').on('click', function(e) {
    const username = $('#username').val();
    const office = $('#office').val();
    const officeaddress = $('#officeaddress').val();
    const team = $('#team').val();
    const email = $('#email').val();
    const companywebsite = $('#companywebsite').val();

    if (
      !username ||
      !office ||
      !officeaddress ||
      !team ||
      !email ||
      !companywebsite
    ) {
      e.preventDefault();
      $('.errorMessage').css('background', '#f8d7da');
      $('.errorMessage').css('color', '#721c24');
      $('.errorMessage').css('border-radius', '4px');
      $('.errorMessage').css('font-size', '1rem');
      $('.errorMessage').css('margin', '10px auto');

      $('.errorMessage').html('All Fields are required');
    }
  });
});
