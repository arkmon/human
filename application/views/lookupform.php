<html> <head>
    <title>Find a Student</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css" />
    <script src="/ecwm604/js/jquery-1.8.2.min.js" language="JavaScript"></script>
</head> <body>
<div class="container"> <div class="row">
        <fieldset>
            <legend>Find a student by ID</legend>
            <form class="form-search form-inline" method=GET>
                <input placeholder="Type a student ID" type=text name="ID" id="id">
                <input type=submit value="Search" id="findsubmit">
            </form>
        </fieldset>
    </div>
    <div class="row" id="result">   </div>
</div>
<script language="javascript">
    $('#findsubmit').click(function() {
            $.get("/newcode/index.php/find/lookupById_xml",{id : $('#id').val() },function(data) {
                var fname = $('firstname',data).text();
                var lname = $('lastname',data).text();
                $('#result').html('The student\'s name is ' + fname + ' ' + lname);
            });
            return false;
    });
</script>
</body> </html>

