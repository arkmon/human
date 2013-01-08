<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Human Resources</title>
    
  </head>
  <body>
   
	<form action="" method="GET">
                <div>
                    <div>First name:         <input type=text id="fn" name='firstname'> </div>
                    <div>Last name:          <input type=text id="ln" name='lastname'> </div>
                    <div>Department Name:    <select type="text" id="dt" name="dept" id="dept">
            <option value="">Select Department</option>
                            <option value="Customer Service">Customer Service</option>
                            <option value="Development">Development</option>
                            <option value="Finance">Finance</option>
                            <option value="Human Resources">Human Resources</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Production">Production</option>
                            <option value="Quality Management">Quality Management</option>
                            <option value="Research">Research</option>
                            <option value="Sales">Sales</option>
                    </select> </div>
                    <div>Current job Title:  <input type=text id="jt"name='jobtitle'> </div>
                    
                    <div><input value="Search" type="submit" id="search"></div>
                    </div>
                     
                    
                    
                    
   </form>
   <script language="javascript">
   $('#search').click(function() {
        $.get("index.php/find/findemp",{firstname : $('#fn').val(),lastname : $('#ln').val(),dept : $('#dt').val(),jobtitle : $('#jt').val() },function(data) {
// $('#result').html('First name: ' );
            var names = "";
            $.each(data, function(index, element) {
                if (index > 0) {names;}
                names += "<tr> <td>"+element.first_name +"</td> "+"<td>"+ element.last_name+ "</td> <td>"+ element.dept_name+"<td/> <td> "+ element.title+"</td><td>"+element.gender+"</td></tr>"+ "<br/>";
            });
            $('#result').html(names);
        },"json");
        return false;
    });

   </script>
    
  </body>
</html>