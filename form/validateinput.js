$(document).ready(function() {
  $('#submit').on('click', function(e) {
    const username = $('#username').val();
    const office = $('#office').val();
    const officeaddress = $('#officeaddress').val();
    const team = $('#team').val();
    const email = $('#email').val();
    const companywebsite = $('#companywebsite').val();
    const pattern = /@gmail|@yahoo/g;
    const urlPattern = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/g;

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
    } else {
      if (email.match(pattern)) {
        e.preventDefault();
        $('.errorMessage').css('background', '#f8d7da');
        $('.errorMessage').css('color', '#721c24');
        $('.errorMessage').css('border-radius', '4px');
        $('.errorMessage').css('font-size', '1rem');
        $('.errorMessage').css('margin', '10px auto');
        $('.errorMessage').html('Please enter your work email address');
      }
      if (!companywebsite.match(urlPattern)) {
        e.preventDefault();
        $('.errorMessage').css('background', '#f8d7da');
        $('.errorMessage').css('color', '#721c24');
        $('.errorMessage').css('border-radius', '4px');
        $('.errorMessage').css('font-size', '1rem');
        $('.errorMessage').css('margin', '10px auto');
        $('.errorMessage').html('Please enter a valid url');
      }
    }
  });
});
