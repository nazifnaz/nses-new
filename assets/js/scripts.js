$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});

$("#quoteForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitQuoteForm();
});

function submitQuoteForm(){
    // Initiate Variables With Form Content
    $("#quote-submit").addClass("disabled");
    var name = $("#fq_name").val();
    var email = $("#fq_email").val();

    $.ajax({
        type: "GET",
        url: '/contact_submit',
        data: "name=" + name + "&email=" + email,
        success : function(text){
            $("#quote-submit").removeClass("disabled");
            document.getElementById("quoteForm").reset();
            if (text == "success"){
                alert("Thanks for your interest. We will get back to you soon.");
            } else {
                alert("Unable to process your request. Please try later.");
            }
        }
    });
}

function submitForm(){
    // Initiate Variables With Form Content
    $("#form-submit").addClass("disabled");
    $( "#msgSubmit" ).addClass( "hidden" );
    $("#msgFailed").addClass("hidden");
    var name = $("#fname").val() + " " + $("#lname").val();
    var email = $("#email").val();
    var message = $("#message").val();
    var subject = $("#subject").val();

    $.ajax({
        type: "GET",
        url: '/contact_submit',
        data: "name=" + name + "&email=" + email + "&message=" + message + "&subject=" + subject,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formFailed();
            }
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
    $("#form-submit").removeClass("disabled");
    document.getElementById("contactForm").reset();
}

function formFailed() {
    $("#msgFailed").removeClass("hidden");
    $("#form-submit").removeClass("disabled");
}