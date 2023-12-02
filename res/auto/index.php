<html>
<head>
    <!-- Include jQuery and jQuery UI libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Include a CSS file for styling the autocomplete widget -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
</head>
<body>
    <!-- Create a form with an input box and a div element for displaying the results -->
    <form>
        <input type="text" id="search" placeholder="Search...">
        <div id="results"></div>
    </form>
    <script>
    // Use the jQuery ready function to execute the code when the document is ready
    $(document).ready(function(){
        // Use the jQuery autocomplete widget to attach the autocomplete functionality to the input box
        $("#search").autocomplete({
            // Specify the source of the data as the PHP script
            source: "search.php",
            // Specify the minimum number of characters required to trigger the autocomplete
            minLength: 1,
            // Specify the function to be executed when the user selects an option from the list
            select: function(event, ui){
                // Get the value of the selected option
                var value = ui.item.value;
                // Display the value in the input box
                $("#search").val(value);
                // Display the value in the results div
                $("#results").html("You selected: " + value);
            }
        });
    });
</script>
</body>
</html>